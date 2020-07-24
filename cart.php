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

<li>
<a href="index.php">Home</a>
</li>

<li >
<a href="shop.php">Shop</a>
</li>

<li>
<a href="customer/my_account.php">My account</a>
</li>

<li class="active">
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
            <li>Shopping cart</li>
         
         </ul>
      </div>
      
      <div id="cart" class="col-md-9"> <!-- cart begins -->
      
      
        <div class="box">
        
             <form action="cart.php" method="post" enctype="multipart/form-data">
             
             <h1>Shopping cart</h1>
             
             <p class="text-muted">You have 3 items in your cart</p>
             
             <div class="table-responsive">
             
                    <table class="table">
                    
                       <thead>
                       
                             <tr>
                             
                             <th colspan="2">Product</th>
                            <th>Quntity</th>
                            <th>Unit price</th>
                            <th>Size</th>
                            <th colspan="1">Clear cart</th>
                            <th colspan="2">Subtotal</th>
                                 
                             
                             </tr>
                       
                       </thead>
                       
                       <tbody>
                           <tr>
                           
                                <td>
                                
                                
                                    <img class="img-responsive" src="admin_area/product_images/product3.png" alt="prod 3">
                                
                                </td>
                           <td>
                           
                               <a href="#">Female shirt</a>
                           </td>
                           
                           <td>
                              2
                           </td>
                           
                           <td>
                              R50
                           
                           </td>
                           
                           <td>
                               Large
                           
                           </td>
                           
                           <td>
                               <input type="checkbox" name="remove[]">
                           </td>
                           
                           <td>
                            R100
                           </td>
                           </tr>
                       
                       </tbody>
                       
                       <tbody>
                           <tr>
                           
                                <td>
                                
                                
                                    <img class="img-responsive" src="admin_area/product_images/product1.jpg" alt="prod 3">
                                
                                </td>
                           <td>
                           
                               <a href="#">Courage shirt</a>
                           </td>
                           
                           <td>
                              2
                           </td>
                           
                           <td>
                              R50
                           
                           </td>
                           
                           <td>
                               Large
                           
                           </td>
                           
                           <td>
                               <input type="checkbox" name="remove[]">
                           </td>
                           
                           <td>
                            R100
                           </td>
                           </tr>
                       
                       </tbody>
                    <tbody>
                           <tr>
                           
                                <td>
                                
                                
                                    <img class="img-responsive" src="admin_area/product_images/product5.png" alt="prod 3">
                                
                                </td>
                           <td>
                           
                               <a href="#">vest</a>
                           </td>
                           
                           <td>
                              2
                           </td>
                           
                           <td>
                              R50
                           
                           </td>
                           
                           <td>
                               Large
                           
                           </td>
                           
                           <td>
                               <input type="checkbox" name="remove[]">
                           </td>
                           
                           <td>
                            R100
                           </td>
                           </tr>
                       
                       </tbody>
                    
                    
                    <tfoot>
                    
                       <tr>
                           <th colspan="5">Total</th>
                           <td colspan="2">R300</td>
                       
                       </tr>
                    
                    </tfoot>
                    
                    </table>    
             
             </div>
             
             <div class="box-footer">
             
                 <div class="pull-left">
                 
                      <a href="index.php" class="btn btn-default">
                      <i class="fa fa-chevron-left">  Back to shopping</i>
                      
                      </a>
                 
                 
                 </div>
                 <div class="pull-right">
                 
                      <button type="submit" name="update" value="Update Cart" class="btn btn-default">
                      <i class="fa fa-refresh">  Update cart</i>
                      
                      </button>
                 
                 <a href="checkout.php" class="btn btn-primary">
                 
                 Proceed to checkout <i class="fa fa-chevron-right"></i>
                 
                 </a>
                 
                 </div>
             
             </div>
             
             </form>
        
        </div>
        
        
        <div id="row same-height-row"> <!--Suggested heading prod -->
     <div class="col-md-3 col-sm-6">
        <div class="box same-height headline">
           <h3 class="text-center">You may also like</h3>
        
        </div> 
     
     </div>
 
 
 </div> <!-- suggesed heading prod ends-->
 
 <div class="col-md-3 col-sm-6 center-responsive"> <!-- suggested prods-->
 
     <div class="product same-height">
         <a href="details.php"><img class="img-responsive" src="admin_area/product_images/product2.jpg" alt=""></a>
         <div class="text">
         <h3><a href="details.php">Baby what what</a></h3>
         <p class="price">R35</p>
         </div>
         
     </div>
 </div>
 <div class="col-md-3 col-sm-6 center-responsive">
 
     <div class="product same-height">
         <a href="details.php"><img class="img-responsive" src="admin_area/product_images/product1.jpg" alt=""></a>
         <div class="text">
         <h3><a href="details.php">Courage shirt</a></h3>
         <p class="price">R85</p>
         </div>
         
     </div>
 </div>
<div class="col-md-3 col-sm-6 center-responsive">
 
     <div class="product same-height">
         <a href="details.php"><img class="img-responsive" src="admin_area/product_images/product4.jpg" alt=""></a>
         <div class="text">
         <h3><a href="details.php">Shirt</a></h3>
         <p class="price">R105</p>
         </div>
         
     </div>
 </div>
 
 
 


      </div> <!-- cart ends -->
      
      <div class="col-md-3">
          <div id="order-summary" class="box">
          
              <div class="box-header">
                  <h3>Order Summary</h3>
              
              </div>
              
              <p class="text-muted">Shipping and otheer cost calculated at the end</p>
              
              <div class="table-responsive">
              
                  <table class="table">
                  
                      <tbody>
                          <tr>
                               <td>Order sub-Tot</td>
                               <td>R300</td>
                          
                          
                          </tr>
                          
                          <tr>
                             <td>Shipping</td>
                             <td>RO</td>
                          </tr>
                          
                          <tr>
                             <td>TAx</td>
                             <td>RO</td>
                          </tr>
                                                <tr class="total">
                             <td>Total</td>
                             <td>R300</td>
                          </tr>

                      
                      </tbody>
                  
                  </table>
              
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