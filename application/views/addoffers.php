<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="Colors">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title> Foodking || Add Offers </title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>img/core-img/favicon.ico">

    <!-- Footable Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/plugins/products-css/footable.css">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>style.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/responsive.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script>
	</script>

</head>

<body>
    <div class="page-wrapper">

        <!-- Page Top Bar Area -->
        <?php //include("links/top.php"); ?>
		<?php include_once('links/top.php');?>

        <!-- ###### Layout Container Area ###### -->
        <div class="layout-container-area mt-70">
            <!-- Side Menu Area -->
         <?php include_once('links/leftmenu.php');?>
			  <!-- Nav End -->
			

            <!-- Layout Container -->
            <div class="layout-container sidemenu-container mt-100">
			
			<div class="breadcrumb-area">
                    <div class="container-fluid">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo  base_url() ;?>dashboard1">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> <a href="<?php echo base_url(); ?>offer">offers</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
				
				
                <div class="container-fluid">
				
				 <div class="row">
                            <div class="col-lg-12">
                                <!-- Ibox -->
                                <div class="ibox bg-boxshadow">
                                    							         
						<div class="ibox-title basic-form mb-30">
						<h5>Add offers</h5>
						</div>
							<!--<div class="col-lg-12">-->
                                <!-- Ibox -->
                                <div class="ibox bg-boxshadow mb-50">
                                   
                                    <!-- Ibox-content -->
                                    <div class="ibox-content">
                                        <div class="row">
                                            <div class="col-sm-12">        
													<?php
													$present= date("Y-m-d");
													?>											
                                                <!-- Form -->
                                                <form  class="form-horizontal col-md-8" id="validate-1"  method="post"  enctype="multipart/form-data" action="<?php echo base_url(); ?>insertoffer">
												
												<div class="form-group ">
										            <label>Restaurant Name</label> 
										            <select name="rname" id="rname" class="form-control "> 
										            <option value="">Select.....</option>
									                 <?php 
									                   foreach($rlist as $data){
									                  ?>
																					 
									           <option value="<?php echo $data->id; ?>"><?php echo $data->name;?></option>												  
									           <?php } ?>
									               </select>									 
									           </div> 
                                                  
												   <div class="form-group " id="stallname">
										            <label>Stall Name</label> 
										            <select name="sname" id="sname" class="form-control "> 
										            <option value="">Select.....</option>
									                								 
									           <option ></option>			
											   
									               </select>									 
									           </div>
														
														
												 <div class="form-group">
													<label>Offer Name</label> 
									 <input type="text" placeholder="Enter offer name" name="offer" id="offer" class="form-control"  value=""  required>
													</div>
													
													<div class="form-group">
													<label>Sub Name</label> 
									 <input type="text" placeholder="Enter sub name" name="sub" id="sub" class="form-control"  value=""  required>
													</div>
													 
													 <div class="form-group ">
										            <label>Items</label> 
										            <select name="item[]" id="item"  multiple="multiple[]" class="form-control " required> 
									                <option value="" disabled >Select</option>							 
									          			
									               </select>									 
									           </div> 
													
													
													
												  <div class="form-group">
													<label>Offer Price</label> 
									 <input type="text" placeholder="Enter price" name="price" id="price" class="form-control"  value="" required>
													</div>
													
													<div class="form-group">
													<label>From date</label> 
									 <input type="date" name="fromdate" id="fromdate" class="form-control"  value="<?php echo $present;?>" multiple="multiple" required>
													</div>
													
													<div class="form-group">
													
													<label>To date</label> 
									 <input type="date" name="todate" id="todate" class="form-control"  value="<?php echo $present;?>"   required>
													</div>
													
													<div class="form-group">
													<button class="btn btn-primary mt-2 float-left" name="submit" type="submit"><strong> Submit </strong></button>

													</div>
													
																																																												           																
                                                </form>
												
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           <!-- </div>-->
								

									 
					        									
                                </div>
                            </div>
                        </div>
				 </div>
						
						
						<!--footer-->
                       <?php include_once('links/footer.php');?>

						<!-- end footer -->

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery 2.2.4 -->
    <script src="<?php echo base_url(); ?>assets/js/jquery/jquery.2.2.4.min.js"></script>
    <!-- Bootsrap js -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap.min.js"></script>

  

    <script src="<?php echo base_url(); ?>js/plugins-js/classy-nav.js"></script>

    <!-- Footable js -->
    <script src="<?php echo base_url(); ?>js/plugins-js/product-list-js/footable.js"></script>

    <!-- Active js -->
    <script src="<?php echo base_url(); ?>js/active.js"></script>
	<script src="<?php echo base_url(); ?>js/plugins-js/data-table-js/data-table.min.js"></script>
    <script src="<?php echo base_url(); ?>js/plugins-js/data-table-js/data-table-active.js"></script>

<!--Dependent drop down with hiding-- script-->
<script type='text/javascript'>
  // baseURL variable
  var baseURL= "<?php echo base_url();?>";
 
  $(document).ready(function(){
 
    // City change
    $('#rname').on('change',function(){
      var r_id = $(this).val();
//alert(r_id);
	
      // AJAX request
      $.ajax({
        url:'<?php echo base_url();?>Admin_controller/stallname',
        method: 'post',
        data: {r_id:r_id},
	
        dataType: 'json',
        success: function(response){
//alert(response);

            $('#sname').find('option').not(':first').remove();
          if(response.length>0)
		  {
          $.each(response,function(index,data){
			  // alert(data);
             $('#sname').append('<option value="'+data['id']+'">'+data['stall_name']+'</option>');
			 $('#stallname').show();
          });
		  
		}	

        else{
			$('#stallname').hide();
		    }		
        }
		
		
     });
   });
 
  
 });

</script>
	
<!--Dependent drop down script-->
<script type='text/javascript'>
  // baseURL variable
  var baseURL= "<?php echo base_url();?>";
 
  $(document).ready(function(){
 
    // City change
    $('#rname').on('change',function(){
      var r_id = $(this).val();
// alert(r_id);
      // AJAX request
      $.ajax({
        url:'<?php echo base_url();?>Admin_controller/bb1',
        method: 'post',
        data: {r_id:r_id},
		
        dataType: 'json',
        success: function(response){
//alert(response);
            $('#item').find('option').not(':first').remove();

          $.each(response,function(index,data){
			   // alert(index);
             $('#item').append('<option value="'+data['id']+'">'+data['item_name']+'</option>');
          });
        }
     });
	
   });
 
  
 });


  $(document).ready(function(){
 
    // City change
    $('#sname').on('change',function(){
      var stall_id = $(this).val();
// alert(r_id);
      // AJAX request
      $.ajax({
        url:'<?php echo base_url();?>Admin_controller/bb2',
        method: 'post',
        data: {stall_id:stall_id},
		
        dataType: 'json',
        success: function(response){
//alert(response);
            $('#item').find('option').not(':first').remove();

          $.each(response,function(index,data){
			   // alert(index);
             $('#item').append('<option value="'+data['id']+'">'+data['item_name']+'</option>');
          });
        }
     });
	
   });
 
  
 });

</script>

<!--  else{
		$.ajax({
        url:'<?php echo base_url();?>Admin_controller/bb2',
        method: 'post',
        data: {stall_id:stall_id},
		
        dataType: 'json',
        success: function(response){
//alert(response);
            $('#item').find('option').not(':first').remove();

          $.each(response,function(index,data){
			   // alert(index);
             $('#item').append('<option value="'+data['id']+'">'+data['item_name']+'</option>');
          });
        }
     }); 
	 } -->
</body>


</html>