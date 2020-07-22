<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1, minimum-scale=1" name="viewport">
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
<link href="styles/style.css" rel="stylesheet">
<link href="styles/bootstrap-337.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<meta content="" name="description">
<title>Product Details</title>
</head>

<body>

<div id="top">
	<!--Top begining -->
	<div class="container">
		<!-- constainer start-->
		<div class="col-md-6 offer">
			<a class="btn btn-success btn-sm" href="#">Welcome</a>
			<a href="checkout.php">Shopping cart total Price $300 | 4 items in your 
			cart</a> </div>
		<div class="col-md-6">
			<ul class="menu">
				<!-- top menu start-->
				<li><a href="customer_register.php">Register</a> </li>
				<li><a href="checkout.php">my account</a> </li>
				<li><a href="cart.php">Cart</a> </li>
				<li><a href="checkout.php">Login</a> </li>
			</ul>
			<!-- end of  top menu--></div>
	</div>
	<!-- container end--></div>
<!--End of top-->
<div id="navbar" class="navbar navbar-default">
	<!-- navbar begins-->
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand home" href="index.php">
			<img alt="store logo" class="hidden-xs" src="images/ecom-store-logo.png">
			<img alt="store logo" class="visible-xs" src="images/ecom-store-logo-mobile.png">
			</a>
			<button class="navbar-toggle" data-target="#navigation" data-toggle="collapse">
			<span class="sr-only">Toggle Naviation</span>
			<i class="fa fa-align-justify"></i></button>
			<button class="navbar-toggle" data-target="#search" data-toggle="collapse">
			<span class="sr-only">Toggle Search</span> <i class="fa fa-search">
			</i></button></div>
		<div id="navigation" class="navbar-collapse collapse">
			<div class="padding-nav">
				<ul class="nav navbar-nav left">
					<!-- navbar menu list -->
					<li><a href="index.php">Home</a> </li>
					<li class="active"><a href="shop.php">Shop</a> </li>
					<li><a href="checkout.php">My account</a> </li>
					<li><a href="cart.php">Cart</a> </li>
					<li><a href="contact.php">Contact us</a> </li>
				</ul>
				<!-- End of menu items --></div>
			<a class="btn navbar-btn btn-primary right" href="cart.php">
			<i class="fa fa-shopping-cart"></i><span>4 items in cart</span> </a>
			<div class="navbar-collapse collapse right">
				<button class="btn btn-primary navbar-btn" data-target="#search" data-toggle="collapse" type="button">
				<span class="sr-only">Toggle Search</span>
				<i class="fa fa-search"></i></button></div>
			<div id="search" class="collapse clearfix">
				<form action="results.php" class="navbar-form" method="get">
					<div class="input-group">
						<input class="form-control" name="user_query" placeholder="Search" required="" type="text">
						<span class="input-group-btn">
						<button class="btn btn-primary" name="search" type="submit" value="Search">
						<!-- buton for search and display results on results page-->
						<i class="fa fa-search"></i></button></span></div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- navbar ends-->
<div id="content">
	<!-- content begins -->
	<div class="container">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> </li>
				<li>Shop</li>
			</ul>
		</div>
		<div class="col-md-3">
			<!-- sidebar menu --><?php
        
        include("includes/sidebar.php");
        
        ?></div>
		<!-- sidebar menu end -->
		<div class="col-md-9">
			<div id="productMain" class="row">
				<div class="col-sm-6">
					<div id="mainImage">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li class="active" data-slide-to="0" data-target="myCarousel">
								</li>
								<li data-slide-to="1" data-target="myCarousel">
								</li>
								<li data-slide-to="2" data-target="myCarousel">
								</li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<center>
									<img alt="1st" class="img-responsive" src="admin_area/product_images/product3.png">
									</center></div>
								<div class="item">
                         <centre><img alt="2nd" class="img-responsive" src="admin_area/product_images/product5.png"></centre>
                         
                         
                         	   </div>
								<div class="item">
									<center>
									<img alt="3rd" class="img-responsive" src="admin_area/product_images/product6.jpg"></center>
								</div>
							</div>
							<a class="left carousel-control" data-slide="prev" href="#myCarousel">
							<!-- slide to next image-->
							<span class="glyphicon glyphicon-chevron-left">
							</span><span class="sr-only">Previous</span> </a>
							<a class="right carousel-control" data-slide="next" href="#myCarousel">
							<span class="glyphicon glyphicon-chevron-right">
							</span><span class="sr-only">Previous</span> </a>
							<!-- ends here--></div>
					</div>
				</div>
				<div class="col-sm-6">
					<!-- Product title -->
					<div class="box">
						<h1 class="text-center">Baby what what</h1>
						<form action="details.php" class="form-horizontal" method="post">
							<!-- product options (size/quantity -->
							<div class="form-group">
								<label class="col-md-5 control-label" for="">Product 
								Quantity</label>
								<div class="col-md-7">
									<select id="" class="form-control" name="product_qty">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									</select> </div>
							</div>
							<div class="form-group">
								<label class="col-md-5 control-label">Product Size</label>
								<div class="col-md-7">
									<select class="form-control" name="product_size">
									<option>Select Size</option>
									<option>X-small</option>
									<option>Small</option>
									<option>Medium</option>
									<option>Large</option>
									<option>X-Large</option>
									</select> </div>
							</div>
							<p class="price">R50</p>
							<p class="text-center buttons">
							<button class="btn btn-primary i fa fa-shopping-cart">
							Add to cart</button></p>
						</form>
						<!-- product options (size/quantity) ends --></div>
					<div id="thumbs" class="row">
						<div class="col-xs-4">
							<a class="thumb" href="#">
							<img alt="" class="img-responsive" src="admin_area/product_images/product5.png"></a>
						</div>
						<div class="col-xs-4">
							<a class="thumb" href="#">
							<img alt="" class="img-responsive" src="admin_area/product_images/product6.jpg"></a>
						</div>
						<div class="col-xs-4">
							<a class="thumb" href="#">
							<img alt="" class="img-responsive" src="admin_area/product_images/product3.png"></a>
						</div>
					</div>
				</div>
				<!-- title ends --></div>
				
				<div class="box" id="details"> <!-- product description-->
				
				<h4>About product</h4>
				<p>
				This is a stylish shirt. This is a stylish shirt. This is a stylish shirt. This is a stylish shirt. This is a stylish shirt. This is a stylish shirt. This is a stylish shirt. This is a stylish shirt.
				</p>
				
				<h4>Size</h4>
				<ul>
				
				    <li>Small</li>
								    <li>Medium</li>
				    <li>Large</li>

				</ul>
				
				<hr>
				
				</div>
 <div id="row same-height-row"> <!--Suggested prod -->
     <div class="col-md-3 col-sm-6">
        <div class="box same-height headline">
           <h3 class="text-center">You may also like</h3>
        
        </div> 
     
     </div>
 
 
 </div> <!-- suggesed prod ends-->
 
 <div class="col-md-3 col-sm-6 center-responsive">
 
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

				
		</div>
	</div>
</div><!-- id=content ends here -->

<?php

include("includes/footer.php");

?>
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

</body>

</html>
