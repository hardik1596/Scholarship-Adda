
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<style type="text/css">
.demo{ background: #bd986b; }
.testimonial{
    background: #fff;
    text-align: center;
    padding: 30px 30px 50px;
    margin: 0 15px 100px;
    position: relative;
}
.testimonial:before,
.testimonial:after{
    content: "";
    border-top: 40px solid #fff;
    border-right: 125px solid transparent;
    position: absolute;
    bottom: -40px;
    left: 0;
}
.testimonial:after{
    border-right: none;
    border-left: 125px solid transparent;
    left: auto;
    right: 0;
}
.testimonial .icon{
    display: inline-block;
    font-size: 80px;
    color: #bd986b;
    margin-bottom: 20px;
    opacity: 0.6;
}
.testimonial .description{
    font-size: 15px;
    color: #777;
    text-align: left;
    margin-bottom: 30px;
    opacity: 0.8;
}
.testimonial .testimonial-content{
    width: 100%;
    position: absolute;
    left: 0;
}
.testimonial .pic{
    display: inline-block;
    border: 2px solid #fff;
    border-radius: 50%;
    box-shadow: 0 0 2px 2px #daad86;
    overflow: hidden;
    z-index: 1;
    position: relative;
}
.testimonial .pic img{
    width: 100%;
    height: auto;
}
.testimonial .title{
    font-size: 15px;
    font-weight: bold;
    color: #fff;
    text-transform: capitalize;
    margin: 0 0 5px 0;
}
.testimonial .post{
    display: block;
    font-size: 14px;
    color: #ffd9b8;
}
.owl-theme .owl-controls{
    margin-top: 0;
}
.owl-theme .owl-controls .owl-page span{
    width: 32px;
    height: 10px;
    background: #fff;
    border: 2px solid #bd986b;
    margin: 5px;
    opacity: 1;
}
.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls.clickable .owl-page:hover span{
    background: #ffd9b8;
    border-color: #fff;
}
@media only screen and (max-width: 650px) and (min-width: 400px){
    .testimonial:before{ border-right: 325px solid transparent; }
    .testimonial:after{ border-left: 325px solid transparent; }
}
</style>
</head>

<body> 
<div class="mySlides" id="myDIV" >
<div class="logo2">
      <img src="">
     
</div>
<?php  
 $this->load->view('include/header.php');
 ?>
<div>
<biv class="quote" id="ban">
    <h1>The journey of thousand miles begin with one step.</h1>
    <h2>Finding the scholarship for your college has now <br> become much easier with us.</h2>
</biv>

<div class="search" >
<div class="search1">
<form method="post" class="searchform2" enctype="multipart/form-data" action="<?php echo base_url('home/search1'); ?>" name="myform" >
              <div class="intro-search-field">  
            <input id="intro-keywords" type="text" placeholder="&nbsp;&nbsp;City name" name="city" style="">
           
                    </div>
<div class="intro-search-field">
    <input id="intro-keywords" type="text" placeholder="&nbsp;&nbsp;Course Name" name="course" style="">
                    </div>
                    <div class="intro-search-field">
  <input id="intro-keywords" type="text" placeholder="&nbsp;&nbsp;Branch name" name="branch" >
                    </div>
      <button type="submit" class="searchbtn">Search</button>   
</form>
</div>
</div>
</div>
</div>
<div>
    <div class="steps">
    <h1> 3 easy steps to find scholarship</h1>
</div>
    <div class="section">
        <div class="step1">
       <i class="fas fa-user-plus fa-5x"></i>
       <h2 style="">Sign Up</h2>
        </div>
        <div class="step2 arrow1">
            <img src="<?php echo base_url()?>asset/img/arrow.png">
        </div>
        <div class="step1 step11">
        <i class="far fa-address-card fa-5x" ></i>
         <h2 >Complete Profile</h2>
        </div>
        <div class="step2">
            <img src="<?php echo base_url()?>asset/img/arrow.png">
        </div>
        <div class="step1 step11">
         <i class="fas fa-search fa-5x"></i>
         <h2 style="">Find Scholarship</h2>
        </div>
    </div>
</div>
<div class="steps">
    <h1>Search Scholarships By</h1>
</div>
<div class="pach" >
    
<div class="pach1 " style="background-image: <?php echo base_url()?>asset/img/iit1.jpg;?>">
    <h1>university</h1>
</div>


<div class="pach1 disn1" style="background-image: <?php echo base_url('asset/img/iit2.jpeg')?>?>;">
      <h1>College & institute</h1>
</div> 


<div class="pach1 " style="background-image: <?php echo base_url()?>asset/img/iit3.jpg;?>;">
      <h1>School</h1>
</div>  
 

<div class="pach1 " style="background-image: <?php echo base_url()?>asset/img/iit4.jpg;?>;">
      <h1>classes</h1>
</div>  
 
</div>
<div class="steps">
    <h1>Why Scholarship adda?</h1>
</div>

<div class="section3" >
     
<div class="sectionpart3" style="">
<img src="<?php echo base_url()?>asset/img/Scholarship_body.png" style="height: 150px;">
<h1>Scholarship Search</h1>
    <p class="details1">Scholarship Adda matches you with scholarships. <br> With millions of scholarships available, our algorithm <br> does the work for you.</p>
</div>
<div class="sectionpart3">

<img src="<?php echo base_url()?>asset/img/filter.jpg" >
<h1>Easy Filteration</h1>
<p>Scholarship adda makes your scholarship search <br> way more easy with some filtersThose Filters are <br> search by city , course name  & scholarship search filters.</p>
</div>
<div class="sectionpart3">
<img src="<?php echo base_url()?>asset/img/collage.png" >

<h1>College Search</h1>

<p class="details1"> Find your perfect college at Scholarships.com. <br> Filter by state, cost, major and more. View acceptance rates and compare. </p>

</div>
</div>
<?php 
if (isset($listdata)){

?>
<div class="road">
<div class="road1">
    <img src="<?php echo base_url()?>asset/img/research.png">
</div>


<div class="road2">
    <h2>popular scholarship</h2>
     <h4>finding scholarship is way more easy with us</h4>
     <div class="maindetail">
     <div class="list">
     <ul>
        <?php 
              
                 $i = 1;
               
             foreach ($listdata as $list) {
            
             
        ?>
         <li><a onclick="on(<?php echo $i; ?>)" id="btn<?php echo $i; ?>" ><?php echo $list->sname; ?> </a></li>
         
     <?php  
   $i++;
          if ($i==8) {
             exit(0);
               }
         
      }
  ?>
     </ul>
 </div>

 <div  class="detailbox">
    <?php 
    $i=1;
    foreach ($listdata as $list) {
     ?>
     <div class="detailbox1" style="" id="d<?php echo $i; ?>">
         <?php echo $list->eligibility; ?>
      </div>
  <?php 
           $i++;
          if ($i==8) {
             exit(0);
               }
         
      } ?>
   <!--    <div class="detailbox1 detailb" style="" id="d2">
         It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the 
      </div>
      <div class="detailbox1 detailb" style="" id="d3">   
        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 
      </div>
      <div class="detailbox1 detailb" style="" id="d4">
         t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web 

      </div>
      <div class="detailbox1 detailb" style="" id="d5">
       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in    
      </div>
      <div class="detailbox1 detailb" style="" id="d6">
       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.    
    </div> -->
 </div>
 </div>
</div>
</div>
<?php } ?>
<div class="demo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                        </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="images/img-1.jpg" alt=""></div>
                            <h3 class="title">williamson</h3>
                            <span class="post">Web Developer</span>
                        </div>
                    </div>
                    <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                        </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="images/img-2.jpg" alt=""></div>
                            <h3 class="title">Kristina</h3>
                            <span class="post">Web Designer</span>
                        </div>
                    </div>
                    <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                        </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="images/img-3.jpg" alt=""></div>
                            <h3 class="title">Steve Thomas</h3>
                            <span class="post">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php  include 'include/footer.php';?>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 <script type="text/javascript">
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,3],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        itemsMobile:[650,1],
        pagination:true,
        autoPlay:true
    });
});
</script>

