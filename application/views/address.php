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
                                <li class="breadcrumb-item active" aria-current="page"> <a href="<?php echo base_url(); ?>">Address</a></li>
								
                            </ol>
                        </nav>
                    </div>
                </div>
				
				
                <div class="container-fluid">
				
				 <div class="row">
                            <div class="col-lg-12">
                                <!-- Ibox -->
                                <div class="ibox bg-boxshadow">
                                    
								 <a href="<?php echo base_url(); ?>/add_address"><button class="btn btn-primary mt-2 float-right"> <i class="fa fa-plus"> </i> Add Location</button></a> 							
                    <div class="clearfix"> </div>                  
						<div class="widget">
                    	<div class="table-responsive">						
							 <table class="table table-striped table-bordered table-hover dataTables-example mt-4">
							<thead class="bg-table">
                            <tr>
                            <th scope="col">Sno</th>
                            <th scope="col">Location Name</th>
                           <th scope="col" class="noExport">Action</th>
						    </tr>
                            </thead>
                            <tbody>
							<?php
							//$sno=1;
							//if(count($llist)>0){
							//foreach($llist as $data){
							?>
							
                                            <tr>
                                                <th scope="row"><?php //echo $sno;?></th>
                                                <td><?php //echo $data->name;?></td>
																	
									            <td>  
												<strong><span style="color:green"><a href="<?php echo base_url(); ?>editLoc/<?php //echo $data->id;?>" title="Edit" class="btn btn-success mr-1"> 
                                                <i class="fa fa-edit"> </i> Edit</a></span></strong>&nbsp;&nbsp;
                                                 <span style="color:red"><strong><a href="<?php echo base_url(); ?>deleteLoc/<?php //echo $data->id;?>" onClick="return confirm('Are you sure you want to delete ?')" title="Delete" class="btn btn-danger "> <i class="fa fa-trash-alt"> </i>  Delete</a></strong></span></td>
										      </td>
                                            </tr>
							<?php //$sno++; } }?>
                                             </tbody>
                                    </table>
                                </div>
                            </div>
									 
					        									
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
    /*function readURL1(input) {
		
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag1').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
  $("#file1").change(function(){
        readURL1(this);
    }); */

</script>



</body>


</html>