<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>loginpage</title>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css') ?>">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
   
<?php  
 $this->load->view('include/header1.php');
 ?>

<div class="dashboardmain">
<div class="adminpart1 dashboard">    
 <div class="adminnavabar">
   
<div class="adminoption">
    <h3>Account</h3>
    <ul>
    <!-- <li>Dashboard</li> -->
    <li class="running"><a href="user-list.php"><i class="fas fa-users"></i> &nbsp;dashboard </a></li>


    
    <li ><a href="<?php echo base_url(); ?>home/logout">logout &nbsp;<i class="fas fa-sign-out-alt"></i></a></li>
  </ul>

</div>
 </div>

</div>
<div class="dashboard2" style="height: 600px;">
    <div class="admin2part1">
        
    <div class="usercount">
        <div>
        <h3>Edit Profile</h3>
      <button class="searchbtn" onclick="location.href='<?php echo base_url(); ?>home/editprofile'">Edit</button>
     </div>
     <div class="usericon">
      <i class="fas fa-id-card"></i>
     </div>
    </div>
   <div class="scholarshipcount">
    <div >
        <h3>Change password</h3>
     <button class="searchbtn " onclick="location.href='<?php echo base_url(); ?>home/changepassword'">Change</button>
</div>
<div class="scholarshipicon">
  <i class="fas fa-unlock-alt"></i>
</div>
</div>
 </div>
</div>

</div>
<?php  include 'include/footer.php';?>
</html>