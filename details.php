<?php
$active='Shop';
include_once("includes/header.php");


?>


<div id="content">
	<!-- content begins -->
	<div class="container">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a> </li>
				<li>Shop</li>
                <li>
                    <a href="shop.php?p_cat=<?php echo $p_cat_id;?>"><?php echo $p_cat_title; ?></a>
                </li>
                <li><?php echo $pro_title; ?></li>
			</ul>
		</div>
		<div class="col-md-3">
			<!-- sidebar menu --><div class="panel panel-default sidebar-menu"> <!-- sidebar menu-->
   <div class="panel-heading">
      <h3 class="panel-title">Products Category</h3>
   
   </div>

  <div class="panel-body">
  
     <ul class="nav nav-pills nav-stacked category-menu"><!-- category menu -->
         
         <?php
         
         getPCats();
         
         ?>
         
     </ul> <!-- category menu -->
  
  </div>
</div> <!-- sidebar menu ends -->

<div class="panel panel-default sidebar-menu"> <!-- sidebar menu-->
   <div class="panel-heading">
      <h3 class="panel-title">Category</h3>
   
   </div>

  <div class="panel-body">
  
     <ul class="nav nav-pills nav-stacked category-menu"><!-- category menu -->
              <?php
         
         getCats();
         
         ?>
     </ul> <!-- category menu -->
  
  </div>
</div> <!-- sidebar menu ends -->
        </div>
            
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
									<img alt="1st" class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1;?>">
									</center></div>
								<div class="item">
                         <centre><img alt="2nd" class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2;?>"></centre>
                         
                         
                         	   </div>
								<div class="item">
									<center>
									<img alt="3rd" class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3;?>"></center>
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
						<h1 class="text-center"><?php echo $pro_title;?></h1>
						
                        
                        <form action="details.php?add_cart=<?php echo $product_id;?>" class="form-horizontal" method="post">
							
                             <?php
                               add_cart();
                            ?>
                                
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
									<select class="form-control" name="product_size" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Please select a size for the product')">
									<option value="" disabled selected>Select Size</option>
									<option value="X-smal">X-small</option>
									<option value="Small">Small</option>
									<option value="Medium">Medium</option>
									<option value="Large">Large</option>
									<option value="X-large">X-Large</option>
									</select> </div>
							</div>
							<p class="price">R <?php echo $pro_price;?></p>
							<p class="text-center buttons">
							<button class="btn btn-primary i fa fa-shopping-cart">
							Add to cart</button></p>
						</form>
						<!-- product options (size/quantity) ends --></div>
					<div id="thumbs" class="row">
						<div class="col-xs-4">
							<a data-target="#myCarousel" data-slide-to="0" class="thumb" href="#">
							<img alt="" class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1;?>"></a>
						</div>
						<div class="col-xs-4">
							<a data-target="#myCarousel" data-slide-to="1" class="thumb" href="#">
							<img alt="" class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2;?>"></a>
						</div>
						<div class="col-xs-4">
							<a data-target="#myCarousel" data-slide-to="2"  class="thumb" href="#">
							<img alt="" class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3;?>"></a>
						</div>
					</div>
				</div>
				<!-- title ends --></div>
				
				<div class="box" id="details"> <!-- product description-->
				
				<h4>About product</h4>
				<p>
				<?php echo $pro_desc;?>
				</p>
				
				<h4>Size</h4>
				<ul>
				
				    <li>Small</li>
								    <li>Medium</li>
				    <li>Large</li>

				</ul>
				
				<hr>
				
				</div>
 <div id="row same-height-row"> <!--Suggested heading prod -->
     <div class="col-md-3 col-sm-6">
        <div class="box same-height headline">
           <h3 class="text-center">You may also like</h3>
        
        </div> 
     
     </div>
     <?php 
     
     $get_products = "select * from products order by rand() LIMIT 0,2";
     
     $run_products = mysqli_query($con, $get_products);
     
     while ($row_products=mysqli_fetch_array($run_products)){
         
         $pro_id = $row_products['product_id'];
         $pro_title = $row_products['product_title'];
         $pro_img1 = $row_products['product_img1'];
         $pro_price = $row_products['product_price'];
         
         echo "
         
         <div class='col-md-4 col-sm-6 center-responsive'>
             <div class='product same-height'>
               <a href='details.php?pro_id=$pro_id'>
                  <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
               </a>
             <div class='text'>
             
                <h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a></h3>
                
                <p class='price'>
                R $pro_price
                </p>
             </div>
             </div>
         
         </div>
         
         ";
         
     }
     
     ?>
     
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
