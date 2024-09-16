<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    
    
   public function __construct()
   {
       $this->load->database();
   }
    
	//Login Validation..........................................................................................
   public function auth_check($data)
   {
    $this->db->select('*');
    $this->db->from('tbl_users');
    $this->db->where($data);
    
    $query = $this->db->get();
     
       if($query){   
        return $query->row();
       
       }
       return false;
   }
   
  
   
  //Password.....................................................................................................
  public function updatePswd($uid,$pswd1)
  {
	 $date=date('Y-m-d H:i:s');
	 $data=array('password' => $pswd1,'created_date'=>$date); 
	 $this->db->where('id', $uid);
     $this->db->update('tbl_users', $data);
	  
  }
  
}