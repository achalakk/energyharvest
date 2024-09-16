<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="Colors">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title> Foodking || Locations </title>

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
								
								
								<?php //foreach($rlist as $list){ foreach($elist as $data) { if($data->r_id==$list->id) { ?>
								
                                <li class="breadcrumb-item active" aria-current="page"> <a href="<?php echo base_url(); ?>restloc/<?php echo $id=$this->uri->segment(2); //echo $data->id; ?>">Locations</a></li>
								
								<?php // } } }?>
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
						
						<?php //foreach($elist as $data){ foreach ($rlist as $list){ if($list->id==$data->r_id){ $result=$list->name;  } } } ?>
						
						
						<?php foreach ($rlist as $list){ if( $this->uri->segment(2)== $list->id) { $result=$list->name; } } ?>
						
					<h5>Adding  Location for <i class="text-danger"><?php echo $result;?></i> </h5>
						</div>
							<!--<div class="col-lg-12">-->
                                <!-- Ibox -->
                                <div class="ibox bg-boxshadow mb-50">
                                   
                                    <!-- Ibox-content -->
                                    <div class="ibox-content">
                                        <div class="row">
                                            <div class="col-sm-12">                                             
                                                <!-- Form -->
                                                <form  class="form-horizontal col-md-8" id="validate-1"  method="post"  enctype="multipart/form-data" action="<?php echo base_url(); ?>insertresloc/<?php echo $r_id; ?>">
                                                 
												   <div class="form-group">
													<!--<label>Restaurant name</label> -->
									 <input type="hidden" placeholder="Enter Location Name" name="rname" id="rname" class="form-control"  value=" <?php echo $id=$this->uri->segment(2); ?>"  required>
													</div>
												  
												  <div class="form-group">
													<label>Location Name</label> 
									 <input type="text" placeholder="Enter Location Name" name="location" id="location" class="form-control"  value=""  required>
													</div>
													
													<div class="form-group">
													<label>Phone Number</label> 
									 <input type="text" placeholder="Enter phone number" name="phone" id="phone" class="form-control"  value=""  onchange="getValue1(this.value);" required>
													</div><span id="errmsg2" class="text-danger"></span>
													
													<div class="form-group">
													<label> Address</label> 
													<textarea rows="4" name="addr" cols="10" class="form-control"  required><?php //echo $data->addr; ?></textarea>
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
	
	

<!--validation for phone and inserting two phone numbers -->
	<script type="text/javascript">
function getValue1(val){
	//alert("hi");
var phoneno = /^\d{10}$/;
var phoneno2 = /^(\d{10},)*\d{10}$/;
//if((val.length!=10&&!val.match(phoneno)))
	if((val.length!=10&&!val.match(phoneno)||!val.match(phoneno2))&&(val.length==10&&val.match(phoneno)||!val.match(phoneno2)))
  {
  
  
    $("#errmsg2").html("Enter valid number").fadeIn('slow').delay(5000).hide(1);
	$("#phone").val("");
	$("#phone").focus();
        }
		
		else{
			$("#errmsg2").val("");
		}
		
     }
  </script>
	

</body>


</html>