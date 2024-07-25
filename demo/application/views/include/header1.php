<header  id="sty">
<nav>
<div class="logo" > 
<a href="<?php echo base_url()?>home/index">  <img src="<?php echo base_url()?>asset/img/logo1.jpeg" id="lo" >
</a>

</div>

<ul style="margin-left: 20px; margin-top: 10px;">
  
    

      <li><a href="<?php echo base_url()?>home/index" class="active">Home</a></li>
      <li class="dropdown">
        <a href="" class="dropbtn" style="padding-left:40px;">engineering</a>
        <div class="dropdown-content">
          <a href="<?php echo base_url()?>home/listing">M.Tech</a>
          <a href="<?php echo base_url()?>home/listing">B.Tech</a>
          <a href="<?php echo base_url()?>home/listing">Diploma</a>
        </div>    
      </li>
      <li class="dropdown">
        <a href="" class="dropbtn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;medical&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <div class="dropdown-content">
          <a href="<?php echo base_url()?>home/listing">M.D.</a>
          <a href="<?php echo base_url()?>home/listing">M.B.B.S.</a>
          <a href="<?php echo base_url()?>home/listing">Dental</a>
          <a href="<?php echo base_url()?>home/listing">orthopedic</a>
        </div>
      </li>
      <li class="dropdown">
        <a href="" class="dropbtn" >management</a>
        <div class="dropdown-content">
          <a href="<?php echo base_url()?>home/listing">B.B.A.</a>
          <a href="<?php echo base_url()?>home/listing">B.C.A.</a>
          <a href="<?php echo base_url()?>home/listing">B.Com</a>

        </div>
      </li>
      <li class="dropdown">
        <a href="" class="dropbtn" style="padding-left:80px;">more</a>
        <div class="dropdown-content">
          <a href="<?php echo base_url()?>home/about">About Us</a>
          <a href="<?php echo base_url()?>home/contact">Contact</a>
          <a href="<?php echo base_url()?>home/dashboard">Dashboard</a>
        </div>
      </li>

    </ul>

     
<div class="loginbtn">
      <ul>

        <?php 
if($this->session->has_userdata('uid')){
   $uid = $this->session->userdata('uid');
 $data = $this->db->get_where('user',array('uid' => $uid));
 $data1 = $data->result();
 ?>
        <li class="dropdown">
        <a href="" class="dropbtn" ><img src="<?php echo base_url().'upload/'.$data1[0]->photo;?>" alt="profilepic" class="profilepic"></a>
        <div class="dropdown-content">
          <a><?php echo $data1[0]->fname; ?></a>
          <a><?php echo $data1[0]->course; ?></a>
          <a href="<?php echo base_url()?>home/logout">logout</a>

        </div>
      </li>
   <?php } else {
    ?>
       <a href=""><i class="fas fa-sign-in-alt "></i></a>
        <li><a href="<?php echo base_url()?>home/login">login</a></li>
        <a href=""><i class="fas fa-grip-lines-vertical"></i></a>
        <li><a href="<?php echo base_url()?>home/register">register</a></li>
      <?php } ?>
      </ul>
    </div>


</nav>
</header>
<script type="text/javascript">

      
    var navbar = document.getElementById("sty");
    var sticky = navbar.offsetTop;

   var logo2 = document.getElementById("lo");
   
   navbar.classList.add("sticky1");
</script>