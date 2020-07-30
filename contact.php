<?php
$active='Contact';
include("includes/header.php");
?>
<div id="content"> <!-- content begins -->

   <div class="container">
      <div class="col-md-12" >
      
         <ul class="breadcrumb">
            <li>
            <a href="index.php">Home</a>
            
            </li>
            <li>Contact us</li>
         
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
               <h2>Feel free to hit us up</h2>
               <p class="text-muted">For any queries we are available,even if you wanna send a Thank you note</p>
           
           </center>
           
           <form action="contact.php" method="post">
               
               
                  <div class="form-group">
                    <label>Subject</label>
                    
                    <input type="text" class="form-control" name="subject" required>
               
               </div>
               
               <div class="form-group">
                    <label>Name</label>
                    
                    <input type="text" class="form-control" name="name" required>
               
               </div>
               <div class="form-group">
                    <label>Email</label>
                    
                    <input type="text" class="form-control" name="email" required>
               
               </div>
                           
               
                              <div class="form-group">
                    <label>Message</label>
                    
                    <textarea name="message" class="form-control"></textarea>
               
               </div>
               
               <div class="text-center">
               
                   <button type="submit" name="submit" class="btn btn-primary">
                   <i class="fa fa-user-md">  Submit Message</i></button>
               
               </div>


           
           </form>
           
           <?php
           ///sending mail from form
           if(isset($_POST['submit'])){
               
               $sender_subject = $_POST['subject'];
               $sender_name = $_POST['name'];
               $sender_email = $_POST['email'];
               
               $sender_message = $_POST['message'];
               
               $receiver_email = "ujhumor@yahoo.com";
               
               mail($receiver_email,$sender_subject,$sender_name,$sender_email,$sender_message);
               
               ///Auto reply below
               
               $email = $_POST['email'];
               
               $subject = "We welcome you";
               
               $msg = "Thank you getting in touch. we will get back to you asap";
               
               $from = "ujhumor@yahoo.com";
               
               mail ($email, $subject, $msg, $from);
               
               echo "
               <h2 align='center' style='color:#228B22'> Messgae send successfully </h2>
               ";
           }
           
           ?>
       
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