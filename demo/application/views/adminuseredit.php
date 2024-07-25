<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>scholarship</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css') ?>">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
 <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="">
<link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
<script type='text/javascript' src='<?php echo base_url()?>asset/javascript/script.js'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>                       


</head>
<body>
<div class="adminmain">
<div class="adminpart1">    
 <div class="adminnavabar">
    <div class="adminlog"> 
<img src="<?php echo base_url()?>asset/img/logo1.jpeg" id="lo" > 
</div> 
<div class="adminoption">
    <h3>Stats</h3>
    <ul>
    <!-- <li>Dashboard</li> -->
    <li><a href="<?php echo base_url('admin/userlist')?>"><i class="fas fa-users"></i> &nbsp;User List </a></li>

    <li class="running"><a href="<?php echo base_url('admin/postscholarship')?>"> <i class="far fa-calendar-plus"></i> &nbsp;Add scholarship </a></li>
    <li><a href="<?php echo base_url('admin/scholarshiplist')?>"><i class="fas fa-cogs"></i>&nbsp; Manage scholarship </a></li>
    </ul>
    <h3>Account</h3>
    <ul>
    <li><a href="<?php echo base_url('admin/logout'); ?>">logout&nbsp;<i class="fas fa-sign-out-alt"></i></a></li>
  
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
        <a href=""><img src="<?php echo base_url()?>asset/img/profile.jpg" class="loginimage"></a>
    </div>
  </div>
    <!-- <div class="admin1part3">
    
    </div> -->
  </div>
  <div class="admin2">
    <div class="admin2part1">
        
   
<form method="post" class="registerform editform" enctype="multipart/form-data" action=""onsubmit="return validate()" name="myform" >
<div class="addphoto">  
    <input type="file" name="photo" > 
    <img src="<?php echo base_url('upload/').$data[0]->photo; ?>" >

</div>
<div class="from1">
    <div class="form-row">
        <div class="col form-group">
            <label>First name </label>   
 <input type="text" class="form-control" placeholder="" id="fname" value="<?php echo $data[0]->fname; ?>">
        </div> <!-- form-group end.// -->
        <div class="col form-group">
            <label>Last name</label>
            <input type="text" class="form-control" placeholder=" " name="lname" value="<?php echo $data[0]->lname; ?>">
        </div> <!-- form-group end.// -->
    </div> <!-- form-row end.// -->
    <div class="form-group">

        <label>Email address</label>
        <input type="email" class="form-control" placeholder="" name="email" value="<?php echo $data[0]->email; ?>">
        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
 
    </div> 

     <div class="form-row">
        <div class="col">
          <label>Phone number :</label>
        <div class="phonen">
        <input type="text"  value="+91" name="code" style="width:70px;" disabled>
        &nbsp; &nbsp;
<input type="text" class="form-control" placeholder="" size="10" name="phone" value="<?php echo $data[0]->phone; ?>">
        </div>
        </div> 
        <div class="col form-group">
              <?php 

               if($data[0]->gender == 'male'){


                ?>

              <label>&nbsp; &nbsp;Gender :</label>
                 <div class="col form-group" style="display:flex;">
             <input  type="radio" name="gender" value="male" checked="checked">
          <lable class="form-check-label">&nbsp; Male &nbsp; </lable> 
          
          <input  type="radio" name="gender" value="Female">
          <label class="form-check-label" > &nbsp; Female &nbsp;</label>

           <input  type="radio" name="gender" value="other">
          <label class="form-check-label">&nbsp; Other</label>
           <?php 
             }
             elseif($data[0]->gender == 'female'){


                ?>

                   <label>&nbsp; &nbsp;Gender :</label>
                 <div class="col form-group" style="display:flex;">
             <input  type="radio" name="gender" value="male" checked="checked">
          <lable class="form-check-label">&nbsp; Male &nbsp; </lable> 
          
          <input  type="radio" name="gender" value="Female" checked="checked">
          <label class="form-check-label" > &nbsp; Female &nbsp;</label>

           <input  type="radio" name="gender" value="other">
          <label class="form-check-label">&nbsp; Other</label>

           <?php 
                 }
              else{

                ?>
                  <label>&nbsp; &nbsp;Gender :</label>
                 <div class="col form-group" style="display:flex;">
             <input  type="radio" name="gender" value="male" checked="checked">
          <lable class="form-check-label">&nbsp; Male &nbsp; </lable> 
          
          <input  type="radio" name="gender" value="Female" checked="checked">
          <label class="form-check-label" > &nbsp; Female &nbsp;</label>

           <input  type="radio" name="gender" value="other">
          <label class="form-check-label">&nbsp; Other</label>
           <?php 
                 }
               
                ?>
        </div> <!-- form-group end.// -->
    </div>

   </div>

     <!-- form-group end.// -->
    <div class="form-row">
         <!-- form-group end.// -->
        <div class="form-group col-md-6">
          <label>Date of birth</label>
          <input type="date" class="form-control" name="dob" value="<?php echo $data[0]->dob; ?>">
        </div> <!-- form-group end.// -->
    </div> <!-- form-row.// -->
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="city"> City: </label>
            <select name="city" id="" class="form-control">
                  <option value="">====== Select Your City ======</option>
                  <?php 

                  ?>
                  <option value=""></option>
                <?php  ?>
                </select>
        </div> 
        <div class="form-group col-md-6">
          <label>Course Name </label>
       <input type="text" class="form-control" name="Course">
        </div> <!-- form-group end.// -->
    
    </div>
    
    <div class="form-group">
        <button type="submit" class="button1" name="signup" > Edit </button>
    </div>
 <!-- form-group// -->      
 </div>

</form>
 </div>
  </div>
</div>

</div>