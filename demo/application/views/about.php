<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>about</title>
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
   
<div class="image2">
    
 <?php  
 $this->load->view('include/header.php');
 ?>
    

  <section id="">
        <div class="about">
            <h1>About Us</h1>
            <p><a  href="index.php">Home</a> <a href="">&#8250; About</a></p>
        </div>
    </section>
  </div>
   <section id="main">
        <div class="container">
            <article class="content">
                <h1 class="title">About Us</h1>
                <p>Scholarship Adda is a technology-enabled initiative by NSDL e-Governance Infrastructure Limited (NSDL e-Gov) to bridge the gap in education finance in the country through an online platform. Students can search and apply for various education finance schemes they are qualified for. Fund providers, industries, and corporates can promote skill development by designing education finance schemes in Scholarship Adda and manage these schemes</p>
                <p>
The solution would help manage the entire online education finance application lifecycle i.e. submission and review of application, award of scholarship, disbursement of funds, and renewal of education finance. Scholarship Adda is positioned as a user friendly, transparent, and demand driven platform which will help the corporate sector in playing a positive role in developing education finance for the Indian society at large.
 </p>
 <p>Scholarship Adda proposes to effectively bring together various stakeholders in the education ecosystem. The solution would help manage the entire online scholarship application lifecycle i.e. submission and review of scholarship application, award of scholarship, disbursement of funds, and renewal of scholarships. Scholarship Adda aspires to empower the fund providers as well as students to develop an ecosystem that benefits all stakeholders.</p>
              
                
            </article>
            
            <aside class="sidebar">
                <div class="mshow">
                    <h1>Scholarship Adda</h1>
                    <p>A more easy way to search scholarship</p>
                </div>
                <h3 style="color:#ff9933">Quick Links</h3>
                <ul class="quick1">
                    <li><i class="fa fa-home "></i> Home</li>
                    <li><i class="fa fa-phone "></i> Contact</li>
                </ul>
            </aside>
        </div>
    </section>

<?php  include 'include/footer.php';?>

</body>

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

</script>
</html>