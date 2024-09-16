 <?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{
 
 //Dashboard.......................................................................................
 
 
	public function totalOffers()
	{
		$this->db->select('tbl_offers.*,tbl_restaurant.*');
		$this->db->from('tbl_offers');
		$this->db->join('tbl_restaurant', 'tbl_offers.r_id = tbl_restaurant.id');
		$query = $this->db->get();
		return $query->result();
       
	}
	public function totalRestaurant()
	{
		$this->db->select('*');
    $this->db->from('tbl_restaurant');
	//$this->db->where('status', 1);
    $query = $this->db->get();
     return $query->result();	
       
	}
 
 public function totalStalls()
	{
		$this->db->select('tbl_stalls.*,tbl_restaurant.*,tbl_restaurant.id as rid');
		$this->db->from('tbl_stalls');
		$this->db->join('tbl_restaurant', 'tbl_stalls.r_id = tbl_restaurant.id');
		$query = $this->db->get();
		return $query->result();
	 
		//$this->db->select('*');
    //$this->db->from('tbl_stalls');
    //$query = $this->db->get();
    // return $query->result();	
       
	}
 
 //Locations with restaurants.....................................................................
/*
 public function location_list()
  {
	  
	$this->db->select('*');
    $this->db->from('tbl_location');
	$query = $this->db->get();
	return $query->result();  
  }
  
   public function locationinsertion($data)
   {
	    $this->db->insert('tbl_location',$data);
   }
   
   public function locationediting($id)
  {
	   $this->db->select('*');
    $this->db->from('tbl_location');
	 $this->db->where('id',$id);
	 $query = $this->db->get();
	  return $query->result();
  }
  
   public function locationupdation($data,$lid)
  {
	  $this->db->where('id', $lid);
    return $this->db->update('tbl_location', $data);	  
  }
  
  public function locationdeletion($lid)
  {
	   $this->db->where('id', $lid);
      return $this->db->delete('tbl_location');
  }
  
 */
 
  //Locations......................................................................................................
  public function loclist()
  {
	  
	$this->db->select('*');
    $this->db->from('tbl_locations');
	$query = $this->db->get();
	return $query->result();  
  }
  
  public function insertlocation($data)
   {
	  $this->db->select('*');
      $this->db->from('tbl_locations');
     $this->db->where('name',$data['name']);
      $query = $this->db->get();
     $countrow =$query->num_rows();
    if($countrow == 0){
	    $this->db->insert('tbl_locations',$data);
	}
   }
  
  public function deleteLoc1($lid)
  {
	   $this->db->where('id', $lid);
      return $this->db->delete('tbl_locations');
  }
  
  public function locInfo($id)
  {
	   $this->db->select('*');
    $this->db->from('tbl_locations');
	 $this->db->where('id',$id);
	 $query = $this->db->get();
	  return $query->result();
  }
  public function updateLoc1($data,$lid)
  {
	  $this->db->where('id', $lid);
    return $this->db->update('tbl_locations', $data);	  
  }
  
  public function loc_exists($loc)
  {
	  $this->db->select('*');
   $this->db->from('tbl_locations');
   $this->db->where('LOWER(name)',$loc);
   $query = $this->db->get();

   return $query->result();
  }
  
//Restaurantlist....................................................................................  

	public function restaurant(){
			$this->db->select('tbl_restaurant.*');
			$this->db->from('tbl_restaurant');
			//$this->db->join('tbl_locations', 'tbl_restaurant.location = tbl_locations.id');
			$query = $this->db->get();
			return $query->result();	
	}

   public function insertrest($name,$mtitle,$stitle,$price,$filename) { //,$loc,$mobile,$loc,$addr
	  $search="C:\xampp\htdocs\foodking";
	  $img=str_replace($search, '', $filename);
	 
	 /*$this->db->select('*');
      $this->db->from('tbl_restaurant');
     $this->db->where('name',$data['name']);
      $query = $this->db->get();
     $countrow =$query->num_rows();
    if($countrow == 0){
		*/
	 $data = array(
			'name' => $name,'minititle' => $mtitle,'subtitle' => $stitle,'image' => $filename,'price	' =>$price
			);//,'location' => $loc,'phone'=> $mobile,'location' => $loc,'addr' => $addr

			$this->db->insert('tbl_restaurant', $data);
	// }
     	}
		
		 public function insertrest1($name,$mtitle,$stitle,$price) { //,$loc,$mobile,$loc,$addr
	  
	 $data = array(
			'name' => $name,'minititle' => $mtitle,'subtitle' => $stitle,'price	' =>$price
			);//,'location' => $loc,'phone'=> $mobile,'location' => $loc,'addr' => $addr

			$this->db->insert('tbl_restaurant', $data);
	 
     	}
   
   public function deleterestaurant($rid)
  {
	   $this->db->where('id', $rid);
      return $this->db->delete('tbl_restaurant');
  }
   
    public function editrest($id)
  {
	   $this->db->select('*');
    $this->db->from('tbl_restaurant');
	 $this->db->where('id',$id);
	 $query = $this->db->get();
	  return $query->result();
  }
  
 /* public function editrest1($id){
	$this->db->select('tbl_restaurant.*,tbl_locations.*');
			$this->db->from('tbl_restaurant');
			$this->db->join('tbl_locations', 'tbl_restaurant.location = tbl_locations.id');
			$this->db->where('tbl_restaurant.id',$id);
	 
			$query = $this->db->get();
			return $query->result();	
}*/
  public function updateRes1($lid,$name,$mtitle,$stitle,$price,$filename) { //,$loc,$mobile,$loc,$addr
	  $search="C:\xampp\htdocs\foodking";
	  $img=str_replace($search, '', $filename);
	 
	 $data = array(
			'name' => $name,'minititle' => $mtitle,'subtitle' => $stitle,'image' => $filename,'price	' =>$price
			); //,'location' => $loc,'phone'=> $mobile,'location' => $loc,'addr' => $addr
			$this->db->where('id', $lid);
			$this->db->update('tbl_restaurant', $data);
	 
     	}
		
		public function updateRes2($lid,$name,$mtitle,$stitle,$price) { //,$loc,$mobile,$loc,$addr
	 // $search="C:\xampp\htdocs\foodking";
	 // $img=str_replace($search, '', $filename);
	 
	 $data = array(
			'name' => $name,'minititle' => $mtitle,'subtitle' => $stitle,'price	' =>$price
			); //,'location' => $loc,'phone'=> $mobile,'location' => $loc,'addr' => $addr
			$this->db->where('id', $lid);
			$this->db->update('tbl_restaurant', $data);
	 
     	}
 /* public function updateRes1($data,$lid)
  {
	  $this->db->where('id', $lid);
    return $this->db->update('tbl_restaurant', $data);	  
  }
  */
  
  public function location_list()
  {
	  
	$this->db->select('*');
    $this->db->from('tbl_location');
	$query = $this->db->get();
	return $query->result();  
  }
  
  
  public function restlocation($id){
	  $this->db->select('tbl_restlocations.*,tbl_restaurant.name');
    $this->db->from('tbl_restlocations');
	$this->db->join('tbl_restaurant', 'tbl_restlocations.r_id = tbl_restaurant.id');
	$this->db->where('tbl_restlocations.r_id',$id);
	$query = $this->db->get();
	return $query->result();  
  }
   public function editrestlocation($id){
	  $this->db->select('tbl_restlocations.*,tbl_restaurant.name');
    $this->db->from('tbl_restlocations');
	$this->db->join('tbl_restaurant', 'tbl_restlocations.r_id = tbl_restaurant.id');
	$this->db->where('tbl_restlocations.id',$id);
	$query = $this->db->get();
	return $query->result();  
  }
 
 public function reslocinsertion($data)
   {
	  //$this->db->select('*');
      //$this->db->from('tbl_categorytype');
     //$this->db->where('type_name',$data['type_name']);
     // $query = $this->db->get();
     //$countrow =$query->num_rows();
   // if($countrow == 0){
	    $this->db->insert('tbl_restlocations',$data);
	//}
   }

   public function reslocupdation($data,$id)
   {
	  $this->db->where('id',$id);
	    $this->db->update('tbl_restlocations',$data);
	
   }

    public function reslocdeletion($tid)
  {
	   $this->db->where('id', $tid);
      return $this->db->delete('tbl_restlocations');
  }
  
  
  // Address..................................................................................................
 
 /* public function restloc($postData){
	  
	  
    $response = array();
			
    $this->db->select('id,name');
    $this->db->where('id', $postData['r_id']);
    $q = $this->db->get('tbl_locations');
    $response = $q->result_array();

    return $response;
  }
  */

  
//Category Type........................................................................................
  
  public function cattype()
  {
	  
	$this->db->select('*');
    $this->db->from('tbl_categorytype');
	$query = $this->db->get();
	return $query->result();  
  }
  
  public function typeinsertion($data)
   {
	  $this->db->select('*');
      $this->db->from('tbl_categorytype');
     $this->db->where('type_name',$data['type_name']);
      $query = $this->db->get();
     $countrow =$query->num_rows();
    if($countrow == 0){
	    $this->db->insert('tbl_categorytype',$data);
	}
   }

   public function typedeletion($tid)
  {
	   $this->db->where('id', $tid);
      return $this->db->delete('tbl_categorytype');
  }
  
  public function typeediting($id)
  {
	   $this->db->select('*');
    $this->db->from('tbl_categorytype');
	 $this->db->where('id',$id);
	 $query = $this->db->get();
	  return $query->result();
  }
  
  public function typeupdation($data,$lid)
  {
	  $this->db->where('id', $lid);
    return $this->db->update('tbl_categorytype', $data);	  
  }
  
  
//Category.............................................................................................

public function catlist(){
			$this->db->select('tbl_category.*,tbl_categorytype.type_name as subname');
			$this->db->from('tbl_category');
			$this->db->join('tbl_categorytype', 'tbl_category.cate_type = tbl_categorytype.id');
			$query = $this->db->get();
			return $query->result();	
}

public function cateinsertion($data) {
	 // $search="C:\xampp\htdocs\foodking";
	 // $img=str_replace($search, '', $filename);
	 
	 
			$this->db->insert('tbl_category', $data);
	 
     	}

public function categorydeletion($cid)
  {
	   $this->db->where('id', $cid);
      return $this->db->delete('tbl_category');
  }

 public function categoryediting($id)
  {
	   $this->db->select('*');
    $this->db->from('tbl_category');
	 $this->db->where('id',$id);
	 $query = $this->db->get();
	  return $query->result();
  }


public function cateupdation($id,$data) {
	  //$search="C:\xampp\htdocs\foodking";
	  //$img=str_replace($search, '', $filename);
	 
		$this->db->where('id',$id);
			$this->db->update('tbl_category', $data);
	 
     	}

//items................................................................................................

public function itemlist(){
	$this->db->select('tbl_items.*,tbl_items.image as img,tbl_items.minititle as mtitle,tbl_items.price as itemprice,tbl_categorytype.*,tbl_category.*,tbl_items.id as idd,tbl_restaurant.*,tbl_restaurant.id');
			$this->db->from('tbl_items');
			$this->db->join('tbl_categorytype', 'tbl_items.type_id = tbl_categorytype.id');
			$this->db->join('tbl_category', 'tbl_items.category_id = tbl_category.id');
			$this->db->join('tbl_restaurant', 'tbl_items.r_id = tbl_restaurant.id');
			$query = $this->db->get();
			return $query->result();	
}

public function stalll(){
	$this->db->select('*')	;
	$this->db->from('tbl_stalls');
	$query = $this->db->get();
	return $query->result();
}

public function stall2($rid){
	$this->db->select('*')	;
	$this->db->from('tbl_stalls');
	$this->db->where('r_id',$rid);
	$query = $this->db->get();
	return $query->result();
}

public function getCityDepartment($postData){
    $response = array();
 
    $this->db->select('id,category_name');
    $this->db->where('cate_type', $postData['cate_type']);
    $q = $this->db->get('tbl_category');
    $response = $q->result_array();

    return $response;
  }
	
public function stalldet($postData){
    $response = array();
 
    $this->db->select('id,stall_name');
    $this->db->where('r_id', $postData['r_id']);
    $q = $this->db->get('tbl_stalls');
    $response = $q->result_array();

    return $response;
  }
  
  
  
	public function iteminsertion($data) {
	 // $search="C:\xampp\htdocs\foodking";
	  //$img=str_replace($search, '', $filename);
	 
			$this->db->insert('tbl_items', $data);
	 
     	}
	
	public function itemdeletion($id)
	{
		
			$this->db->where('id', $id);
			$this->db->delete('tbl_items');
	
	}	
		
	 public function itemediting($id)
  {
	   $this->db->select('*');
    $this->db->from('tbl_items');
	 $this->db->where('id',$id);
	 $query = $this->db->get();
	  return $query->result();
  }	
		public function itemediting1($id){
	$this->db->select('tbl_items.*,tbl_category.*');
			$this->db->from('tbl_items');
			$this->db->join('tbl_category', 'tbl_items.type_id = tbl_category.cate_type');
			$this->db->where('tbl_items.id',$id);
	 
			$query = $this->db->get();
			return $query->result();	
}
	public function updateitem($id,$data) {
	 // $search="C:\xampp\htdocs\foodking";
	  //$img=str_replace($search, '', $filename);
	 
		$this->db->where('id',$id);
			$this->db->update('tbl_items', $data);
	 
     	}

//offers........................................................................................
	public function item(){
		 $this->db->select('*');
    $this->db->from('tbl_items');
	 $query = $this->db->get();
	  return $query->result();
	}

	public function getCityDepartment1($postData){
    $response = array();
 
    $this->db->select('id,item_name');
    $this->db->where('r_id', $postData['r_id']);
    $q = $this->db->get('tbl_items');
    $response = $q->result_array();

    return $response;
  }
  
	public function getCityDepartment2($postData){
    $response = array();
 
    $this->db->select('id,item_name');
    $this->db->where('stall_id', $postData['stall_id']);
    $q = $this->db->get('tbl_items');
    $response = $q->result_array();

    return $response;
  }
  
	public function offer(){
		$this->db->select('*');
    $this->db->from('tbl_offers');
	 $query = $this->db->get();
	  return $query->result();	
	}
	
	public function offerinsertion($rname,$sname,$name,$subname,$item,$price,$fdate,$tdate)
		{
	
			$data = array(
			'r_id' => $rname,'stall_id' => $sname,'name' => $name,'subname' => $subname,'items' => $item,'offerprice' => $price,'fromdate' => $fdate,'todate' => $tdate
			);

			$this->db->insert('tbl_offers', $data);
		}	


	public function offerdeletion($id)
	{
		
			$this->db->where('id', $id);
			$this->db->delete('tbl_offers');
	
	}	

	public function editingoffer($id){
		$this->db->select('*');
    $this->db->from('tbl_offers');
	 $this->db->where('id',$id);
	 $query = $this->db->get();
	  return $query->result();	
	}

	public function editingoffer1($id){
	$this->db->select('tbl_offers.*,tbl_items.*');
			$this->db->from('tbl_offers');
			$this->db->join('tbl_items', 'tbl_offers.r_id = tbl_items.r_id');
			$this->db->where('tbl_offers.id',$id);
	 
			$query = $this->db->get();
			return $query->result();	
}

public function offerupdation($id,$rname,$sname,$name,$subname,$item,$price,$fdate,$tdate)
		{
	
			$data = array(
			'r_id' => $rname,'stall_id' => $sname,'name' => $name,'subname' => $subname,'items' => $item,'offerprice' => $price,'fromdate' => $fdate,'todate' => $tdate
			);
$this->db->where('id',$id);
			$this->db->update('tbl_offers', $data);
		}	


//Myprofile......................................................................................

		public function profile(){
			$this->db->select('*');
			$this->db->from('tbl_users');
			$query = $this->db->get();
			return $query->result();
		}
		
		public function editingmyprofile($id){
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->result();
		}
		
		public function updatemyprofile($id,$title,$designation,$description) {
	  
	 $data = array(
			'name' => $title,'email	' => $designation,'phone' => $description
			);
$this->db->where('id',$id);
			$this->db->update('tbl_users', $data);
	 
     	}
		

//Stall................................................................................................

	/*public function stalls(){
			$this->db->select('tbl_stalls.*,tbl_stalls.id as stid,tbl_stalls.addr as saddr,tbl_stalls.phone as sphone,tbl_locations.*,tbl_locations.name as lname,tbl_restaurant.*');
			$this->db->from('tbl_stalls');
			$this->db->join('tbl_locations', 'tbl_stalls.location = tbl_locations.id');
			$this->db->join('tbl_restaurant', 'tbl_stalls.r_id = tbl_restaurant.id');
			$query = $this->db->get();
			return $query->result();	
		}*/
		public function stalls(){
			$this->db->select('tbl_stalls.*,tbl_stalls.id as stid,tbl_stalls.image as simg,tbl_stalls.minititle as mtitle,tbl_stalls.subtitle as stitle,tbl_stalls.price as sprice,tbl_stalls.phone as sphone,tbl_restaurant.*');
			$this->db->from('tbl_stalls');
			//$this->db->join('tbl_locations', 'tbl_stalls.location = tbl_locations.id');
			$this->db->join('tbl_restaurant', 'tbl_stalls.r_id = tbl_restaurant.id');
			$query = $this->db->get();
			return $query->result();	
		}

		public function stallinsertion($data) {
	 // $search="C:\xampp\htdocs\foodking";
	 // $img=str_replace($search, '', $data);
	 
	 
			$this->db->insert('tbl_stalls', $data);
		
		$this->db->select('*');
		$this->db->from('tbl_restaurant');
		$this->db->where('id',$data['r_id']);
		$query=$this->db->get();
		foreach($query->result() as $row )
		{
			if($row->stall==0){
		$stall=array('stall' => 1);
		$this->db->where('id', $data['r_id']);
		$this->db->update('tbl_restaurant',$stall);
		}
		}
     	}
	

	public function stalldeletion($id,$rid)
	{
			 $this->db->select('*');
      $this->db->from('tbl_stalls');
     $this->db->where('r_id',$rid);
	  $query = $this->db->get();
     $countrow =$query->num_rows();
			if($countrow == 1){
		$data = array('stall' => 0);
$this->db->where('tbl_restaurant.id',$rid);		
	 $this->db->update('tbl_restaurant', $data);
			}
			$this->db->where('id', $id);
			$this->db->delete('tbl_stalls');
			
		

	}	
	
	public function stallediting($id){
		$this->db->select('*');
		$this->db->from('tbl_stalls');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->result();
		}

		public function stallupdation($lid,$data) {
	  //$search="C:\xampp\htdocs\foodking";
	 // $img=str_replace($search, '', $filename);
	 
	 
			$this->db->where('id', $lid);
			$this->db->update('tbl_stalls', $data);
	 
     	}
		
//Offer Items named as      ADDON......................................................................................

public function stallname(){
	$this->db->select('*')	;
	$this->db->from('tbl_stalls');
	$query = $this->db->get();
	return $query->result();
}
public function stallname1($rid){
	$this->db->select('*')	;
	$this->db->from('tbl_stalls');
	$this->db->where('r_id',$rid);
	$query = $this->db->get();
	return $query->result();
}


 public function addonlist()
  {
	   $this->db->select('*');
    $this->db->from('tbl_addons');
	 $query = $this->db->get();
	  return $query->result();
  }		
	
	public function addoninsertion($data)
		{
	
			$this->db->insert('tbl_addons', $data);
		}
	
	public function editaddon($id)
  {
	   $this->db->select('*');
    $this->db->from('tbl_addons');
	$this->db->where('id', $id);
	 $query = $this->db->get();
	  return $query->result();
  }
	
	public function addonupdation($id,$data)
		{
			$this->db->where('id', $id);
			$this->db->update('tbl_addons', $data);
		}
	
	public function addondeletion($id)
	{
		
			$this->db->where('id', $id);
			$this->db->delete('tbl_addons');
	
	}	
	
	
	

//Offer items based on date..............................................
	public function offer_rest()
  {
	  $this->db->select('*');
    $this->db->from('tbl_offers');
	   $query = $this->db->get();
	  return $query->result();
  }
	
	public function offer_rest1($rname,$sname,$fdate,$tdate)//$fdate,$tdate,$rname,$sname)
  {
	 $this->db->select('*');
    $this->db->from('tbl_offers');
	$this->db->where('r_id',$rname);
	$this->db->where('stall_id',$sname);
	$this->db->where('fromdate>=',$fdate);
	$this->db->where('todate<=',$tdate);

	   $query = $this->db->get();
	  return $query->result();
  }
  //$this->db->where('fromdate >= ',$fdate);
//$this->db->where('todate <= ',$tdate);


	/*public function offer_rest1($fdate,$tdate,$rname,$sname)
  {
	  $this->db->select('*');
    $this->db->from('tbl_offers');
	$this->db->where('fromdate',$fdate);
	$this->db->where('todate',$tdate);
	if($rname!='All')
	$this->db->where('r_id',$rname);
if($sname!='All')
	$this->db->where('stall_id',$sname);
	   $query = $this->db->get();
	  return $query->result();
  }*/
 

	
	

}