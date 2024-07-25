<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>loginpage</title>

<link rel="stylesheet" href="css/style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css') ?>">
</head>
<body>

<?php  include 'include/header1.php';?>
<div class="steps" style="margin-top: 5px;">
    <h1>Forgot password ?</h1>
    <p style="color: black">change your password here</p>
</div>
    <div class="password" style="margin-bottom: 10px; margin-top: 0px;">
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url('home/forgotp'); ?>" name="form">
       <div class="form-row">
        <div class="col form-group">
            <label>Email address </label>   
            <input type="email" class="form-control" placeholder=""  name="emailchange">
        </div> <!-- form-group end.// -->
        <div class="col form-group">
            <label>New Password</label>
            <input type="password" class="form-control" placeholder=" " name="changePassword">
        </div>
        <div class="col form-group">
            <label>Repeat New Password</label>
            <input type="Password" class="form-control" placeholder=" " name="rechangepassword">
        </div> 
    </div> 
    <div class="form-group">
        <button type="submit" class="button1" name="signup" >change</button>
    </div>
    </form>
    
 </div>

<?php  include 'include/footer.php';?>
</html>