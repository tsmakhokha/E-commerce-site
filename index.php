<!DOCTYPE html>
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/bootstrap-337.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
   
   
 <meta name="description" content="">
  
  <title>Home</title>
  
  
  
</head>
<body>
<div id="top"> <!--Top begining -->

<div class="container"> <!-- constainer start-->

<div class="col-md-6 offer">

<a href="#" class="btn btn-success btn-sm">Welcome</a>
<a href="checkout.php"> Shopping cart total Price $300 | 4 items in your cart</a>


</div> 

<div class="col-md-6"> 
<ul class="menu"><!-- top menu start-->

<li>
<a href="customer_register.php">Register</a>
</li>
<li>
<a href="customer/my_account.php">my account</a>

</li>
<li>
<a href="cart.php">Cart</a>

</li>
<li>
<a href="checkout.php">Login</a>
</li>

</ul><!-- end of  top menu-->
</div>
</div> <!-- container end-->

</div> <!--End of top-->

<div id="navbar" class="navbar navbar-default"> <!-- navbar begins-->
<div class="container">

<div class="navbar-header">

<a href="index.php" class="navbar-brand home">

<img src="images/ecom-store-logo.png" alt="store logo" class="hidden-xs">
<img src="images/ecom-store-logo-mobile.png" alt="store logo" class="visible-xs">

</a>

<button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
<span class="sr-only">Toggle Naviation</span>
<i class="fa fa-align-justify"></i>
</button>

<button class="navbar-toggle" data-toggle="collapse" data-target="#search">
<span class="sr-only">Toggle Search</span>
<i class="fa fa-search"></i>
</button>


</div>

<div class="navbar-collapse collapse" id="navigation">

<div class="padding-nav">

<ul class="nav navbar-nav left"> <!-- navbar menu list -->

<li class="active">
<a href="index.php">Home</a>
</li>

<li>
<a href="shop.php">Shop</a>
</li>

<li>
<a href="customer/my_account.php">My account</a>
</li>

<li>
<a href="cart.php">Cart</a>
</li>

<li>
<a href="contact.php">Contact us</a>
</li>

</ul> <!-- End of menu items -->  

</div>
 <a href="cart.php" class="btn navbar-btn btn-primary right">
 <i class="fa fa-shopping-cart"></i>
 <span>4 items in cart</span>
 
 </a>
<div class="navbar-collapse collapse right">

<button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">

<span class="sr-only">Toggle Search</span>
<i class="fa fa-search"></i>
</button> 


</div> 

<div class="collapse clearfix" id="search">

<form method="get" action="results.php" class="navbar-form">
<div class="input-group">

<input type="text" class="form-control" placeholder="Search" name="user_query" required>
<span class="input-group-btn">
<button type="submit" name="search" value="Search" class="btn btn-primary"> <!-- buton for search and display results on results page-->

<i class="fa fa-search"></i>

</button> 
</span>
</div>

</form>

</div>
</div>

 
</div>


