<?php
class Front extends CI_Controller{
	public $CI = NULL;
	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->library('session');
		$this->load->library('encryption');
		$this->load->helper('url');
		$this->CI = & get_instance();
	}
	
	public function index(){
		$this->load->view('front/index');
	}
	public function View($folder,$page){
		$this->load->view(''.$folder.'/'.$page.'');
	}
	public function View_front($folder,$page){
		if($this->session->userdata('user_data') != ''){
			redirect('admin/customer_dashboard');
		}else{
			$this->load->view('front/'.$folder.'/'.$page.'');
		}
	}
	public function sign_in()
	{
		if($this->session->userdata('user_data') != ''){
			redirect('admin/customer_dashboard');
		}else{
			redirect('View_front/login/login');
		}
	}
	public function load_reg(){
		$output="";
		$output.='<h4 class="mt-3 text-center">Sign <span style="color:#ff4a17;">Up</span></h4>
		<form class="mt-4" action="'.base_url().'front/register" method="post">
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<input class="form-control" type="text" placeholder="your name" name="c_name">
				</div>
			</div>
			<div class="col-lg-12">
				<div class="form-group">
					<input class="form-control" type="email" placeholder="email address" name="c_email">
				</div>
			</div>
			<div class="col-lg-12">
				<div class="form-group">
					<input class="form-control" type="contact" placeholder="contact" name="c_contact">
				</div>
			</div>
			<div class="col-lg-12">
				<div class="form-group">
					<input class="form-control" type="password" placeholder="password" name="password">
				</div>
			</div>
			<div class="col-lg-12 text-center">
				<button type="submit" class="btn btn-block" style="background-color:#ff4a17;color:#fff;">Sign Up</button>
			</div>
			<div class="col-lg-12 text-center mt-5">
				Already have an account? <a href="javascript:void(0)" class=" log" style="color:#ff4a17;">Sign In</a>
			</div>
		</div>
	</form>';
	  echo $output;
	}
	public function register()
	{
		$data=array(
			'c_name'=>$this->input->post('c_name'),
			'c_contact'=>$this->input->post('c_contact'),
			'c_email'=>$this->input->post('c_email'),
			'password'=>sha1($this->input->post('password')),
		);
		$data['verify']='1';
		$data['user_type']='1';
		$data['status']='0';
		$data['count']='0';
		$data['block']='0';
		$data['date']=date('d-m-Y');
		$insert=$this->Admin_model->create('customer',$data);
		$this->session->set_flashdata('msg','Registered Successfully');
		redirect('View_front/login/login');
	}
	public function login()
	{
		$contact=$this->input->post('contact');
		$password=sha1($this->input->post('password'));
		$val_check=$this->Admin_model->val_check('customer','c_contact',$contact,'password',$password);
		if(count($val_check) > 0){
            $user_data=array();
			foreach($val_check as $user_row){
				if($user_row['verify'] != '0' && $user_row['block'] != '1' ){
					$data['status'] ='1';
					$data['count']=$user_row['count']+1;
					$where['id']=$user_row['id'];
					$this->Admin_model->update_all('customer',$data,$where);
					$user_data['id']=$user_row['id'];
					$user_type=$this->Admin_model->val_check('customer_user_types','id',$user_row['user_type']);
					foreach($user_type as $type_row){
						$user_data['user_type']=$user_row['type'];
					}
                    $user_data['user_id']=$user_row['id'];
					$this->session->set_userdata('user_data',$user_data);
					redirect('admin/customer_dashboard');
				}else{
					$this->session->set_flashdata('error','User Blocked');
					redirect('View_front/login/login');
				}
			}
		}else{
			$this->session->set_flashdata('error','Incorrect contact or password');
			redirect('View_front/login/login');
		}
	}
	public function load_log()
	{
		$output="";
		$output.='<h4 class="mt-3 text-center">Sign <span style="color:#ff4a17;">In</span></h4>
		<form class="mt-4" action="'.base_url().'front/login" method="post">
			<div class="row">
				<div class="col-lg-12">
					<div class="form-group text-left">
						<label class="text-dark" for="contact">Contact</label>
						<input class="form-control " id="contact" type="text"
							placeholder="enter your contact">
					</div>
				</div>
				<div class="col-lg-12">
					<div class="form-group text-left">
						<label class="text-dark" for="pwd">Password</label>
						<input class="form-control" id="pwd" type="password"
							placeholder="enter your password">
					</div>
				</div>
				<div class="col-lg-12 text-center">
					<button type="submit" class="btn btn-block " style="background-color:#ff4a17;color:#fff;">Sign In</button>
				</div>
				<div class="col-lg-12 text-center mt-5">
					Create an account? <a href="javascript:void(0)" class=" sign" style="color:#ff4a17;">Sign Up</a>
				</div>
			</div>
		</form>';
	  echo $output;
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

		$this->Admin_model->update_all('customer',$data,$where);
		$this->session->sess_destroy();
		redirect('Front');
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
}