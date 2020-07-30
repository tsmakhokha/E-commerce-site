<?php 
$active='Shop';
include_once('includes/header.php');

?>


<div id="content"> <!-- content begins -->

   <div class="container">
      <div class="col-md-12" >
      
         <ul class="breadcrumb">
            <li>
            <a href="index.php">Home</a>
            
            </li>
            <li>Shop</li>
         
         </ul>
      </div>
   <div class="col-md-3">
        
       <div class="panel panel-default sidebar-menu"> <!-- sidebar menu-->
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
   
       <?php 
       
       if(!isset($_GET['p_cat'])){
           if(!isset($_GET['cat'])){
           
           
       
       echo "
       
       <div class='box'>
           <h1>Shop</h1>
           <p>
           I love shopping. I love shopping. I love shopping. I love shopping. I love shopping. I love shopping. I love shopping. I love shopping. I love shopping. I love shopping. I love shopping. I love shopping.
           </p>
       
       </div>
       
       ";
           }

                  }

       ?>
           <div class="row">
             
               <?php 
       
       if(!isset($_GET['p_cat'])){
           if(!isset($_GET['cat'])){
           
           $per_page=4;
               
               if(isset($_GET['page'])){
                   
                   $page = $_GET['page'];
                   
               }else {
                       
                       $page=1;
                   
               }
                   $start_from = ($page-1) * $per_page;
                   
                   $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                   
                   $run_products = mysqli_query($con,$get_products);
                   
                   while ($row_products=mysqli_fetch_array($run_products)){
                       
                         $pro_id=$row_products['product_id'];
        
        $pro_title=$row_products['product_title'];
        
        $pro_price=$row_products['product_price'];
                
        $pro_img1=$row_products['product_img1'];
                       
                       
                       echo "
                       <div class='col-md-4 col-sm-6 center-responsive'>
                       
                       <div class='product'>
                           
                       <a href='details.php?pro_id=$pro_id'>
                       <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                       
                       </a>
                       
                       <div class='text'>
                       <h3>
                           <a href='details.php?pro_id=$pro_id'> $pro_title</a>
                       </h3>
                       
                       <p class='price'>
                          R $pro_price
                       </p>
                       
                       <p class='buttons'>
                           <a class='btn btn-default' href='details.php?pro_id=$pro_id'>View Details</a>
                           
                           <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                           <i class='fa fa-shopping-cart'></i>  Add to cart</a>
                       </p>
                       
                       </div>
                       </div>
                       
                       </div>
                       ";
                       
                   }
               
       
           
           ?>
               
           </div>
           
           <center>
              <ul class="pagination">
               
                  
                  <?php 
       
               $query = "select * from products";
               
               
               $results = mysqli_query($con,$query);
               
               $total_records=mysqli_num_rows($results);
               
               $total_pages=ceil($total_records/$per_page);
               
               echo "
               <li>
               
                    <a href='shop.php?page=1'>".'First page'."</a>
               
               </li>
               
               ";
               
               for ($i=1; $i<=$total_pages;$i++){
                 
               
               echo "
               <li>
               
                    <a href='shop.php?page=".$i."'>".$i."</a>
               
               </li>
               
               ";
                   
                   
               };
               echo "
               <li>
               
                    <a href='shop.php?page=$total_pages'>".'Last Page'."</a>
               
               </li>
               
               ";
               
           }
       }
               ?>
                  
                  
              </ul>
           
           </center>
       
       
       
         <?php
           
            getpcatpro();
       getcatpro();
            
           ?>
       
      
       
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