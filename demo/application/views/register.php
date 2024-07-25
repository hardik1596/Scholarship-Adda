<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>scholarship</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css') ?>">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style type="text/css">
  .verror{
    padding-left: 10x;
  }
</style>
</head>

<body> <?php  
 $this->load->view('include/header1.php');
 ?>
    
<div class="mainregister">
    <h3 class="text-center ">Register </h3>
    <br>
<p class="text-center " style="color: black;">Alredy have an account <a href="login.php" >login !</a></p> 
</div>
<form method="post" class="registerform" enctype="multipart/form-data" action="<?php echo base_url('home/data_validation'); ?>" name="myform" >

    <div class="form-row">
        <div class="col form-group">
            <label for="fname">First name </label>   
<input type="text" class="form-control" name="fname"  id="fname" placeholder=""  value="<?php echo isset($_POST["fname"]) ? $_POST["fname"] : ''; ?>">
 <?php echo form_error('fname');  ?>
        </div> <!-- form-group end.// -->
        <div class="col form-group">
            <label>Last name</label>
            <input type="text" class="form-control" id="lname" placeholder=" " name="lname"  value="<?php echo isset($_POST["lname"]) ? $_POST["lname"] : ''; ?>">
            <?php echo form_error('lname');  ?>
        </div> 
    </div> 
    <div class="form-group">
    </div> 

     <div class="form-row">
        <div class="col">
          <label>Phone number :</label>
        <div class="phonen">
        <input type="text"  value="+91" name="code" style="width:70px;" disabled>
        &nbsp; &nbsp;
        <input type="text" class="form-control" placeholder="" size="10" name="phone" id="mobile">
        
        </div>
        <?php echo form_error('phone');  ?>
        </div> 
        <div class="col form-group">
              <label>&nbsp; &nbsp;Gender :</label>
                 <div class="col form-group" style="display:flex;">
             <input  type="radio" name="gender" value="male">
          <lable class="form-check-label">&nbsp; Male &nbsp; </lable> 
          
          <input  type="radio" name="gender" value="Female">
          <label class="form-check-label" > &nbsp; Female &nbsp;</label>

           <input  type="radio" name="gender" value="other">
          <label class="form-check-label">&nbsp; Other</label>

        </div> <!-- form-group end.// -->
        <div style="padding-left:15px;">
        <?php echo form_error('gender');  ?>  
        </div>
    </div>

   </div>

     </div> <!-- form-group end.// -->
    <div class="form-row">
        <div class="form-group col-md-6">
          <label>Enter email</label>
          <input type="text" class="form-control" name="email" id="email">
          <?php echo form_error('email');  ?>
        </div> <!-- form-group end.// -->
        <div class="form-group col-md-6">
          <label>Date of birth</label>
          <input type="date" class="form-control" name="dob" id="date">
          <?php echo form_error('dob');  ?>
        </div> <!-- form-group end.// -->
        
    </div> <!-- form-row.// -->
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="city">City: </label>
            <select name="city" id="" class="form-control">
                  <option value="">====== Select Your City ======</option>
                  <?php 
                   $conn = mysqli_connect("localhost","root","","test2");
                  $sql="select * from city";
                  $result=$conn->query($sql);
                  while ($we=$result->fetch_object()) {
                  ?>
                  <option value="<?php echo $we->cid; ?>"><?php echo $we->cname; ?></option>
                <?php } ?>
                </select>
                <?php echo form_error('city');  ?>
        </div> 
        <div class="form-group col-md-6">
          <label>Course Name </label>
       <input type="text" class="form-control" name="course" id="course">
       <?php echo form_error('course');  ?>
        </div> <!-- form-group end.// -->
    </div>
    <div class="form-row">
        <div class="col form-group">
            <label>Create password </label>   
            <input type="password" class="form-control" placeholder="" name="password" id="password">
             <?php echo form_error('password');  ?>
        </div> <!-- form-group end.// -->
        <div class="col form-group">
            <label>Confirm password</label>
            <input type="password" class="form-control" placeholder=" " name="cpassword" id="cpassword">
        
            <?php echo form_error('cpassword');  ?>
        </div> <!-- form-group end.// -->
    </div> 
   <div class="form-group">
    
        <label>Profile photo :</label>
        <input class="form-control" type="file" name="profilepic" size="20" />

    </div>
    <div class="form-group">
        <button type="submit" class="button1" name="signup" > Register  </button>
    </div>      
 </div>

</form>

<?php  include 'include/footer.php';?>

</body>

</html>