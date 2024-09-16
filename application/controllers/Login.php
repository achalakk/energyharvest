<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
  //public  $sdata;
	public function __construct()
	   {
		parent::__construct();
		$this->load->model('Login_model');
		
			$this->load->library(array('form_validation','session'));
				$this->load->helper(array('url','html','form'));
				$this->user_id = $this->session->userdata('user_id');
				  
	   }
 
 
   public function index()
   {
	if(!empty($this->user_id)){

        redirect(base_url('dashboard1'));
      }
	$this->load->view('login');
   }
   
   
   //Login Validation..................................................
   public function loginval()
	   {

	   $this->form_validation->set_rules('number', 'Phone Number', 'required|regex_match[/^[0-9]{10}$/]');
	   $this->form_validation->set_rules('password', 'Password', 'trim|required');

	  

	   if ($this->form_validation->run() === FALSE)
	   {  
		   $this->load->view('login');
	   }
	   
	   else
	   {   
		   $data = array('phone' => $this->input->post('number'), 'password' => $this->input->post('password'));
  
		   $check = $this->Login_model->auth_check($data);
		 
		   if($check != false){
			  
					   
				$user = array(
				'user_id' => $check->id,
				'user_name' => $check->name,
				'email'=>$check->email
			   );
 
		   $this->session->set_userdata($user);
		    
			$this->load->view('dashboard');
			redirect(base_url('dashboard1')); 

		   }
		   else
		   {
		   $this->session->set_flashdata('msg', 'Phone Number / Password Invalid');

		  $this->load->view('login');
		   }
	   }
		
   }
   
    public function logout(){
   $this->session->sess_destroy();
  $this->load->view('login');
  } 
  
  //DashBoard.........................................................
  
  public function dashboard1(){
	  
	  if(empty($this->user_id)){
	   $this->load->view('login');
	 }
	 else{
	   $this->load->view('dashboard');
	 }
   }
   
  
  
 //Change Password............................................................................................
   public function changepswd()
   {
     $this->load->view('changepwd');
   }

 public function editPswd()
 {
		    $uid=$this->user_id;
		$pswd1 = $this->input->post('password');
		$pswd2 = $this->input->post('repassword');
		if($pswd1==$pswd2)
		{
		$this->Login_model->updatePswd($uid,$pswd1);
		$this->session->set_flashdata('msg1', 'Password Changed Successfully');
		$this->load->view('changepwd');
		}
		else
		{
		$this->session->set_flashdata('msg1', 'Passwords are not match');
		$this->load->view('changepwd');
		}
  }
  
}