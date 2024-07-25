
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>loginpage</title>


  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style.css') ?>">< <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
    .cardcontainer {
    
    height: auto;
    background-color: white;
    margin-left: auto;
    margin-right: auto;
    transition: 0.3s
}
.card-text{
    width: 250px;
}
.card{
    overflow: hidden;
    height: 345px;
    margin-bottom: 25px;
}
.listcard{
width: 30% !important;
    height: auto !important ;
    overflow: hidden;
    
    
}
.cardcontainer {
    box-shadow: 0 0 45px gray
}

.photo {
    height: 300px;
    width: 100%
}

.photo img {
    height: 100%;
    width: 100%
}

.txt1 {
    margin: auto;
    text-align: center;
    font-size: 17px
}

.content {
    width: 80%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    top: -33px
}

.photos {
    width: 90px;
    height: 30px;
    background-color: #E74C3C;
    color: white;
    position: relative;
    top: -30px;
    padding-left: 10px;
    font-size: 20px
}

.txt4 {
    font-size: 27px;
    position: relative;
    top: 33px
}

.txt5 {
    position: relative;
    top: 18px;
    color: #E74C3C;
    font-size: 23px
}

.txt2 {
    position: relative;
    top: 10px
}

.cardcontainer .photo {
    height: 200px;
    animation: move1 0.5s ease both
}

@keyframes move1 {
    0% {
        height: 300px
    }

    100% {
        height: 200px
    }
}

.cardcontainer .content {
    height: auto;
}

.footer {
    width: 80%;
    height: 100px;
    margin-left: auto;
    margin-right: auto;
    background-color: white;
    position: relative;
    top: -15px
}

.btn {
    position: relative;
    top: 20px
}

#heart {
    cursor: pointer
}

.like {
    float: right;
    font-size: 22px;
    position: relative;
    top: 20px;
    color: #333333
}

.fa-gratipay {
    margin-right: 10px;
    transition: 0.5s
}

.fa-gratipay:hover {
    color: #E74C3C
}

.txt3 {
    color: gray;
    position: relative;
    top: 18px;
    font-size: 14px
}

.comments {
    float: right;
    cursor: pointer
}

.fa-clock,
.fa-comments {
    margin-right: 7px
}

.card {
        display: grid;
        grid-template-columns: 300px;
        grid-template-rows: 210px 210px 80px;
        grid-template-areas: "image" "text" "stats";

        border-radius: 18px;
        background: white;
        box-shadow: 5px 5px 15px rgba(0,0,0,0.9);
        font-family: roboto;
        text-align: center;
      }
      .column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
</style>  
</head>
<body class="listbody">

<?php  
 $this->load->view('include/header1.php');
 ?>

<div  class="listing">
     <div class="listing1">
      <form method="post" class="listsearch" enctype="multipart/form-data" action="<?php echo base_url('home/search1'); ?>" name="myform" >
        
          <label for="city">Location</label> 
          <div class="searchbox">
          <input type="text" name="city" id="city" placeholder="Location"> 
          <i class="fas fa-map-marker-alt searchicon"></i>
         </div>
         <label for="Course">Course</label> 
          <div class="searchbox">
           <input type="text" name="course" placeholder="Course" id="course" name="course">
         </div>

         <label for="Branch">Branch</label> 
          <div class="searchbox">
          <input type="text" name="branch" id="city" placeholder="Branch"> 
          <i class="fas fa-book-open searchicon"></i>
         </div>
         <label for="Branch">Scholarship Name</label> 
          <div class="searchbox">
          <input type="text" name="Branch" id="city" placeholder="Branch"> 
          <i class="far fa-clipboard searchicon"></i>
         </div>
         <div  class="listing2">
         <button type="submit" class="searchbtn" name="signup" style=""> Search </button>
     </div>
     </div>
      </form>
          
     <div class="listing3">
     <h1>Search Result</h1>
    

          <div class="row row-cols-1 row-cols-md-3 g-4">

         <?php 
          if (!empty($listdata)) {
        
          
          foreach ($listdata as $list) { ?>
            <!-- <div class="col">
              <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $list->sname; ?></h5>
                    <p class="card-text"><?php echo substr($list->eligibility, 3, 50).'...'; ?></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo substr($list->documents, 3, 50).'...'; ?></li>
                        <li class="list-group-item"><?php echo $list->cname; ?></li>
                        
                    </ul>
                </div>
              </div>
            </div> -->
            <div class="column">
                   <div class="card">
                    <div class="card-text">
                     
                      <h2><?php echo $list->sname; ?></h2>
                      <p><?php echo substr($list->eligibility, 0, 100).'...'; ?></p>
                      <p><?php echo substr($list->documents, 0, 100).'...'; ?></p>
                       <p><?php echo substr($list->cname, 0, 100).'...'; ?></p>
                    </div>
                    <div class="card-stats">
                      
                      
                </div>
              </div>
            </div>
         <?php } 
          }
         ?>
     
 <?php 

 ?>
     
      </div>
    
 </div>
     </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php  include 'include/footer.php';?>
</html>


