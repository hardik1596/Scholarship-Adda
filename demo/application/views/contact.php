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
<div class="mySlides" id="myDIV" >
<div class="logo2">
      <img src="">
     
</div>
<body>
   
<div class="image2">
    
 <?php  include 'include/header.php';?>
    
  <section id="">
        <div class="about">
            <h6>Contact</h6>
            <p><a href="index.php">Home</a> <a>&#8250;&nbsp;Contact</a></p>
        </div>
    </section>
</div>
<div class="contact1">
    <div class="contact1part">
        <i class="fas fa-map-marker-alt fa-5x"></i>
        <h1>Address</h1>
        <h3>Scholarship Adda , Gondal Road, Rajkot - 360020, Gujarat, India.</h3>
    </div>
    <div class="contact1part">
        <i class="fas fa-mobile-alt fa-5x"></i>
        <h1>Mobile </h1>
        <h3>+91 7548331818</h3>
    </div>
    <div class="contact1part">
        <i class="fas fa-envelope fa-5x"></i>
        <h1>Email ID</h1>
        <h3>Scholarship_adda@gmail.com</h3>
    </div>
</div>
<div class="contact2">
    <form  class="contactform">
        <h3>Any questions? Feel free to contact us!</h3>
        <div class="contact2part1">
        <label><i class="fas fa-user-circle"></i></label>
        <input type="text" name="name" placeholder="Your Name">
      
        <label> <i class="fas fa-envelope"></i></label>
        <input type="text" name="email" placeholder="Email Address">
        </div>
         
         <div class="contact2part2">
      
        <label> <i class="fas fa-clipboard"></i></label>
        <input type="text" name="Subject" placeholder="Subject">
        </div>
        <div class="contact2part2">
   <textarea class="tarea1" name="comments" cols="74" rows="5"placeholder="Message">
   </textarea>
        </div>
        <div class="contact2part2">
     <button  class="btncontact2part3 searchbtn">Submit Query</button>
        </div>
    </form>
</div>
<?php  include 'include/footer.php';?>
<script type="text/javascript" >
    
    window.onscroll = function()
    {
        myscroll();
    }
    var navbar = document.getElementById("sty");
    var sticky = navbar.offsetTop;
    var logo2 = document.getElementById("lo");

    function myscroll()
    {
        if(window.pageYOffset > sticky)
        {
            navbar.classList.add("sticky");
            navbar.classList.add("sticky1");
            logo2.src = "<?php echo base_url()?>asset/img/logo1.jpeg";
        } 
        else{
            navbar.classList.remove("sticky");
            navbar.classList.remove("sticky1");
            logo2.src = "<?php echo base_url()?>asset/img/logo1.png";
            }
    }

</script>x
</html>