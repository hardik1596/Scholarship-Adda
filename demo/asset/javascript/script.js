
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
            logo2.src = "<?php echo base_url()?>asset/img/logo1.jpeg'>";
        } 
        else{
            navbar.classList.remove("sticky");
            navbar.classList.remove("sticky1");
            banner.classList.remove("bann");
            logo2.src = "<?php echo base_url()?>asset/img/logo1.png'>";
            }
    }

    var i=0;
showSlides();
function showSlides() {
  
  var r="<?php echo base_url()?>asset/img/'>";
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