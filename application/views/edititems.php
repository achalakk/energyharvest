<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="Colors">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title> Foodking || Edit items </title>

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
                                <li class="breadcrumb-item active" aria-current="page"> <a href="<?php echo base_url(); ?>itemslist">Items</a></li>
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
						<h5>Edit item</h5>
						</div>
							<!--<div class="col-lg-12">-->
                                <!-- Ibox -->
                                <div class="ibox bg-boxshadow mb-50">
                                   
                                    <!-- Ibox-content -->
                                    <div class="ibox-content">
                                        <div class="row">
                                            <div class="col-sm-12">  
											<?php foreach($itlist as $data1) {?>                                          
                                                <!-- Form -->
                                                <form  class="form-horizontal col-md-8" id="validate-1"  method="post"  enctype="multipart/form-data" action="<?php echo base_url(); ?>updateitem/<?php echo $data1->id; ?>">
                                                  
												  <div class="form-group ">
										            <label>Restaurant Name</label> 
										            <select name="rname" id="rname" class="form-control "> 
										            <option value="">Select.....</option>
									                 <?php 
									                   foreach($rlist as $data){
									                  ?>
																					 
													   <option value="<?php echo $data->id; ?>" <?php if($data->id==$data1->r_id) { ?> selected="selected" <?php } ?>><?php echo $data->name;?></option>												  
									           <?php } ?>
									               </select>									 
									           </div> 
											 
											     <div class="form-group " id="stallname"   <?php if(count($slist)<=0){?>style="display:none;"<?php }?>>
										            <label>Stall Name</label> 
										            <select name="sname" id="sname" class="form-control "> 
										            <option value="">Select.....</option>
									                								 
									          <?php foreach($slist as $s) {?>
										              								 
									           <option value="<?php echo $s->id; ?>" <?php if($data1->stall_id==$s->id) {?> selected="selected" <?php } ?>><?php echo $s->stall_name;?></option>
													
											    <?php }?>
									               </select>									 
									           </div>
											  
											    
													
												 <div class="form-group ">
										            <label>Category  Type</label> 
										            <select name="ctype" id="ctype" class="form-control "> 
										            <option value="">Select.....</option>
									                 <?php 
									                   foreach($tlist as $data){
									                  ?>
																					 
									           <option value="<?php echo $data->id; ?>" <?php if($data1->type_id==$data->id){ ?>selected="selected" <?php } ?> ><?php echo $data->type_name;?></option>												  
									           <?php } ?>
									               </select>									 
									           </div> 
													 
													 <div class="form-group">
													<label>Mini title</label> 
									 <input type="text" placeholder="Enter minititle" name="minititle" id="minititle" class="form-control"  value="<?php echo $data1->minititle; ?>">
													</div>
													
													<div class="form-group ">
										            <label>Category name</label> 
										            <select name="cname" id="cname" class="form-control "> 
													<option value="">Select.....</option>
									               <?php foreach($itlist1 as $dataa) {?>
										              								 
									           <option value="<?php echo $dataa->id; ?>" <?php if($data1->category_id==$dataa->id) {?> selected="selected" <?php } ?>><?php echo $dataa->category_name;?></option>
													<?php } ?>
									               </select>									 
									           </div> 
													
												  <div class="form-group">
													<label>Item name</label> 
									 <input type="text" placeholder="Enter item Name" name="item" id="item" class="form-control"  value="<?php echo $data1->item_name; ?>" onchange="getValue1(this.value);" required>
													</div><span id="errmsg1" class="text-danger"></span>
													
													<div class="form-group">
													<label> Description</label> 
													<textarea rows="4" name="description" cols="10" class="form-control" ><?php echo $data1->description; ?></textarea>
													</div>
													
													<div class="form-group">
												
												<label for="file"> Upload File:</label><br>	
												<div class=" col-md-4 col-md-offset-4 img-border gallery" id="gallery"></div>
													<div class="col-md-4 col-md-offset-4 img-border">
													<?php 
													foreach($itlist as $list){
												$files=explode(',',$list->image);
												foreach($files as $img){
												?>
                                                      <img src="<?php echo base_url(); ?>/<?php echo $img; ?>" class="profile-img-tag1"/>	
													<?php } } ?>													  
						                              </div>												<input type="file" name="file1[]" multiple="multiple" id="file1" class="form-control"  onchange="fileValidation()"/><span id="errmsg" class="text-danger"></span><br/>
												</div>
												
												
													<div class="form-group">
													<label>Item Price</label> 
									 <input type="text" placeholder="Enter item price" name="price" id="price" class="form-control"  value="<?php echo $data1->price ?>" onchange="getValue1(this.value);" required>
													</div>
													
													<div class="form-group">
													<label>Discount(%)</label> 
									 <input type="text" placeholder="Enter discount percentage" name="discount" id="discount" class="form-control"  value="<?php echo $data1->discount; ?>"  onchange="getValue2(this.value);">
													</div>
													<span id="errmsg2" class="text-danger"></span>
													
													
													<div class="form-group">
													<button class="btn btn-primary mt-2 float-left" name="submit" type="submit"><strong> Submit </strong></button>

													</div>
													
																																																												           																
                                                </form>
											<?php } ?>
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
	
	<!-- multiple images script-->
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
<!--extension script-->
<script>
 function fileValidation(){
    var fileInput = document.getElementById('file1');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.png|\.jpg|\.jpeg)$/i;
  // var allowedExtensions = /(\.pdf)$/i;
    if(!allowedExtensions.exec(filePath)){
        //alert('Please upload file having extensions .png/.jpg/.jpeg only.');
		$('#errmsg').html("Please upload file having extensions .png/.jpg/.jpeg only").fadeIn('slow').delay(5000).hide(1);
        fileInput.value = '';
        return false;
    }
}
 </script>

 <!--Dependent drop down script-->
<script type='text/javascript'>
  // baseURL variable
  var baseURL= "<?php echo base_url();?>";
 
  $(document).ready(function(){
 
    $('#ctype').on('change',function(){
      var cate_type = $(this).val();
//alert(cate_type);
      // AJAX request
      $.ajax({
        url:'<?php echo base_url();?>Admin_controller/bb',
        method: 'post',
        data: {cate_type:cate_type},
		
        dataType: 'json',
        success: function(response){
//alert(response);
            $('#cname').find('option').not(':first').remove();

          $.each(response,function(index,data){
			   // alert(response);
             $('#cname').append('<option value="'+data['id']+'">'+data['category_name']+'</option>');
          });
        }
     });
   });
 
  
 });

</script>

<!--Dependent drop down with hiding script-->
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

<!-- allowing only numbers -->
<script type="text/javascript">
function getValue2(val){
       //alert('Hi'); 
     if($.isNumeric(val) === false) {
  $("#errmsg2").html("Enter Numbers Only").fadeIn('slow').delay(5000).hide(1);
$("#discount").val("");
$("#discount").focus();
 }
       

    }

</script>

</body>


</html>