<script>
    
    window.onscroll = function()
    {
        myscroll();
    }
    var navbar = document.getElementById("sty");
    var sticky = navbar.offsetTop;
    var banner = document.getElementById("ban");
    var logo2 = document.getElementById("lo");

    function myscroll()
    {
        if(window.pageYOffset > sticky)
        {
            navbar.classList.add("sticky");
            navbar.classList.add("sticky1");
            banner.classList.add("bann");
            logo2.src = "<?php echo base_url()?>asset/img/logo1.jpeg";
        } 
        else{
            navbar.classList.remove("sticky");
            navbar.classList.remove("sticky1");
            banner.classList.remove("bann");
            logo2.src = "<?php echo base_url()?>asset/img/logo1.png";
            }
    }

    var i=0;
showSlides();
function showSlides() {
  
  var r="<?php echo base_url()?>asset/img/";
  const img = ["nirma.jpg","iit2.jpeg","RKU.jpeg","iit3.jpg","iit1.jpg"];

 document.getElementById("myDIV").style.backgroundImage ="linear-gradient(0deg,rgba(0,0,0,0),rgba(0,0,0,.60)),url("+r+img[i]+")";
        i++;
     if(i==5)
     {
        i=0;
     }

  setTimeout(showSlides,3000); 

}

 function on(nu){
      
    let name =['d1','d2','d3','d4'];
    var d1 = document.getElementById("d1");
    var d2 = document.getElementById("d2");
    var d3 = document.getElementById("d3");
    
    var d4 = document.getElementById("d4");
    var d5 = document.getElementById("d5");
    var d6 = document.getElementById("d6");
    var nu1 = nu;

       var btn1 = document.getElementById("btn1");
       var btn2 = document.getElementById("btn2");
       var btn3 = document.getElementById("btn3");
       var btn4 = document.getElementById("btn4");
       var btn5 = document.getElementById("btn5");
       var btn6 = document.getElementById("btn6");
            
     if (nu1 == 1) {
         d1.classList.remove("detailb");
         d2.classList.add("detailb");
         d3.classList.add("detailb");
         d4.classList.add("detailb");
         d5.classList.add("detailb");
         d6.classList.add("detailb");

          btn1.classList.add("linesi");
          btn2.classList.remove("linesi");
          btn3.classList.remove("linesi");
          btn4.classList.remove("linesi");
          btn5.classList.remove("linesi");
          btn6.classList.remove("linesi");
     }
     if (nu1 == 2) {
         d1.classList.add("detailb");
         d2.classList.remove("detailb");
         d3.classList.add("detailb");
         d4.classList.add("detailb");
         d5.classList.add("detailb");
         d6.classList.add("detailb");
   
          btn1.classList.remove("linesi");
          btn2.classList.add("linesi");
          btn3.classList.remove("linesi");
          btn4.classList.remove("linesi");
          btn5.classList.remove("linesi");
          btn6.classList.remove("linesi");
         
     }
     if (nu1 == 3) {
         d1.classList.add("detailb");
         d2.classList.add("detailb");
         d3.classList.remove("detailb");
         d4.classList.add("detailb");
         d5.classList.add("detailb");
         d6.classList.add("detailb");
   

       btn1.classList.remove("linesi");
          btn2.classList.remove("linesi");
          btn3.classList.add("linesi");
          btn4.classList.remove("linesi");
          btn5.classList.remove("linesi");
          btn6.classList.remove("linesi");

     }
    if (nu1 == 4) {
         d1.classList.add("detailb");
         d2.classList.add("detailb");
         d3.classList.add("detailb");
         
         d4.classList.remove("detailb");
         d5.classList.add("detailb");
         d6.classList.add("detailb");

          btn1.classList.remove("linesi");
          btn2.classList.remove("linesi");
          btn3.classList.remove("linesi");
          btn4.classList.add("linesi");
          btn5.classList.remove("linesi");
          btn6.classList.remove("linesi");

     }
      if (nu1 == 5) {
         d1.classList.add("detailb");
         d2.classList.add("detailb");
         d3.classList.add("detailb");
         
         d4.classList.add("detailb");
         d5.classList.remove("detailb");
         d6.classList.add("detailb");

         btn1.classList.remove("linesi");
          btn2.classList.remove("linesi");
          btn3.classList.remove("linesi");
          btn4.classList.remove("linesi");
          btn5.classList.add("linesi");
          btn6.classList.remove("linesi");

     }
       if (nu1 == 6) {
         d1.classList.add("detailb");
         d2.classList.add("detailb");
         d3.classList.add("detailb");
         
         d4.classList.add("detailb");
         d5.classList.add("detailb");
         d6.classList.remove("detailb");
       
         btn1.classList.remove("linesi");
          btn2.classList.remove("linesi");
          btn3.classList.remove("linesi");
          btn4.classList.remove("linesi");
          btn5.classList.remove("linesi");
          btn6.classList.add("linesi");
     } 

    }

 var navlinks = document.getElementById("sty");
    function show(){
        navlinks.style.left="0";
    }
    function hide(){
        navlinks.style.left="-400px";
    }    
</script>

<script type="text/javascript" src="javascript/script.js"></script>

</body>
</html>
