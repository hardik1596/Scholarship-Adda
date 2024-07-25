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
<div class="dashboardmain">
<div class="adminpart1 dashboard">    
 <div class="adminnavabar">
   
<div class="adminoption">
    <h3>Account</h3>
    <ul>
    <!-- <li>Dashboard</li> -->
    <li class="running"><a href="user-list.php"><i class="fas fa-users"></i> &nbsp;dashboard </a></li>


    
    <li ><a href="index.php">logout &nbsp;<i class="fas fa-sign-out-alt"></i></a></li>
  </ul>

</div>
 </div>

</div>
<div class="dashboard2" style="height: 600px;">
    <div class="mainregister">
    
<p class="text-center passwordmain"><i class="fas fa-user-lock"></i> &nbsp;Change your password</p> 
</div>
    <div class="password">
       <div class="form-row">
        <div class="col form-group">
            <label>Current Password </label>   
            <input type="text" class="form-control" placeholder="" id="fname">
        </div> <!-- form-group end.// -->
        <div class="col form-group">
            <label>New Password</label>
            <input type="text" class="form-control" placeholder=" " name="lname">
        </div>
        <div class="col form-group">
            <label>Repeat New Password</label>
            <input type="text" class="form-control" placeholder=" " name="lname">
        </div> 
    </div> 
    <div class="form-group">
        <button type="submit" class="button1" name="signup" > Change  </button>
    </div>
 </div>
</div>

</div>
<?php  include 'include/footer.php';?>
</html>