<?php //$uid=$this->session->userdata('user_id'); ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="Colors">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title> StarMart || Change Password </title>

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
                                <li class="breadcrumb-item active" aria-current="page"> <a href="<?php echo base_url(); ?>changepswd">Change Password</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
				
				
                <div class="container-fluid">
				
				 <div class="row">
                            <div class="col-lg-12">
                                <!-- Ibox -->
                                <div class="ibox bg-boxshadow">
                                    							         
						
							<!--<div class="col-lg-12">-->
                                <!-- Ibox -->
                                <div class="ibox  mb-50">
                                   
                                    <!-- Ibox-content -->
                                    <div class="ibox-content">
                                        <div class="row">
                                            <div class="col-sm-12">
                                             		<?php
													//if($msg1!=""){
													?>
													<h5> <?php	//echo $msg1; ?></h5>
													<?php //}?>
                                                   
													
                                                <!-- Form -->
                                                <form  class="form-horizontal col-md-6" id="validate-1"  method="post"  enctype="multipart/form-data" action="<?php echo base_url(); ?>editPswd">
                                                   <?php if ($this->session->flashdata()) { ?>
                                                       <div class="alert alert-warning text-danger" id="message">
                                                           <?php echo  $this->session->flashdata('msg1'); ?>
                                                       </div>
                                                   <?php }?>
												  
												  <div class="form-group ">
													<label>Password</label> 
									 <input type="password" placeholder="Enter Password" name="password" id="password" class="form-control mb-10" onchange="getValue1(this.value,<?php echo $this->session->userdata('user_id');?>);" required>
													</div><span id="errmsg1" class="text-danger"></span>
													
													<div class="form-group">
													<label> Confirm Password</label> 
													 <input type="password" placeholder="Re-confirm Password" name="repassword" id="repassword" class="form-control"  required>
													</div>
													
													
													
													
													<div class="form-group">
													<button class="btn btn-primary mt-2 float-left" name="submit" type="submit"><strong> Submit </strong></button>

													</div>
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
	<script type="text/javascript">
	$(document).ready(function () {
  setTimeout(function () {
      $('#message').hide();
  }, 10000);
});
	</script>
	
<script type="text/javascript">
/*function getValue1(val1,val2){
        
       $.post('<?php echo base_url(); ?>Login/pswd',
      { 'pwd':val1,'id':val2 },
 
      function(result) {
       
        if (result) {
         $("#errmsg1").html("Entered Password is not correct").fadeIn('slow').delay(5000).hide(1);
				$("#password").val("");
				$("#password").focus();
        }
		else
		{
			$("#errmsg1").hide();
		}
      }
    );
       

    }*/

</script>


</body>


</html>