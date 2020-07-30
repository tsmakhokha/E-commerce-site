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
               
                   <button type="submit" name="register" class="btn btn-primary">
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

<?php

if(isset($_POST['register'])){
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_password = $_POST['c_password'];
    
    $c_country = $_POST['c_country'];
    
    $c_city = $_POST['c_city'];
    
    $c_numbers = $_POST['c_numbers'];
    
    $c_address = $_POST['c_address'];
    
    
    $c_image = $_FILES['c_image']['name'];
    
    
    $c_image_tmp = $_FILES['c_image']['temp_name'];

    $c_ip = getRealIpUser();
    
     move_uploaded_file($c_image_tmp,"customer/images/$c_image");
    
    $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_password','$c_country','$c_city','$c_numbers','$c_address','$c_image','$c_ip')";
    
    $run_customer = mysqli_query($con, $insert_customer);
    
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($con, $sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_cart>0){     ///if user has items in cart, after registering, go to checkout
        
        $_SESSION['customer_email'] = $c_email;
        
        echo "
        <script> alert('you are registered')  </script>
        ";
        
        echo "
        <script> window.open('checkout.php','_self')  </script>
        ";
    }
    else    ///if no items in cart, redirect to homepage
    {
        $_SESSION['customer_email'] = $c_email;
        
        echo "
        <script> alert('you are registered')  </script>
        ";
        
        echo "
        <script> window.open('index.php','_self')  </script>
        ";
    }

}


?>