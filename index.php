<?php
$active='Home';
include("includes/header.php");
?>

<div class="container" id="slider"><!-- container Begin -->
       
       <div class="col-md-12"><!-- col-md-12 Begin -->
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
               
               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </ol><!-- carousel-indicators Finish -->
               
               <div class="carousel-inner"><!-- carousel-inner Begin -->
                   
                   <?php
                   $get_slides="select * from slider LIMIT 0, 1";
                   $run_slides= mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                   $slide_name = $row_slides['slide_name'];
 $slide_image = $row_slides['slide_image'];

echo "
 <div class='item active'>
 <img src='images/$slide_image'>
 
 </div>

";                                    
 }
   $get_slides="select * from slider LIMIT 1,3";
                   $run_slides= mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                   $slide_name = $row_slides['slide_name'];
 $slide_image = $row_slides['slide_image'];

echo "
 <div class='item'>
 <img src='images/$slide_image'>
 
 </div>

";                                    
 }
                 

 ?>
                   
                   
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a><!-- left carousel-control Finish -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a><!-- left carousel-control Finish -->
               
           </div><!-- carousel slide Finish -->
           
       </div><!-- col-md-12 Finish -->
       
   </div><!-- container Finish -->
   
   
   <div id="advantages"> <!-- advantage div -->
   
   <div class="container">
   
   <div class="same-height-row">
   
   <div class="col-sm-4">
   <div class="box same-height">
  
   <div class="icon">
   
   <i class="fa fa-heart"></i> 
   
   </div>
   
   <h3><a href="#">We love customers</a></h3>
   <p>We have the best fashion for your satisfaction. We have the best fashion for your satisfaction. We have the best fashion for your satisfaction. We have the best fashion for your satisfaction</p>
   </div>
   
   
   </div>
   
   <div class="col-sm-4"> <!-- copy paste div class="col sm 4" from above-->
   <div class="box same-height">
   
   <div class="icon">
   
   <i class="fa fa-tag"></i> 
   
   </div>
   
   <h3><a href="#">Best prices</a></h3>
   <p>We beat any price anywhere, try us. We beat any price anywhere, try us. We beat any price anywhere, try us. We beat any price anywhere, try us. We beat any price anywhere, try us</p>
   </div>
    
   
   </div> <!-- end of copy paste -->

   <div class="col-sm-4"> <!-- copy paste div class="col sm 4" from above-->

   <div class="box same-height">
   
   <div class="icon">
   
   <i class="fa fa-thumbs-up"></i> 
   
   </div>
   
   <h3><a href="#">100% trused products</a></h3>
   <p>Bringing you the best fashion at a tap of your screen. Bringing you the best fashion at a tap of your screen. Bringing you the best fashion at a tap of your screen</p>
   </div>
   
   
   </div> <!-- end of copy paste -->

   
   </div>
   
   </div>
   
   </div> <!-- advantages div ends -->
   
   <div id="hot"><!-- products statement start-->
   
      <div class="box">
      
          <div class="container"> <!-- container starts -->
          
              <div class="col-md-12">
              
                 <h2>
                    View our latest fashion
                 </h2>
              
              </div>
          
          </div> <!-- container ends -->
      
      </div>
   
   </div> <!-- products statement end-->
   
   
   <div id="content" class="container"> <!-- content class-->
   
       <div class="row">
       
           <?php
           
           getPro();
           
           ?>
           
       </div>

   
   </div> <!-- content class ends-->

<?php

include("includes/footer.php");

?>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>
</html>