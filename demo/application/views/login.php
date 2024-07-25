<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>scholarship</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css') ?>">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
   
    <?php  include 'include/header1.php';?>
<div  style=" display: flex;"> 
<div class="loginimg">
</div>
<div class="card loginbody" style="">
<article class="card-body">
    <h3 style="color: #ff9933; padding-left: 193px;">Login</h3>
    <h2 class="card-title text-center mb-4 mt-1" style="font-weight: 500; ">We're glad to see you again!</h2>
 
       <p class="text-center">Don't have an account? <a href="register.php" class="" style="color:#ff9933; font-weight:600;">Sign Up!</a></p>
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url('home/login_data'); ?>" name="form">
    <div class="form-group">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
        <input name="user" class="form-control" placeholder="Enter Email Address / Mobile no." type="" id="user">
    </div>
    <?php echo form_error('user');  ?> 
    </div> 
    <div class="form-group">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
         </div>
        <input class="form-control" name="password" placeholder="******" type="password" id="password">
         
    </div> 
    <?php echo form_error('password');  ?>
    </div> 
    <div class="form-group">
    <button type="submit" class="btn btn-block searchbtn search2" > Login  </button>
    </div> 
    <p class=""><a href="<?php echo base_url()?>home/forgot" class="" style="color:#ff9933; font-weight:600;">Forgot password</a></p>
 <p class="">if you are admin than <a href="<?php echo base_url()?>admin/adminlogin" class="" style="color:#ff9933; font-weight:600;">Log In</a></p>

    <p class="text-danger text-center" id="msj"></p>
    <!-- <p class="text-center"><a href="#" class="btn">Forgot password?</a></p> -->
    </form>
</article>
</div> 

</div>

</body>


<?php  include 'include/footer.php';?>

</html>