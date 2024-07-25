<?php

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
  		
 	<div class="usercount">
 		<div>
 		<h1>User List</h1>
 	  <h1 id="number"><?php echo sizeof($userlist); ?></h1>
 	 </div>
 	 <div class="usericon">
 	 	<i class="fas fa-users"></i> 
 	 </div>
 	</div>

   <div class="scholarshipcount">
   	<div >
 		<h1>Scholarship List</h1>
 	  <h1><?php echo sizeof($scholarshiplist); ?></h1>
</div>
<div class="scholarshipicon">
	<i class="fas fa-list-alt"></i>
</div>
</div>
 </div>
  </div>
</div>

</div>
<script type="text/javascript">
// 	var i = 0; 
// 	ru();
// 	function ru(){

// if(!i==20){
// 	i++;

// 		document.getElementById("number").innerHTML = i ;
// 		 setTimeout(ru,3000);
// 	}

// }

</script>


</body>
</html>
