<?php
if (isset($city1)){
    
   
   ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>scholarship</title>
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css') ?>">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
 
<body>
<div class="adminmain">
<div class="adminpart1">	
 <div class="adminnavabar">
    <div class="adminlog"> 
<img src="<?php echo base_url('asset/img/logo1.jpeg'); ?>" id="lo" > 
</div>
<div class="adminoption">
	<h3>Stats</h3>
	<ul>
	<!-- <li>Dashboard</li> -->
	<li><a href="<?php echo base_url('admin/userlist'); ?>"><i class="fas fa-users"></i> &nbsp;User List </a></li>

	<li class="running"><a href="<?php echo base_url('admin/postscholarship'); ?>"> <i class="far fa-calendar-plus"></i> &nbsp;Add scholarship </a></li>
	<li><a href="<?php echo base_url('admin/scholarshiplist'); ?>"><i class="fas fa-cogs"></i>&nbsp; Manage scholarship </a></li>
	</ul>
	<h3>Account</h3>
	<ul>
	<li><a href="<?php echo base_url('home/index'); ?>">logout&nbsp;<i class="fas fa-sign-out-alt"></i></a></li>
  
</div>
 </div>

</div>

<div class="adminpart2">
  <div class="admin1">
  	<div style="display: flex; width: 1300;">
  	<div class="admin1part1">
 	<h1 class="admintext">Admin!</h1>
 	<h1 class="admintext2"> We are glad to see you again!</h1>
  </div>
  	<div class="admin1part2">
  		<a href=""><img src="<?php echo base_url('asset/img/profile.jpg'); ?>" class="loginimage"></a>
  	</div>
  </div>
  	
  </div>
  <div class="admin2">
  	<p class="text-center" >Enter Scholarship Details</p> 


<form method="post" class="registerform" enctype="multipart/form-data" 
action="<?php echo base_url('admin/post'); ?>" name="myform" >

    <div class="form-row">
         <div class="col form-group">
            <label>Scholarship Name</label>   
            <input type="text" class="form-control" placeholder="" id="fname" name="sname">
            <?php echo form_error('sname');  ?>
         </div>
    </div> 
    <div class="form-row">
         <div class="col form-group">
            <label>Course</label>   
            <input type="text" class="form-control" placeholder="" id="course" name="course">
            <?php echo form_error('course');  ?>
         </div>
    </div> 
    <div class="form-row">
         <div class="col form-group">
            <label>Branch</label>   
            <input type="text" class="form-control" placeholder="" id="branch" name="branch">
            <?php echo form_error('branch');  ?>
         </div>
    </div> 
    <div class="form-row">
         <div class="col form-group">
            <label>City</label>   
            <select name="city" id="" class="form-control" style="width: 399px; margin-top: 18px;">

                  <option value="">====== Select Your City ======</option>
                  
                 
                <?php  foreach ($city1 as $city) {
                    
                ?>
                <option value="<?php echo $city->cid;  ?>"><?php echo $city->cname;  ?></option>
            <?php } ?>
                </select>

            <?php echo form_error('city');  ?>
         </div>
    </div>
    <div class="form-row">
         <div class="col form-group">
            <label>Eligibility</label>   
            <textarea class="form-control" placeholder="" id="fname" name="eligibility">
            </textarea>
          <?php echo form_error('eligibility');  ?>
         </div>
    </div> 
   <div class="form-row">
         <div class="col form-group">
            <label>Benefits</label>   
            <textarea class="form-control" placeholder="" id="fname" name="benefits">
            </textarea>
            <?php echo form_error('benefits');  ?>
         </div>
    </div> 
  <div class="form-row">
         <div class="col form-group">
            <label>Documents</label>   
            <textarea class="form-control" placeholder="" id="fname" name="documents">
            </textarea>
            <?php echo form_error('documents');  ?>
         </div>
    </div> 
    <div class="form-row">
         <div class="col form-group">
            <label>How can you apply?</label>   
            <textarea class="form-control" placeholder="" id="fname" name="apply">
            </textarea>
            <?php echo form_error('apply');  ?>
         </div>
    </div> 
    <div class="form-group">
<button type="submit" class="btn registerformbutton" name="signup" style=""> Add</button>
    </div>
</form>
  </div>
</div>

</div>


</body>
</html>
<?php } ?>