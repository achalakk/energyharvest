<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="Colors">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title> Foodking || Dashboard</title>

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

<body class="">
    <div class="page-wrapper">

        <!-- Page Top Bar Area -->
        <?php include("links/top.php"); ?>

        <!-- ###### Layout Container Area ###### -->
        <div class=" mt-0">
            <!-- Side Menu Area -->
            <?php include ("links/leftmenu.php"); ?>
			  <!-- Nav End -->
			

            <!-- Layout Container -->
            <div class=" sidemenu-container mt-50">
			
			<div class="breadcrumb-area">
                    <div class="container-fluid">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo  base_url() ;?>dashboard1">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> <a href="">Home</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
				
				
                <div class="container-fluid">
				
				 <div class="row">
				
						
						 <div class="col-sm-6 col-lg-3">
                            <!-- Widget Content -->
                            <div class="widget-content-style rounded-100 lazur-bg zoom-effect mb-30">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fa fa-users fa-4x"></i>
                                    </div>
                                    <div class="col-8 text-right">
                                        <span class="text-white h3"> Customers</span>
                                        <h2 class="widget-content--text color-white">0</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
				
						       
                        <div class="col-sm-6 col-lg-3">
                            <!-- Widget Content -->
                            <div class="widget-content-style rounded-100 lazur-bg zoom-effect mb-30">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fa fa-users fa-4x"></i>
                                    </div>
                                    <div class="col-8 text-right">
                                        <span class="text-white h3"> Offers</span>
                                        <h2 class="widget-content--text color-white"><?php  //echo count($offerscount);?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						 <div class="col-sm-6 col-lg-3">
                            <!-- Widget Content -->
                            <div class="widget-content-style rounded-100 lazur-bg zoom-effect mb-30">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fa fa-users fa-4x"></i>
                                    </div>
                                    <div class="col-8 text-right">
                                        <span class="text-white h3"> Orders</span>
                                        <h2 class="widget-content--text color-white"><?php  //echo count($rcount);?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<div class="col-sm-6 col-lg-3">
                            <!-- Widget Content -->
                            <div class="widget-content-style rounded-100 lazur-bg zoom-effect mb-30">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fa fa-users fa-4x"></i>
                                    </div>
                                    <div class="col-8 text-right">
                                        <span class="text-white h3"> Pending</span>
                                        <h2 class="widget-content--text color-white"><?php // echo count($scount);?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
											   

								
								
					
				 </div>
						
						
						<!--footer-->
                        <?php include "links/footer.php"; ?>
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
	
	



</body>


</html>