<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="Colors">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title> Foodking || Restaurant </title>

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
                                <li class="breadcrumb-item active" aria-current="page"> <a href="<?php echo base_url(); ?>restaurantlist">Restaurant</a></li>
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
						<h5>Add Restaurant</h5>
						</div>
							<!--<div class="col-lg-12">-->
                                <!-- Ibox -->
                                <div class="ibox bg-boxshadow mb-50">
                                   
                                    <!-- Ibox-content -->
                                    <div class="ibox-content">
                                        <div class="row">
                                            <div class="col-sm-12">                                             
                                                <!-- Form -->
                                                <form  class="form-horizontal col-md-8" id="validate-1"  method="post"  enctype="multipart/form-data" action="<?php echo base_url(); ?>insertrestaurant">
                                                  
												  
												  <div class="form-group">
													<label>Name</label> 
									 <input type="text" placeholder="Enter Restaurant Name" name="restaurant" id="restaurant" class="form-control"  value=""   required>
													</div><span id="errmsg1" class="text-danger"></span>
													
													<div class="form-group">
													<label>Mini title</label> 
									 <input type="text" placeholder="Enter Mini Title" name="mtitle" id="mtitle" class="form-control"  value=""  >
													</div>
													
													<div class="form-group">
													<label>Sub title</label> 
									 <input type="text" placeholder="Enter Sub Title" name="stitle" id="stitle" class="form-control"  value="" >
													</div>
													
													<div class="form-group">
													<label>Price</label> 
									 <input type="text" placeholder="Enter Price" name="price" id="price" class="form-control"  value="" >
													</div>
													
													<div class="form-group">

												<label for="file"> Upload File:</label><br>	  
												<div class=" col-md-4 col-md-offset-4 img-border gallery" id="gallery"></div>
												<div class="col-md-4 col-md-offset-4 img-border">
                                                      <img src="" id="profile-img-tag1"/>						
						                              </div>
												<input type="file" name="file1[]" multiple="multiple" id="file1" class="form-control"  onchange="fileValidation()"/><span id="errmsg" class="text-danger"></span><br/>
												</div>
												
												
												<!--<div class="form-group">
													<label>Location</label> 
													<select name="loc[]" id="location" class="form-control" multiple="multiple[]">
													<option value="" disabled >--Select--</option>
													
													<?php  foreach($locationlist as $data){
													?> 
												
												<option value="<?php echo $data->id; ?>" > <?php echo $data->name; ?></option>
													<?php } ?>
												</select>
													</div></br>-->
													
												<!--
													<div class="form-group">
													<label>Phone number</label> 
									 <input type="text" placeholder="Enter Phone number" name="phone" id="phone" class="form-control"    value="" onchange="getValue1(this.value);" required>
													</div>
													<span id="errmsg2" class="text-danger"></span>
													
													
													<div class="form-group">
													<label>Location</label> 
													<select name="loc" id="location" class="form-control">
													<option >--Select--</option>
													
													<?php  foreach($locationlist as $data){
													?> 
												
												<option value="<?php echo $data->id; ?>" > <?php echo $data->name; ?></option>
													<?php } ?>
												</select>
													</div></br>
													<div class="form-group">
													<label> Address</label> 
													<textarea rows="4" name="addr" cols="10" class="form-control" required></textarea>
													</div>
									
													-->
												
													
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
	
	

<script type="text/javascript">
 $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#file1').on('change', function() {
		$("#gallery").empty();
        imagesPreview(this, 'div.gallery');
		$('.profile-img-tag1').addClass('hidden');
    });
});

</script>

<script>
 function fileValidation(){
    var fileInput = document.getElementById('file1');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.png|\.jpg|\.jpeg)$/i;
  // var allowedExtensions = /(\.pdf)$/i;
    if(!allowedExtensions.exec(filePath)){
        //alert('Please upload file having extensions .png/.jpg/.jpeg only.');
		$('#errmsg').html("Please upload file having extensions .png/.jpg/.jpeg only");
        fileInput.value = '';
        return false;
    }
}
 </script>

 
 <!--validation for phone and inserting two phone numbers -->
	<script type="text/javascript">
function getValue1(val){
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
	
 
 <!--validation for phone -->
	<script type="text/javascript">
function getValue2(val){
var phoneno = /^\d{10}$/;
var phoneno2 = /^\d{12}$/;
if((val.length!=10&&!val.match(phoneno)))
  {
  
  
    $("#errmsg2").html("Enter valid number").fadeIn('slow').delay(5000).hide(1);
	$("#phone").val("");
	$("#phone").focus();
        }
		else{
			$("#errmsg2").val("");
		}

			if($.isNumeric(val) === false) {
					$("#errmsg2").html("Enter Numbers Only").fadeIn('slow').delay(5000).hide(1);
					$("#phone").val("");
					$("#phone").focus();
					}
     }
       
    

</script>

</body>


</html>