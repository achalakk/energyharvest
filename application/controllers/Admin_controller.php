<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_controller extends CI_Controller {
  //public  $sdata;
	public function __construct()
	   {
		parent::__construct();
		$this->load->model('Admin_model');
		
			$this->load->library(array('form_validation','session'));
				$this->load->helper(array('url','html','form'));
				$this->user_id = $this->session->userdata('user_id');
				  
	   }
//Dashboard...........................................................................................

 public function dashboard(){
	  ///if(empty($this->user_id)){
	  // redirect(base_url('login'));
	 //}
	  $this->load->model('Admin_model');
	  $result['rcount']=$this->Admin_model->totalRestaurant();
	  $result['scount']=$this->Admin_model->totalStalls();
	  $result['offerscount']=$this->Admin_model->totalOffers();
	  $this->load->view('dashboard' , $result);
	  
   }



//Locations with restaurants...................................................................
/*
public function loc(){
	 $result['loclist'] = $this->Admin_model->location_list();
	 $result['rlist']=$this->Admin_model->restaurant();
	$this->load->view('location',$result);
}

public function addlocation(){
	$result['rlist']=$this->Admin_model->restaurant();
	$this->load->view('addloc',$result);
}

public function insertlocation()
{
	$date =date('Y-m-d H:i:s');
					 
					 
					 $data =array(
					
					'r_id' =>$this->input->post('rname'),
					'location' =>$this->input->post('location'),
					'address' =>$this->input->post('addr'),
	               'phone' =>$this->input->post('phone'),				   
                   'now'=>$date
 
                    );
					 
	  $this->Admin_model->locationinsertion($data);
	   redirect(base_url('loc'));
	
}

public function editlocation(){
	$id = $this->uri->segment(2);
	$result['rlist']=$this->Admin_model->restaurant();
	   $result['ellist'] = $this->Admin_model->locationediting($id);
	   $this->load->view('editloc',$result);
}

public function updatelocation()
{
	$lid = $this->uri->segment(2);
	$date =date('Y-m-d H:i:s');
					 
					  $data =array(

	               'r_id' =>$this->input->post('rname'),
					'location' =>$this->input->post('location'),
					'address' =>$this->input->post('addr'),
	               'phone' =>$this->input->post('phone'),				   
                   'now'=>$date
 
                    );
					 
  $result=$this->Admin_model->locationupdation($data,$lid);
  redirect(base_url('loc'));
}

public function deletelocation()
{
	$lid = $this->uri->segment(2);
		$this->Admin_model->locationdeletion($lid);
							                    
	  redirect(base_url('loc'));
	
}

*/



//Locations..................................................................................................
public function locList()
{
	
	  $result['llist'] = $this->Admin_model->loclist();
	     $this->load->view('locations',$result);
	
}
public function addLoc()
{
	//if(empty($this->user_id)){
	  // $this->load->view('login');
	 //}
	 //else{
	 
	     $this->load->view('addlocation');
	 //}
	
}
public function editLoc()
{
	 //if(empty($this->user_id)){
	 //  redirect(base_url('login'));
	 //}
	// else{
		$id = $this->uri->segment(2);
	   $result['llist'] = $this->Admin_model->locInfo($id);
	   $this->load->view('editlocation',$result);
	// }
	
}
public function deleteLoc()
{
	$lid = $this->uri->segment(2);
		$this->Admin_model->deleteLoc1($lid);
							                    
	  redirect(base_url('locList'));
	
}
public function insertLoc()
{
	$date =date('Y-m-d H:i:s');
					 
					 
					 $data =array(

	               'name' =>$this->input->post('title'),				   
                   'created_date'=>$date
 
                    );
					 
	  $this->Admin_model->insertlocation($data);
	   redirect(base_url('locList'));
	
}	
public function updateLoc()
{
	$lid = $this->uri->segment(2);
	$date =date('Y-m-d H:i:s');
					 
					  $data =array(

	               'name' =>$this->input->post('title'),				   
                   'created_date'=>$date
 
                    );
					 
  $result=$this->Admin_model->updateLoc1($data,$lid);
  redirect(base_url('locList'));
}
public function loc_taken()
{
	$loc = trim($_POST['loc']);
	$loc1=strtolower($loc);
              
   if ($this->Admin_model->loc_exists($loc1)) {
                          echo '1';
              }				 
}

//address.....................................................................................................
/*
public function addresslist(){
	$this->load->view('address');
}

public function add_address(){
	$result['rlist']=$this->Admin_model->restaurant();
	$result['locationlist'] = $this->Admin_model->loclist();
	$this->load->view('addaddress',$result);
}

public function dependentlocation(){ 
    // POST data 
    $postData = $this->input->post();
  
    // load model 
    
    $this->load->model('Admin_model');
    // get data 
    $data = $this->Admin_model->restloc($postData);
    echo json_encode($data); 
  }
  */
 

//Restaurants.................................................................................


public function restaurantlist(){
	
	$result['rlist']=$this->Admin_model->restaurant();
	$result['locationlist'] = $this->Admin_model->loclist();
	$this->load->view('restaurants',$result);
}

public function addingrestaurant(){
	 $result['locationlist'] = $this->Admin_model->loclist();
	$this->load->view('addrestaurant',$result);
}


public function insertrestaurant()
{
		  
	$name = $this->input->post('restaurant');
	$mtitle = $this->input->post('mtitle');
	$stitle = $this->input->post('stitle');
	$price = $this->input->post('price');
	//$loc=implode(',',$this->input->post('loc'));	
	/*$mobile = $this->input->post('phone');
	$loc = $this->input->post('loc');
	$addr = $this->input->post('addr');*/
	
	/*
	// Set preference
				$config['upload_path'] = 'uploads/images/';	
				$config['allowed_types'] = 'jpg|jpeg|png|jfif|gif';
				$config['max_size']    = '5000';	// max_size in kb
				$config['file_name'] = $_FILES['file']['name'];
				
				
				//Load upload library
				$this->load->library('upload',$config);			
				$this->upload->initialize($config);

				
			if (!$this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors());
             
            $this->load->view('addrestaurant', $error); print_r($error);
			}
			else
			{
				$image_path = $this->upload->data();
				
                 $path =$config['upload_path'].$config['file_name'];
				
				$this->Admin_model->insertrest($name,$mtitle,$stitle,$price,$mobile,$loc,$addr,$path);
				 redirect(base_url('restaurantlist'));
			}
	}*/
	
	$filesCount=0;

     if(isset($_FILES['file1']['name'])&&!empty($_FILES['file1']['name'][0])){
		 
        $filesCount = count($_FILES['file1']['name']);
 
          for($i = 0; $i < $filesCount; $i++){

	     if($_FILES['file1']['name'][$i]!="" && $_FILES['file1']['name'][$i]!=null ){
	 	   
	    
		$_FILES['file']['name'] = $_FILES['file1']['name'][$i];
        $_FILES['file']['type'] = $_FILES['file1']['type'][$i];
        $_FILES['file']['tmp_name'] = $_FILES['file1']['tmp_name'][$i];
        $_FILES['file']['error'] = $_FILES['file1']['error'][$i];
        $_FILES['file']['size'] = $_FILES['file1']['size'][$i];
		
        $config['file_name'] = $_FILES['file1']['name'][$i];
	    $config['upload_path'] = 'uploads/images/';
        $config['allowed_types'] = 'png|jpeg|jpg|JPG|JPEG|PNG';

		
		 $this->load->library('upload', $config);
		   $this->upload->initialize($config);
	
	if (!$this->upload->do_upload('file')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				$this->load->view('addrestaurant', $error);
			}
	
	
	else{
		$upload_data = $this->upload->data();
		   if($i==$filesCount-1) 
		   {
			  $uploadData .=$config['upload_path']. $config['file_name']; 
		   }
		   else
		   {
		$uploadData .=$config['upload_path']. $config['file_name'].",";
		   }
	  
		
  

	
}
		   }
      
	 

  }
  
   $this->Admin_model->insertrest($name,$mtitle,$stitle,$price,$uploadData);//,$loc,$mobile,$loc,$addr
		redirect(base_url('restaurantlist'));
 }
 else{
	 $this->Admin_model->insertrest1($name,$mtitle,$stitle,$price);//,$loc,$mobile,$loc,$addr
		redirect(base_url('restaurantlist'));
 }

 
}
 

public function deleterest()
{
	$rid = $this->uri->segment(2);
		$this->Admin_model->deleterestaurant($rid);
							                    
	  redirect(base_url('restaurantlist'));
	
}

public function editrestaurants(){
	$id = $this->uri->segment(2);
	//$id = $this->uri->segment(3);
	 $result['locationlist'] = $this->Admin_model->loclist();
	   $result['elist'] = $this->Admin_model->editrest($id);
	  //  $result['elist1'] = $this->Admin_model->editrest1($id);
	$this->load->view('editrestaurant',$result);
}


public function updateRes(){
		  $aid=$this->uri->segment(2);
		  
	   $name = $this->input->post('restaurant');
	$mtitle = $this->input->post('mtitle');
	$stitle = $this->input->post('stitle');
	$price = $this->input->post('price'); 
	//$loc=implode(',',$this->input->post('loc'));	
	/*$mobile = $this->input->post('phone');
	$loc = $this->input->post('loc');
	$addr = $this->input->post('addr');*/
	
	$filesCount=0;

     if(isset($_FILES['file1']['name'])&&!empty($_FILES['file1']['name'][0])){
		 
        $filesCount = count($_FILES['file1']['name']);
 
          for($i = 0; $i < $filesCount; $i++){

	     if($_FILES['file1']['name'][$i]!="" && $_FILES['file1']['name'][$i]!=null ){
	 	   
	    
		$_FILES['file']['name'] = $_FILES['file1']['name'][$i];
        $_FILES['file']['type'] = $_FILES['file1']['type'][$i];
        $_FILES['file']['tmp_name'] = $_FILES['file1']['tmp_name'][$i];
        $_FILES['file']['error'] = $_FILES['file1']['error'][$i];
        $_FILES['file']['size'] = $_FILES['file1']['size'][$i];
		
        $config['file_name'] = $_FILES['file1']['name'][$i];
	    $config['upload_path'] = 'uploads/images/';
        $config['allowed_types'] = 'png|jpeg|jpg|JPG|JPEG|PNG';

		
		 $this->load->library('upload', $config);
		   $this->upload->initialize($config);
	
	if (!$this->upload->do_upload('file')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				$this->load->view('editrestaurant', $error);
			}
	
	
	else{
		$upload_data = $this->upload->data();
		   if($i==$filesCount-1) 
		   {
			  $uploadData .=$config['upload_path']. $config['file_name']; 
		   }
		   else
		   {
		$uploadData .=$config['upload_path']. $config['file_name'].",";
		   }
	  
		
  

	
}
		   }
      
	 

  }
  
   $this->Admin_model->updateRes1($aid,$name,$mtitle,$stitle,$price,$uploadData);//,$loc,$mobile,$loc,$addr
		redirect(base_url('restaurantlist'));
 }
	else{
		$this->Admin_model->updateRes2($aid,$name,$mtitle,$stitle,$price);//,$loc,$mobile,$loc,$addr
		redirect(base_url('restaurantlist'));
	}
                 
			
	}
/* 
public function updateRes()
{
	$lid = $this->uri->segment(2);
	$date =date('Y-m-d H:i:s');
					 
					  $data =array(

				'name' =>$this->input->post('restaurant'),				   
                'phone' =>$this->input->post('phone'),
				'location' =>$this->input->post('loc'),
				'addr' =>$this->input->post('addr'),
                                 'now'=>$date
 
                    );
					 
  $result=$this->Admin_model->updateRes1($data,$lid);
  redirect(base_url('restaurantlist'));
}
*/

	

public function restloc(){
	$id = $this->uri->segment(2);
	$result['rlist']=$this->Admin_model->restaurant();
	$result['locationlist'] = $this->Admin_model->location_list();
	   $result['elist'] = $this->Admin_model->restlocation($id);
	 
	 
	$this->load->view('restlocations',$result);
}

public function addresloc(){
	$id = $this->uri->segment(2);
	
	$result['rlist']=$this->Admin_model->restaurant();
	$result['elist'] = $this->Admin_model->restlocation($id);
	 $result['r_id']=$id;
	$this->load->view('addrestlocations',$result);
}

public function insertresloc(){
	$r_id = $this->uri->segment(2);
	 $data =array(

	            'r_id' =>$this->input->post('rname'),	
				'location' =>$this->input->post('location'),	
				'address' =>$this->input->post('addr'),		
				'phone' =>$this->input->post('phone')		
                );
					  
	  $this->Admin_model->reslocinsertion($data);
	 
	 redirect(base_url()."restloc/".$r_id);
	//redirect(base_url()."restaurantlist/");//.$r_id);
}

public function editresloc($id){
	$id = $this->uri->segment(2);
	$aid = $this->uri->segment(3);
	$result['rlist']=$this->Admin_model->restaurant();
	$result['rllist'] = $this->Admin_model->restlocation($id);
	$result['elist'] = $this->Admin_model->editrestlocation($aid);
	$result['r_id']=$id;
	 
	$this->load->view('editrestlocations',$result);
}

public function updateresloc(){
	$id = $this->uri->segment(2);
	$r_id = $this->uri->segment(3);
	 $data =array(

	            'r_id' =>$this->input->post('rname'),	
				'location' =>$this->input->post('location'),	
				'address' =>$this->input->post('addr'),		
				'phone' =>$this->input->post('phone')		
                );
					 
	  $this->Admin_model->reslocupdation($data,$id);
	 redirect(base_url()."restloc/".$r_id);
	   //redirect(base_url('restaurantlist'));
}

	public function deleteresloc()
{
	
	$tid = $this->uri->segment(2);
	$r_id = $this->uri->segment(3);
		$this->Admin_model->reslocdeletion($tid);
		
	//redirect(base_url('restaurantlist'));
	
	 redirect(base_url()."restloc/".$r_id);
}

//Category type........................................................................................
 
 public function typelist(){
	 $result['tlist']=$this->Admin_model->cattype();
	 $this->load->view('categorytype',$result);
 }

 public function addtype(){
	 $this->load->view('addcategorytype');
 }
 
 public function inserttype()
{
					 
	 $data =array(

	            'type_name' =>$this->input->post('name'),				   
                );
					 
	  $this->Admin_model->typeinsertion($data);
	   redirect(base_url('typelist'));
	
}

public function deletetype()
{
	$tid = $this->uri->segment(2);
		$this->Admin_model->typedeletion($tid);
							                    
	  redirect(base_url('typelist'));
	
}

public function edittype(){
	$id = $this->uri->segment(2);
	   $result['etlist'] = $this->Admin_model->typeediting($id);
	$this->load->view('editcategorytype',$result);
}

public function updatetype()
{
	$lid = $this->uri->segment(2);
	
	$data =array(

	               'type_name' =>$this->input->post('name'),				   
                   
                    );
					 
  $result=$this->Admin_model->typeupdation($data,$lid);
  redirect(base_url('typelist'));
}

//Category.............................................................................................

public function categorylist(){
	
	$result['clist']=$this->Admin_model->catlist();
  	$this->load->view('category',$result);
}

public function addcate(){
	 $result['tlist']=$this->Admin_model->cattype();	
	$this->load->view('addcategory',$result);
}

/*public function insertcate(){
	
	           $name=$this->input->post('title');				   
                $type=$this->input->post('ctype');			   
               
					 
	  $this->Admin_model->cateinsertion($name,$type);
	   redirect(base_url('categorylist'));
}*/

public function insertcate()
{
	$filesCount=0;

     if(isset($_FILES['file1']['name'])&&!empty($_FILES['file1']['name'][0])){
		 
        $filesCount = count($_FILES['file1']['name']);
 
          for($i = 0; $i < $filesCount; $i++){

	     if($_FILES['file1']['name'][$i]!="" && $_FILES['file1']['name'][$i]!=null ){
	 	   
	    
		$_FILES['file']['name'] = $_FILES['file1']['name'][$i];
        $_FILES['file']['type'] = $_FILES['file1']['type'][$i];
        $_FILES['file']['tmp_name'] = $_FILES['file1']['tmp_name'][$i];
        $_FILES['file']['error'] = $_FILES['file1']['error'][$i];
        $_FILES['file']['size'] = $_FILES['file1']['size'][$i];
		
        $config['file_name'] = $_FILES['file1']['name'][$i];
	    $config['upload_path'] = 'uploads/images/';
        $config['allowed_types'] = 'png|jpeg|jpg|JPG|JPEG|PNG';

		
		 $this->load->library('upload', $config);
		   $this->upload->initialize($config);
	
	if (!$this->upload->do_upload('file')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				$this->load->view('addcategory', $error);
			}
	
	
	else{
		$upload_data = $this->upload->data();
		   if($i==$filesCount-1) 
		   {
			  $uploadData .=$config['upload_path']. $config['file_name']; 
		   }
		   else
		   {
		$uploadData .=$config['upload_path']. $config['file_name'].",";
		   }
	  
		
  	  $data =array(
	'category_name'=>$this->input->post('title'),				   
    'cate_type'=>$this->input->post('ctype'),
	'image' => $uploadData
	
	);

	
}
		   }
      
	 

  }
  
   $this->Admin_model->cateinsertion($data);
		redirect(base_url('categorylist'));
 }
 
else{
	$data =array(
	'category_name'=>$this->input->post('title'),				   
    'cate_type'=>$this->input->post('ctype')
	
	);
	$this->Admin_model->cateinsertion($data);
		redirect(base_url('categorylist'));
}
 
}


public function deletecategory()
{
	$cid = $this->uri->segment(2);
		$this->Admin_model->categorydeletion($cid);
							                    
	  redirect(base_url('categorylist'));
	
}

public function editcategory(){
	$id = $this->uri->segment(2);
	$result['tlist']=$this->Admin_model->cattype();	
	   $result['eclist'] = $this->Admin_model->categoryediting($id);
	$this->load->view('editcategory',$result);
}
/*
public function updatecate(){
	$id = $this->uri->segment(2);
	           $name=$this->input->post('title');				   
                $type=$this->input->post('ctype');			   
               
					 
	  $this->Admin_model->cateupdation($id,$name,$type);
	   redirect(base_url('categorylist'));
}
*/
public function updatecate(){
		  $aid=$this->uri->segment(2);
		  
	  
	$filesCount=0;

     if(isset($_FILES['file1']['name'])&&!empty($_FILES['file1']['name'][0])){
		 
        $filesCount = count($_FILES['file1']['name']);
 
          for($i = 0; $i < $filesCount; $i++){

	     if($_FILES['file1']['name'][$i]!="" && $_FILES['file1']['name'][$i]!=null ){
	 	   
	    
		$_FILES['file']['name'] = $_FILES['file1']['name'][$i];
        $_FILES['file']['type'] = $_FILES['file1']['type'][$i];
        $_FILES['file']['tmp_name'] = $_FILES['file1']['tmp_name'][$i];
        $_FILES['file']['error'] = $_FILES['file1']['error'][$i];
        $_FILES['file']['size'] = $_FILES['file1']['size'][$i];
		
        $config['file_name'] = $_FILES['file1']['name'][$i];
	    $config['upload_path'] = 'uploads/images/';
        $config['allowed_types'] = 'png|jpeg|jpg|JPG|JPEG|PNG';

		
		 $this->load->library('upload', $config);
		   $this->upload->initialize($config);
	
	if (!$this->upload->do_upload('file')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				$this->load->view('editcategory', $error);
			}
	
	
	else{
		$upload_data = $this->upload->data();
		   if($i==$filesCount-1) 
		   {
			  $uploadData .=$config['upload_path']. $config['file_name']; 
		   }
		   else
		   {
		$uploadData .=$config['upload_path']. $config['file_name'].",";
		   }
	  
		
   $data =array(
	'category_name'=>$this->input->post('title'),				   
    'cate_type'=>$this->input->post('ctype'),	
	'image' => $uploadData
	);

	
}
		   }
      
	 

  }
  
   $this->Admin_model->cateupdation($aid,$data);
		redirect(base_url('categorylist'));
 }
	
   else{
	   $data =array(
	'category_name'=>$this->input->post('title'),				   
    'cate_type'=>$this->input->post('ctype')	
	);
	    $this->Admin_model->cateupdation($aid,$data);
		redirect(base_url('categorylist'));
   }              
			
	}
//items................................................................................................

public function itemslist(){
	
	$result['ilist']=$this->Admin_model->itemlist();
	$result['stall']=$this->Admin_model->stalll();
  	$this->load->view('items',$result);
}

public function additem(){
	$result['rlist']=$this->Admin_model->restaurant();
	//$result['slist']=$this->Admin_model->stalls();
	 $result['tlist']=$this->Admin_model->cattype();	
	$this->load->view('additems',$result);
}

public function bb(){ 
    // POST data 
    $postData = $this->input->post();
  
    // load model 
    
    $this->load->model('Admin_model');
    // get data 
    $data = $this->Admin_model->getCityDepartment($postData);
    echo json_encode($data); 
  }
  
  public function stallname(){ 
    // POST data 
    $postData = $this->input->post();
  
    // load model 
    
    $this->load->model('Admin_model');
    // get data 
    $data = $this->Admin_model->stalldet($postData);
    echo json_encode($data); 
  }
/*
public function insertitem(){
	
				$rname=$this->input->post('rname');				   
	           $ctype=$this->input->post('ctype');				   
                $cname=$this->input->post('cname');			   
               $item=$this->input->post('item');			   
       			$price=$this->input->post('price');			   
       			 
	  $this->Admin_model->iteminsertion($rname,$ctype,$cname,$item,$price);
	   redirect(base_url('itemslist'));
}*/

public function insertitem()
{
	$filesCount=0;

     if(isset($_FILES['file1']['name'])&&!empty($_FILES['file1']['name'][0])){
		 
        $filesCount = count($_FILES['file1']['name']);
 
          for($i = 0; $i < $filesCount; $i++){

	     if($_FILES['file1']['name'][$i]!="" && $_FILES['file1']['name'][$i]!=null ){
	 	   
	    
		$_FILES['file']['name'] = $_FILES['file1']['name'][$i];
        $_FILES['file']['type'] = $_FILES['file1']['type'][$i];
        $_FILES['file']['tmp_name'] = $_FILES['file1']['tmp_name'][$i];
        $_FILES['file']['error'] = $_FILES['file1']['error'][$i];
        $_FILES['file']['size'] = $_FILES['file1']['size'][$i];
		
        $config['file_name'] = $_FILES['file1']['name'][$i];
	    $config['upload_path'] = 'uploads/images/';
        $config['allowed_types'] = 'png|jpeg|jpg|JPG|JPEG|PNG';

		
		 $this->load->library('upload', $config);
		   $this->upload->initialize($config);
	
	if (!$this->upload->do_upload('file')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				$this->load->view('addrestaurant', $error);
			}
	
	
	else{
		$upload_data = $this->upload->data();
		   if($i==$filesCount-1) 
		   {
			  $uploadData .=$config['upload_path']. $config['file_name']; 
		   }
		   else
		   {
		$uploadData .=$config['upload_path']. $config['file_name'].",";
		   }
	  
		
  	  $data =array(
				'r_id'=>$this->input->post('rname'),
				'stall_id'=>$this->input->post('sname'),
				'type_id'=>$this->input->post('ctype'),
				'minititle'=>$this->input->post('minititle'),				
                'category_id'=>$this->input->post('cname'),			   
				'item_name'=>$this->input->post('item'),
				'description'=>$this->input->post('description'),
				'image' => $uploadData,				
       			'price'=>$this->input->post('price'),	
				'discount'=>$this->input->post('discount')
				
				);

	
}
		   }
      
	 

  }
  
   $this->Admin_model->iteminsertion($data);
		redirect(base_url('itemslist'));
 }
 else{
	 	
  	  $data =array(
				'r_id'=>$this->input->post('rname'),
				'stall_id'=>$this->input->post('sname'),
				'type_id'=>$this->input->post('ctype'),
				'minititle'=>$this->input->post('minititle'),
                'category_id'=>$this->input->post('cname'),			   
				'item_name'=>$this->input->post('item'),
				'description'=>$this->input->post('description'),
       			'price'=>$this->input->post('price'),	
				'discount'=>$this->input->post('discount')	
					
				);
				$this->Admin_model->iteminsertion($data);
		redirect(base_url('itemslist'));
 }

 
}


 public function deleteitem()
	{
		$aid=$this->uri->segment(2);
		$this->Admin_model->itemdeletion($aid);
		redirect(base_url('itemslist'));	
	}

public function edititem()
{
	$aid=$this->uri->segment(2);
	$rid=$this->uri->segment(3);
	//$result['stall']=$this->Admin_model->stalll();
	$result['slist']=$this->Admin_model->stall2($rid);
	$result['ilist']=$this->Admin_model->itemlist();
	$result['rlist']=$this->Admin_model->restaurant();
	$result['tlist']=$this->Admin_model->cattype();	
	$result['itlist']=$this->Admin_model->itemediting($aid);
	$result['itlist1']=$this->Admin_model->itemediting1($aid);
	$this->load->view('edititems',$result);
}


	
public function updateitem(){
		  $aid=$this->uri->segment(2);
		  
	  
	$filesCount=0;

     if(isset($_FILES['file1']['name'])&&!empty($_FILES['file1']['name'][0])){
		 
        $filesCount = count($_FILES['file1']['name']);
 
          for($i = 0; $i < $filesCount; $i++){

	     if($_FILES['file1']['name'][$i]!="" && $_FILES['file1']['name'][$i]!=null ){
	 	   
	    
		$_FILES['file']['name'] = $_FILES['file1']['name'][$i];
        $_FILES['file']['type'] = $_FILES['file1']['type'][$i];
        $_FILES['file']['tmp_name'] = $_FILES['file1']['tmp_name'][$i];
        $_FILES['file']['error'] = $_FILES['file1']['error'][$i];
        $_FILES['file']['size'] = $_FILES['file1']['size'][$i];
		
        $config['file_name'] = $_FILES['file1']['name'][$i];
	    $config['upload_path'] = 'uploads/images/';
        $config['allowed_types'] = 'png|jpeg|jpg|JPG|JPEG|PNG';

		
		 $this->load->library('upload', $config);
		   $this->upload->initialize($config);
	
	if (!$this->upload->do_upload('file')){
				$error = array('error' => $this->upload->display_errors());
				//<script type=text/javascript>alert(print_r($error));</script>
				//alert(print_r($error));
				print_r($error);
				$this->load->view('editcategory', $error);
			}
	
	
	else{
		$upload_data = $this->upload->data();
		   if($i==$filesCount-1) 
		   {
			  $uploadData .=$config['upload_path']. $config['file_name']; 
		   }
		   else
		   {
		$uploadData .=$config['upload_path']. $config['file_name'].",";
		   }
	  
		
   $data =array(
				'r_id'=>$this->input->post('rname'),	
				'stall_id'=>$this->input->post('sname'),	
				'type_id'=>$this->input->post('ctype'),
				'minititle'=>$this->input->post('minititle'),
                'category_id'=>$this->input->post('cname'),			   
				'item_name'=>$this->input->post('item'),
				'description'=>$this->input->post('description'),
				'image' => $uploadData,				
       			'price'=>$this->input->post('price'),	
				'discount'=>$this->input->post('discount')
	);

	
}
		   }
      
	 

  }
  
   $this->Admin_model->updateitem($aid,$data);
		redirect(base_url('itemslist'));
 }
	
   else{
	   $data =array(
				'r_id'=>$this->input->post('rname'),
				'stall_id'=>$this->input->post('sname'),	
				'type_id'=>$this->input->post('ctype'),	
				'minititle'=>$this->input->post('minititle'),
                'category_id'=>$this->input->post('cname'),			   
				'item_name'=>$this->input->post('item'),
				'description'=>$this->input->post('description'),				
       			'price'=>$this->input->post('price'),	
				'discount'=>$this->input->post('discount')	
	);
	    $this->Admin_model->updateitem($aid,$data);
		redirect(base_url('itemslist'));
   }              
			
	}
//offers........................................................................................

public function offer(){
	$result['stall']=$this->Admin_model->stalll();
	$result['rlist']=$this->Admin_model->restaurant();
	$result['olist']=$this->Admin_model->offer();
	$result['itemlist']=$this->Admin_model->item();

	$this->load->view('offers',$result);
}

public function bb1(){ 
    // POST data 
    $postData = $this->input->post();
  
    // load model 
    
    $this->load->model('Admin_model');
    // get data 
    $data = $this->Admin_model->getCityDepartment1($postData);
    echo json_encode($data); 
  }

  
public function bb2(){ 
    // POST data 
    $postData = $this->input->post();
  
    // load model 
    
    $this->load->model('Admin_model');
    // get data 
    $data = $this->Admin_model->getCityDepartment2($postData);
    echo json_encode($data); 
  }

  
public function addoffer(){
	$result['rlist']=$this->Admin_model->restaurant();
	$result['itemlist']=$this->Admin_model->item();
	$this->load->view('addoffers',$result);
}

public function insertoffer(){
				 $rname=$this->input->post('rname');
				 $sname=$this->input->post('sname');
				$name=$this->input->post('offer');
				$subname=$this->input->post('sub');			   
                $item=implode(',',$this->input->post('item'));			   
               $price=$this->input->post('price');			   
       			$fdate=$this->input->post('fromdate');			   
       			$tdate=$this->input->post('todate');	
				
	  $this->Admin_model->offerinsertion($rname,$sname,$name,$subname,$item,$price,$fdate,$tdate);
	   redirect(base_url('offer'));
}

public function deleteoffer()
	{
		$aid=$this->uri->segment(2);
		$this->Admin_model->offerdeletion($aid);
		redirect(base_url('offer'));	
	}
		
	public function editoffer(){
		$aid=$this->uri->segment(2);
		$rid=$this->uri->segment(3);
		$result['slist']=$this->Admin_model->stall2($rid);
		$result['rlist']=$this->Admin_model->restaurant();
		$result['itemlist']=$this->Admin_model->item();
		$result['eoffer']=$this->Admin_model->editingoffer($aid);
		$result['eoffer1']=$this->Admin_model->editingoffer1($aid);
	//	$result['olist']=$this->Admin_model->offer();
	
		$this->load->view('editoffers',$result);
	}
public function updateoffer(){
$aid=$this->uri->segment(2);
				$rname=$this->input->post('rname');
				$sname=$this->input->post('sname');
	           $name=$this->input->post('offer');
				$subname=$this->input->post('sub');				   
                $item=implode(',',$this->input->post('item'));			   
               $price=$this->input->post('price');			   
       			$fdate=$this->input->post('fromdate');			   
       			$tdate=$this->input->post('todate');	
				
	  $this->Admin_model->offerupdation($aid,$rname,$sname,$name,$subname,$item,$price,$fdate,$tdate);
	   redirect(base_url('offer'));
}

//MyProfile.............................................................................
 
 public function myprof(){
		$this->load->model('Admin_model');
		$result['mlist']=$this->Admin_model->profile();
		$this->load->view('myprofile',$result);
	}
	
	public function myprofileedit(){
		$aid=$this->uri->segment(2);
		$this->load->model('Admin_model');
		$result['plist']=$this->Admin_model->editingmyprofile($aid);
		$this->load->view('editmyprofile',$result);
	}
	
	public function myprofileupdate(){
		  $aid=$this->uri->segment(2);
	    $this->load->model('Admin_model');
	$title = $this->input->post('name');
	$designation = $this->input->post('email');
	$description = $this->input->post('phone');
	
	$this->Admin_model->updatemyprofile($aid,$title,$designation,$description);
	redirect(base_url('myprof'));
	
	}

//Stalls.............................................................................................

	public function stall(){
		$result['slist']=$this->Admin_model->stalls();
		$this->load->view('stalls',$result);
	}

	public function addstall(){
		$result['rlist']=$this->Admin_model->restaurant();
		$result['llist'] = $this->Admin_model->loclist();
		$this->load->view('addstalls',$result);
	}

	/*public function insertstall(){
				 $rname=$this->input->post('rname');
	           $stall=$this->input->post('stall');				   
               $mobile=$this->input->post('phone');			   
       			//$location=$this->input->post('loc');			   
       			//$addr=$this->input->post('addr');	
				
	  $this->Admin_model->stallinsertion($rname,$stall,$mobile);//,$location,$addr);
	   redirect(base_url('stall'));
	}*/
	
	public function insertstall()
{
	$filesCount=0;
    $uploadData="";
     if(isset($_FILES['file1']['name'])&&!empty($_FILES['file1']['name'][0])){
		 
        $filesCount = count($_FILES['file1']['name']);
 
          for($i = 0; $i < $filesCount; $i++){

	     if($_FILES['file1']['name'][$i]!="" && $_FILES['file1']['name'][$i]!=null ){
	 	   
	    
		$_FILES['file']['name'] = $_FILES['file1']['name'][$i];
        $_FILES['file']['type'] = $_FILES['file1']['type'][$i];
        $_FILES['file']['tmp_name'] = $_FILES['file1']['tmp_name'][$i];
        $_FILES['file']['error'] = $_FILES['file1']['error'][$i];
        $_FILES['file']['size'] = $_FILES['file1']['size'][$i];
		
        $config['file_name'] = $_FILES['file1']['name'][$i];
	    $config['upload_path'] = 'uploads/images/';
        $config['allowed_types'] = 'png|jpeg|jpg|JPG|JPEG|PNG';

		
		 $this->load->library('upload', $config);
		   $this->upload->initialize($config);
	
	if (!$this->upload->do_upload('file')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				$this->load->view('addrestaurant', $error);
			}
	
	
	else{
		$upload_data = $this->upload->data();
		   if($i==$filesCount-1) 
		   {
			  $uploadData .=$config['upload_path']. $config['file_name']; 
		   }
		   else
		   {
		$uploadData .=$config['upload_path']. $config['file_name'].",";
		   }
	  
		
  	  $data =array(
	'r_id' => $this->input->post('rname'),
	'stall_name' => $this->input->post('stall'),
	'minititle' => $this->input->post('mtitle'),
	'subtitle' => $this->input->post('stitle'), 
	'image' => $uploadData,
	'price' => $this->input->post('price'),
	'phone' => $this->input->post('phone')
	);

	
}
		   }
      
	 

  }
  
   $this->Admin_model->stallinsertion($data);
		redirect(base_url('stall'));
 }
 
else{
	 $data =array(
	'r_id' => $this->input->post('rname'),
	'stall_name' => $this->input->post('stall'),
	'minititle' => $this->input->post('mtitle'),
	'subtitle' => $this->input->post('stitle'), 
	'price' => $this->input->post('price'),
	'phone' => $this->input->post('phone')
	);
	$this->Admin_model->stallinsertion($data);
		redirect(base_url('stall'));
}
 
}


	public function deletestall()
	{
		$aid=$this->uri->segment(2);
		$rid =$this->uri->segment(3);
		$this->Admin_model->stalldeletion($aid,$rid);
		redirect(base_url('stall'));	
	}

	public function editstall(){
		$aid=$this->uri->segment(2);
		$result['rlist']=$this->Admin_model->restaurant();
		$result['llist'] = $this->Admin_model->loclist();
		$result['estalllist']=$this->Admin_model->stallediting($aid);
		$this->load->view('editstalls',$result);
	}

	/*public function updatestall(){
				$aid=$this->uri->segment(2);
				$rname=$this->input->post('rname');
				$stall=$this->input->post('stall');				   
				$mobile=$this->input->post('phone');			   
       			//$location=$this->input->post('loc');			   
       			//$addr=$this->input->post('addr');	
				
	  $this->Admin_model->stallupdation($aid,$rname,$stall,$mobile);//,$location,$addr);
	   redirect(base_url('stall'));
	}*/

	public function updatestall(){
		  $aid=$this->uri->segment(2);
		  
	  
	$filesCount=0;

     if(isset($_FILES['file1']['name'])&&!empty($_FILES['file1']['name'][0])){
		 
        $filesCount = count($_FILES['file1']['name']);
 
          for($i = 0; $i < $filesCount; $i++){

	     if($_FILES['file1']['name'][$i]!="" && $_FILES['file1']['name'][$i]!=null ){
	 	   
	    
		$_FILES['file']['name'] = $_FILES['file1']['name'][$i];
        $_FILES['file']['type'] = $_FILES['file1']['type'][$i];
        $_FILES['file']['tmp_name'] = $_FILES['file1']['tmp_name'][$i];
        $_FILES['file']['error'] = $_FILES['file1']['error'][$i];
        $_FILES['file']['size'] = $_FILES['file1']['size'][$i];
		
        $config['file_name'] = $_FILES['file1']['name'][$i];
	    $config['upload_path'] = 'uploads/images/';
        $config['allowed_types'] = 'png|jpeg|jpg|JPG|JPEG|PNG';

		
		 $this->load->library('upload', $config);
		   $this->upload->initialize($config);
	
	if (!$this->upload->do_upload('file')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				$this->load->view('editrestaurant', $error);
			}
	
	
	else{
		$upload_data = $this->upload->data();
		   if($i==$filesCount-1) 
		   {
			  $uploadData .=$config['upload_path']. $config['file_name']; 
		   }
		   else
		   {
		$uploadData .=$config['upload_path']. $config['file_name'].",";
		   }
	  
		
   $data =array(
	'r_id' => $this->input->post('rname'),
	'stall_name' => $this->input->post('stall'),
	'minititle' => $this->input->post('mtitle'),
	'subtitle' => $this->input->post('stitle'), 
	'image' => $uploadData,
	'price' => $this->input->post('price'),
	'phone' => $this->input->post('phone')
	);

	
}
		   }
      
	 

  }
  
   $this->Admin_model->stallupdation($aid,$data);
		redirect(base_url('stall'));
 }
	
   else{
	   $data =array(
	'r_id' => $this->input->post('rname'),
	'stall_name' => $this->input->post('stall'),
	'minititle' => $this->input->post('mtitle'),
	'subtitle' => $this->input->post('stitle'), 
	//'image' => $uploadData,
	'price' => $this->input->post('price'),
	'phone' => $this->input->post('phone')
	);
	    $this->Admin_model->stallupdation($aid,$data);
		redirect(base_url('stall'));
   }              
			
	}
	
//Offer Items  named as      ADDON......................................................................................


	public function addon(){
	
	$result['rlist']=$this->Admin_model->restaurant();
	$result['olist']=$this->Admin_model->addonlist();
	$result['sname']=$this->Admin_model->stallname();
	$this->load->view('offeritems',$result);
	}

	public function add_addon(){
	$result['rlist']=$this->Admin_model->restaurant();
	$this->load->view('addofferitems',$result);
	}
	
	public function insertaddon(){
		
		$data=array(
				 'r_id'=>$this->input->post('rname'),
				 'stall_id'=>$this->input->post('sname'),
				 'items'=>$this->input->post('item'),
				 'price'=>$this->input->post('price')
			   );				   
                //$item=implode(',',$this->input->post('item'));			   
               
	  $this->Admin_model->addoninsertion($data);
	   redirect(base_url('addon'));
}
	
	public function edit_addon(){
		$aid=$this->uri->segment(2);
		$rid=$this->uri->segment(3);
		$result['rlist']=$this->Admin_model->restaurant();
	$result['olist']=$this->Admin_model->editaddon($aid);
	$result['sname']=$this->Admin_model->stallname1($rid);
		$this->load->view('editofferitems',$result);
	}
	
	public function updateaddon(){
		$aid=$this->uri->segment(2);
		$data=array(
				 'r_id'=>$this->input->post('rname'),
				 'stall_id'=>$this->input->post('sname'),
				 'items'=>$this->input->post('item'),
				 'price'=>$this->input->post('price')
			   );				   
                //$item=implode(',',$this->input->post('item'));			   
               
	  $this->Admin_model->addonupdation($aid,$data);
	   redirect(base_url('addon'));
	}

	public function delete_addon()
	{
		$aid=$this->uri->segment(2);
		$this->Admin_model->addondeletion($aid);
		redirect(base_url('addon'));	
	}




//Date wise Offers..............................................
/*
public function roffer(){
	$result['rlist']=$this->Admin_model->restaurant();
	$this->load->view('restoffer',$result);
}*/

	public function roffer(){
		
			 if($this->input->post('submit') == true)
			 {
				$fdate=$this->input->post('fromdate');
				$tdate=$this->input->post('todate');
				$rname=$this->input->post('rname');
				$sname=$this->input->post('sname');
			 }
		      else
			  { 
				  $fdate=date('Y-d-m');
				  $tdate=date('Y-d-m');
				  $rname=$this->input->post('rname');
				$sname=$this->input->post('sname');
			
				 // $rname='All';
				//$sname='All';
			 
			  }
			  
			  $result['fdate']=$fdate;
			   $result['tdate']=$tdate;
			   $result['rname']=$rname;
			   $result['sname']=$sname;
			   
			    $result['rlist']=$this->Admin_model->restaurant();
			$result['slist']=$this->Admin_model->stalls();
			$result['itemlist']=$this->Admin_model->item();
	
	
		$result['orlist2']=$this->Admin_model->offer_rest();
		$result['orlist1']=$this->Admin_model->offer_rest1($rname,$sname,$fdate,$tdate);//$fdate,$tdate,$rname,$sname);
		
			$this->load->view('restoffer',$result);

	}
	

	





	
}