</div><!-- navbar ends-->

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
                   
                   <div class="item active">
                       
                       <img src="images/slide-1.png" alt="Slider Image 1">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="images/slider-2.jpg" alt="Slider Image 2">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="images/slider_03.jpg" alt="Slider Image 3">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="images/slider_04.jpg" alt="Slider Image 4">
                       
                   </div>
                   
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
       
          <div class="col-sm-4 col-sm-6 single">
          
              <div class="product"> <!-- class products -->
              
                 <a href="details.php">
                 
                 <img class="img-responsive" src="admin_area/product_images/product1.jpg" alt="fashion 1">
                 <!--img src="admin_area/product_images/product2.jpg" alt="fashion 2"-->
                 
                 </a>
                 
                 <div class="text">
                 
                    <h3>
                        <a href="details.php" >Courage shirt</a>
                    </h3>
                 
                 <p class="price">R40</p>
                 <p class="button">
                          <a href="details.php" class="btn btn-default">View details</a> 
                          <a href="details.php" class="btn btn-primary">
                          
                            <i class="fa fa-shopping-cart">
                            
                                Add to cart
                            
                            </i>
                            
                          </a>
                 </p>
                 </div>
              
              </div> <!-- products ends-->
          
          </div> 
       <div class="col-sm-4 col-sm-6 single">
          
              <div class="product"> <!-- class products -->
              
                 <a href="details.php">
                 
                 <img class="img-responsive" src="admin_area/product_images/product2.jpg" alt="fashion 2">
                 <!--img src="admin_area/product_images/product2.jpg" alt="fashion 2"-->
                 
                 </a>
                 
                 <div class="text">
                 
                    <h3>
                        <a href="details.php" >Baby what what</a>
                    </h3>
                 
                 <p class="price">R70</p>
                 <p class="button">
                          <a href="details.php" class="btn btn-default">View details</a> 
                          <a href="details.php" class="btn btn-primary">
                          
                            <i class="fa fa-shopping-cart">
                            
                                Add to cart
                            
                            </i>
                            
                          </a>
                 </p>
                 </div>
              
              </div> <!-- products ends-->
          
          </div> 
          <div class="col-sm-4 col-sm-6 single">
          
              <div class="product"> <!-- class products -->
              
                 <a href="details.php">
                 
                 <img class="img-responsive" src="admin_area/product_images/product1.jpg" alt="fashion 1">
                 <!--img src="admin_area/product_images/product2.jpg" alt="fashion 2"-->
                 
                 </a>
                 
                 <div class="text">
                 
                    <h3>
                        <a href="details.php" >Courage shirt</a>
                    </h3>
                 
                 <p class="price">R40</p>
                 <p class="button">
                          <a href="details.php" class="btn btn-default">View details</a> 
                          <a href="details.php" class="btn btn-primary">
                          
                            <i class="fa fa-shopping-cart">
                            
                                Add to cart
                            
                            </i>
                            
                          </a>
                 </p>
                 </div>
              
              </div> <!-- products ends-->
          
          </div>
<div class="col-sm-4 col-sm-6 single">
          
              <div class="product"> <!-- class products -->
              
                 <a href="details.php">
                 
                 <img class="img-responsive" src="admin_area/product_images/product2.jpg" alt="fashion 2">
                 <!--img src="admin_area/product_images/product2.jpg" alt="fashion 2"-->
                 
                 </a>
                 
                 <div class="text">
                 
                    <h3>
                        <a href="details.php" >Baby what what</a>
                    </h3>
                 
                 <p class="price">R70</p>
                 <p class="button">
                          <a href="details.php" class="btn btn-default">View details</a> 
                          <a href="details.php" class="btn btn-primary">
                          
                            <i class="fa fa-shopping-cart">
                            
                                Add to cart
                            
                            </i>
                            
                          </a>
                 </p>
                 </div>
              
              </div> <!-- products ends-->
          
          </div>
          <div class="col-sm-4 col-sm-6 single">
          
              <div class="product"> <!-- class products -->
              
                 <a href="details.php">
                 
                 <img class="img-responsive" src="admin_area/product_images/product1.jpg" alt="fashion 1">
                 <!--img src="admin_area/product_images/product2.jpg" alt="fashion 2"-->
                 
                 </a>
                 
                 <div class="text">
                 
                    <h3>
                        <a href="details.php" >Courage shirt</a>
                    </h3>
                 
                 <p class="price">R40</p>
                 <p class="button">
                          <a href="details.php" class="btn btn-default">View details</a> 
                          <a href="details.php" class="btn btn-primary">
                          
                            <i class="fa fa-shopping-cart">
                            
                                Add to cart
                            
                            </i>
                            
                          </a>
                 </p>
                 </div>
              
              </div> <!-- products ends-->
          
          </div> 
       <div class="col-sm-4 col-sm-6 single">
          
              <div class="product"> <!-- class products -->
              
                 <a href="details.php">
                 
                 <img class="img-responsive" src="admin_area/product_images/product2.jpg" alt="fashion 2">
                 <!--img src="admin_area/product_images/product2.jpg" alt="fashion 2"-->
                 
                 </a>
                 
                 <div class="text">
                 
                    <h3>
                        <a href="details.php" >Baby what what</a>
                    </h3>
                 
                 <p class="price">R70</p>
                 <p class="button">
                          <a href="details.php" class="btn btn-default">View details</a> 
                          <a href="details.php" class="btn btn-primary">
                          
                            <i class="fa fa-shopping-cart">
                            
                                Add to cart
                            
                            </i>
                            
                          </a>
                 </p>
                 </div>
              
              </div> <!-- products ends-->
          
          </div> 
          
 
       </div>
   
   
   </div> <!-- content class ends-->

<?php

include("includes/footer.php");

?>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>
</html>