<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:GET,POST");
header("Access-Control-Allow-Headers:*");

class Api extends CI_Controller{
	public $CI = NULL;
	function __construct(){
		parent::__construct();
		$this->load->model('Api_model');
        $this->load->library('email');
    }
    
    public function fetch_data($tablename)
    {
        $result = $this->Api_model->fetch_all($tablename);
        echo json_encode($result);
    }

    public function send_mail()
    {
        $subject = $_GET['subject'];
        $email = $_GET['email'];
        $message = $_GET['message'];
        $smtp_data = $this->Admin_model->table_column('smpt');
		foreach($smtp_data as $row){
			$host = $row['host'];
			$from_mail = $row['user'];
			$username = $row['username'];
			$pass = $row['password'];
			$port = $row['post'];
		}
			// print_r($multi_email);
			//Load email library
			$email_config = Array(
				'smtp_crypto'=>'ssl', //add this one
				'protocol' => 'smtp',
				'smtp_host' => $host,
				'smtp_port' => $port,
				'smtp_user' => $from_mail,
				'smtp_pass' => $pass,
				'mailtype'  => 'html',
				'starttls'  => true,
				'newline'   => "\r\n",
				'charset' => 'utf-8',
				'wordwrap' => TRUE,
				
			);
			$this->load->library('email', $email_config);
        $this->email->set_newline("\r\n");
        
        // $this->email->initialize($config);
        $this->email->from($from_mail,$username);
        $this->email->subject($subject);

        $this->email->message($message);  
        
        $this->email->to($email); 
    //Send mail
        if($this->email->send()){
            echo 'success';
        }else{
            echo 'error';
        }
    }
    public function sendmail()
	{
		$this->load->library('email');
		//Load email library
		$email=$this->input->post('email');
		$message=$this->input->post('description');
		$subject=$this->input->post('subject');
		$smtp_data = $this->Admin_model->table_column('smpt');
		foreach($smtp_data as $row){
			$host = $row['host'];
			$from_mail = $row['user'];
			$username = $row['username'];
			$pass = $row['password'];
			$port = $row['post'];
		}
			// print_r($multi_email);
			//Load email library
			$email_config = Array(
				'smtp_crypto'=>'ssl', //add this one
				'protocol' => 'smtp',
				'smtp_host' => $host,
				'smtp_port' => $port,
				'smtp_user' => $from_mail,
				'smtp_pass' => $pass,
				'mailtype'  => 'html',
				'starttls'  => true,
				'newline'   => "\r\n",
				'charset' => 'utf-8',
				'wordwrap' => TRUE,
				
			);
			$this->load->library('email', $email_config);
			$this->email->set_newline("\r\n");
			
			// $this->email->initialize($config);
			$this->email->from($from_mail,$username);
			$this->email->subject($subject);
	
			$this->email->message($message);  
			
			$this->email->to($email); 
			if($this->email->send()){
				$result = 'true';
			}else{
				$result = 'False';
			}
			if($result == 'true'){
				echo 'Mail Sent Successfully';
			}else{
				echo 'Mail Sent UnSuccessfully';
			}
	}

	public function react_post()
	{
		$post_got = file_get_contents("php://input");
		$data_got = json_decode($post_got);
		$data = array(
			'name' => $data_got->name,
			'contact' => $data_got->contact,
			'email' => $data_got->email,
		);
		$this->Api_model->create('react_customer',$data);
	}
}
?>