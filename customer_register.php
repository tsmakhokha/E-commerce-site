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
  
  <title>Contact s</title>
  
  
  
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

<div id="content"> <!-- content begins -->

   <div class="container">
      <div class="col-md-12" >
      
         <ul class="breadcrumb">
            <li>
            <a href="index.php">Home</a>
            
            </li>
            <li>Registration</li>
         
         </ul>
      </div>
            
   <div class="col-md-3">
        
        <?php
        
        include("includes/sidebar.php");
        
        ?>
   
   </div>

<div class="col-md-9">
    <div class="box">
    
       <div class="box-header">
           <center>
               <h2>Register a account</h2>
            
           </center>
           
           <form action="customer_register.php" method="post" enctype="multipart/form-data">
               
               
                  <div class="form-group">
                    <label>Your full names</label>
                    
                    <input type="text" class="form-control" name="c_name" required>
               
               </div>
               
               <div class="form-group">
                    <label>Your Email address</label>
                    
                    <input type="text" class="form-control" name="c_email" required>
               
               </div>
               
               
               <div class="form-group">
                    <label>Password </label>
                    
                    <input type="password" class="form-control" name="c_password" required>
               
               </div>
               <div class="form-group">
                    <label>Country</label>
                    
                    <input type="text" class="form-control" name="c_country" required>
               
               </div>
               <div class="form-group">
                    <label>City</label>
                    
                    <input type="text" class="form-control" name="c_city" required>
               
               </div>
               <div class="form-group">
                    <label>Cell number</label>
                    
                    <input type="text" class="form-control" name="c_numbers" required>
               
               </div>
                           
             <div class="form-group">
                    <label>Physical address</label>
                    
                    <input type="text" class="form-control" name="c_address" required>
               
               </div>
               <div class="form-group">
                    <label>Profile picture</label>
                    
                    <input type="file" class="form-control" name="c_image" required>
               
               </div>
               
               
               <div class="text-center">
               
                   <button type="submit" name="regsister" class="btn btn-primary">
                   <i class="fa fa-user-md">  Register</i></button>
               
               </div>


           
           </form>
       
       </div>
    </div>

</div>

 </div>

</div> <!-- id=content ends here -->

<?php

include("includes/footer.php");

?>



<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>
</html>