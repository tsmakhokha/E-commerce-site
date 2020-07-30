<?php
$active='Account';
include("includes/header.php");
?>
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
</div> 

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
       if(!isset($_SESSION['customer_email'])){
           include("customer/customer_login.php");
           
       }
       else{
           include("payment_options.php");
       }
       
       
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

