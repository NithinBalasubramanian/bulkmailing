<?php
class Admin extends CI_Controller{
	public $CI = NULL;
	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->library('session');
		$this->load->library('encryption');
		$this->load->helper('url');
		$this->load->library('email');
		$this->CI = & get_instance();
	}
	
	public function index()
	{
		if($this->session->userdata('user_data') != ''){
			$this->load->view('admin/index');
		}else{
				$data['mes']='';
				$data['code']='';
				$this->load->view('admin/login',$data);
		}
	}
	public function customer_dashboard()
	{
		if($this->session->userdata('user_data') != ''){
			$this->load->view('admin/index');
		}else{
				$this->session->set_flashdata('error','Session Expired');
				redirect('View_front/login/login');
		}
	}
	public function administration()
	{
		$user_mail=$this->input->post('user_mail');
		$password=sha1($this->input->post('password'));
		$val_check=$this->Admin_model->val_check('administration','email',$user_mail);
		if(count($val_check) > 0 ){
			foreach($val_check as $admin_row){
				$data_set['user_type']=$admin_row['type'];
				$data_set['id']=$admin_row['id'];
				$verify = $admin_row['verify'];
				if($verify == '1'){
				$status=$admin_row['status'];
					$data['status']='1';
					$data['count']=$admin_row['count']+1;
					$where['id']=$admin_row['id'];
					$this->Admin_model->update_all('administration',$data,$where);
				$this->session->set_userdata('user_data',$data_set);
				redirect('admin');
				}else{
					$data['mes']="Account is Not verified ,wait for verification";
					$data['code']='red';
					$this->load->view('admin/login',$data);
				}
				
			}
		}
		else{
			$data['mes']="Incorrect email or password";
			$data['code']='red';
			$this->load->view('admin/login',$data);
		}
	}
	public function administration_reg()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('user_mail');
		$contact=$this->input->post('contact');
		$val_check=$this->Admin_model->table_column_or('administration','email',$email,'contact',$contact);
		if(count($val_check) == 0 ){
		$password=sha1($this->input->post('password'));
		$data_reg=array(
			'name'=>$name,
			'email'=>$email,
			'contact'=>$contact,
			'password'=>$password,
			'type'=>'sub_admin',
			'status'=>'0',
			'count'=>'0',
			'verify'=>'0',
		);
		$this->Admin_model->create('administration',$data_reg);
		$data['code']='success';
		$data['mes']="Registered successfully wait for verify will be noted by email";
		$this->load->view('admin/login',$data);
	}
	}
	public function email_check()
	{
		$email=$this->input->post('email');
		if($email != ''){
		$count=$this->Admin_model->like_check('administration','email',$email);
		$data=array();
		if(count($count) >0){
			$data['count']='1';
		}else{
			$data['count']='0';
		}
	}else{
			$data['count']='';
		}
		echo json_encode($data);
	}
	public function cont_check()
	{
		$cont=$this->input->post('cont');
		if($cont != ''){
		$count=$this->Admin_model->like_check('administration','contact',$cont);
		$data=array();
		if(count($count) >0){
			$data['count']='1';
		}else{
			$data['count']='0';
		}
	}else{
			$data['count']='';
		}
		echo json_encode($data);
	}
	public function View($folder,$page,$edit_id = FALSE)
	{
		if($this->session->userdata('user_data') != ''){
			if($edit_id != FALSE){
				$data['edit_id'] = $edit_id;
				$this->load->view('admin/'.$folder.'/'.$page.'',$data);
			}else{
				$this->load->view('admin/'.$folder.'/'.$page.'');
			}
		}else{
			$data['mes']='';
			$data['code']='';
			$this->load->view('admin/login',$data);
		}
	}
	public function verify()
		{
			$where = array();
			$data = array();
			$val=$this->input->post('val');
			$tablename=$this->input->post('tablename');
			$where['id']=$this->input->post('id');
			if($val == '1'){
				$data['verify']='0';
			}else{
				$data['verify']='1';
			}
			$update_all = $this->Admin_model->update_all($tablename,$data,$where);
			echo json_encode($data);
		}
	public function Insert($tablename, $folder, $current_page, $page)
	{
		$columns = $this->Admin_model->table($tablename);
					for($i=0;$i<count($columns);$i++)
					{
						if($columns[$i]!="id")
						{
						   if($columns[$i]=="date_created") {
								$date = date('Y-m-d');
								$data[$columns[$i]] = $date;
							} else {
								$data[$columns[$i]] = $this->input->post($columns[$i]);
							}
						}
					}
					$insert = $this->Admin_model->create($tablename,$data);
					if(isset($insert)){
						redirect('View_admin/'.$folder.'/'.$page.'');
					} else {
						redirect('View_admin/'.$folder.'/'.$current_page.'');
					}
	}
	public function Update_administration($tablename, $folder, $edit_id, $current_page, $page)
	{
		$where = array();
		$where['id'] = $edit_id;
		$data = array();
		if($this->input->post('type')){
			$data['type']=$this->input->post('type');
		}
		$data['name']=$this->input->post('name');
		$data['email']=$this->input->post('email');
		$data['contact']=$this->input->post('contact');
		$update_all = $this->Admin_model->update_all($tablename,$data,$where);
		if(isset($update_all)){
			redirect('View_admin/'.$folder.'/'.$page.'');
		} else {
			redirect('View_admin/'.$folder.'/'.$current_page.'');
		}
	}

	public function Update_all($tablename, $folder, $edit_id, $current_page, $page)
        {
			$where = array();
					$columns = $fields['columns'] = $this->Admin_model->table($tablename);
					for($i=0;$i<count($columns);$i++)
					{
						if(($columns[$i]!="id")&&($columns[$i]!="user_id")&&($columns[$i]!="status")&&($columns[$i]!="date_created"))
						{
							if($columns[$i]=="date_modified") {
								$date = date('Y-m-d');
								$data[$columns[$i]] = $date;
							} else{
								$data[$columns[$i]] = $this->input->post($columns[$i]);
							}
						}
					}
				
				
						$where['id'] = $edit_id;
						$update_all = $this->Admin_model->update_all($tablename,$data,$where);
					
					
					if(isset($update_all)){
						redirect('View_admin/'.$folder.'/'.$page.'');
					} else {
						redirect('View_admin/'.$folder.'/'.$current_page.'');
					}
		}

	public function Delete($tablename,$folder,$page,$del_id)
		{
			$where['id']=$del_id;
			$delete=$this->Admin_model->delete_row($tablename,$del_id);
			if(isset($delete)){
				redirect('View_admin/'.$folder.'/'.$page.'');
			} else {
				redirect('View_admin/'.$folder.'/'.$page.'');
			}
		}

	public function logout(){
		// $user_data = $this->session->all_userdata();
		// foreach ($user_data as $key => $value) {
		// 	if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
		// 		$this->session->unset_userdata($key);
		// 	}
		// }
		// $this->session->unset_userdata['user_data']['user_data'];
		// $this->session->unset_userdata['user_data']['admin'];
		$where = array();
		$data = array();
		$session=$this->session->userdata('user_data');
		$where['id']=$session['id'];
		$data['status']='0';

		$this->Admin_model->update_all('administration',$data,$where);
		$this->session->sess_destroy();
		redirect('Admin');
	}
	public function Add_email_setting($tablename,$foldername,$filename)
	{
		$session=$this->session->userdata('user_data');
		$user_id=$session['id'];
	    $columns = $this->Admin_model->table($tablename);
			for($i=0;$i<count($columns);$i++)
			{
				if($columns[$i]!="id")
				{
				   if($columns[$i]=="date_created") {
						$date = date('Y-m-d');
						$data[$columns[$i]] = $date;
					}else if($columns[$i]=="user_id"){
						$data[$columns[$i]] = $user_id;
					}else if($columns[$i]=="status"){
						$data[$columns[$i]] = '1';
					}
					else {
						$data[$columns[$i]] = $this->input->post($columns[$i]);
					}
				}
			}
			
	        $this->Admin_model->create($tablename,$data);
	        redirect('View_admin/'.$foldername.'/'.$filename.'');
	}
    public function Edit_setting($tablename,$foldername,$filename)
	{
		$where['id']='1';
		$session=$this->session->userdata('user_data');
		$user_id=$session['id'];
	    $columns = $this->Admin_model->table($tablename);
			for($i=0;$i<count($columns);$i++)
			{
				if($columns[$i]!="id")
				{
				   if($columns[$i]=="date_created") {
						$date = date('Y-m-d');
						$data[$columns[$i]] = $date;
					}else if($columns[$i]=="user_id"){
						$data[$columns[$i]] = $user_id;
					}
					else {
						$data[$columns[$i]] = $this->input->post($columns[$i]);
					}
				}
			}
			if($_FILES["img"]["name"]){
        		$fileExt = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
        		$imgname=time().'_a.'.$fileExt;
        		
                    $config['upload_path']='./assets/admin/img'; 
                    $config['allowed_types']='png|jpg|jpeg';
                    $config['encrypt_name']=FALSE;
                    $config['file_name']=$imgname;
        			$this->load->library('upload',$config);
        			$this->upload->do_upload('img');
        			$data['img']=$imgname;
        	}
	        $this->Admin_model->update_all($tablename,$data,$where);
	        redirect('View_admin/'.$foldername.'/'.$filename.'');
	}
    public function status()
	{
	    
	    $id=$this->input->post('id');
	    $tablename=$this->input->post('tablename');
	    $profile=$this->Admin_model->table_column($tablename,'id',$id);
	    foreach($profile as $row)
	    {
	        $status=$row['status'];
	        if($status == 1)
	        {
	            $data['status']=0;
	            $where['id']=$id;
	            $this->Admin_model->update_all($tablename,$data,$where);
	        }
	        if($status == 0)
	        {
	            $data['status']=1;
	            $where['id']=$id;
	            $this->Admin_model->update_all($tablename,$data,$where);
	        }
	    }
	}
    public function mail()
    	{
    	    $this->load->library('email');
			//Load email library
	        $email=$this->input->post('essai');
	        $message=$this->input->post('description');
			$subject=$this->input->post('subject');
			$multi_email=explode(';',$email); 
			$session=$this->session->userdata('user_data');
            $user_id = $session['id'];
			$smtp_data = $this->Admin_model->table_column('smpt','user_id',$user_id);
			foreach($smtp_data as $row){
				$host = $row['host'];
				$from_mail = $row['user'];
				$username = $row['username'];
				$pass = $row['password'];
				$port = $row['post'];
			}
				// print_r($multi_email);
				for($i=0;$i<count($multi_email);$i++){
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
				
				$this->email->to($multi_email[$i]); 
				if($this->email->send()){
					$result = 'true';
				}else{
					$result = 'False';
				}
				}
				if($result == 'true'){
					echo count($multi_email).' Mail Sent Successfully';
				}else{
					echo count($multi_email).' Mail Sent UnSuccessfully';
				}
		}
	public function sendmail()
	{
		$this->load->library('email');
		//Load email library
		$email=$this->input->post('email');
		$message=$this->input->post('description');
		$subject=$this->input->post('subject');
		$session=$this->session->userdata('user_data');
		$user_id = $session['id'];
		$smtp_data = $this->Admin_model->table_column('smpt','user_id',$user_id);
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
	public function delete_members()
	{
      
	    $id=$this->input->post('id');
	    $tablename=$this->input->post('tablename');
	    $profile=$this->Admin_model->table_column($tablename,'id',$id);
	    foreach($profile as $row)
	    {
	        $status=$row['status'];
	        if($status == 1)
	        {
	            $data['status']=0;
	            $where['id']=$id;
	            $this->Admin_model->update_all($tablename,$data,$where);
	        }else{
                $data['status']=1;
	            $where['id']=$id;
	            $this->Admin_model->update_all($tablename,$data,$where);
            }
	    }
	}
}