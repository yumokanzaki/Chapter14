<?php

require_once('includes/travel-setup.inc.php');
include('lib/helpers/travel-utilities.inc.php');




if ( isset($_GET['id']) ) {
   $id = $_GET['id'];
}
else {
   $id = 1;
}

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Travel Template</title>
   <?php include 'includes/travel-head.inc.php'; ?>
</head>
<body>

<?php include 'includes/travel-header.inc.php'; ?>
   
<div class="container">  <!-- start main content container -->
   <div class="row">  <!-- start main content row -->
      <div class="col-md-3">  <!-- start left navigation rail column -->
         <?php include 'includes/travel-left-rail.inc.php'; ?>
      </div>  <!-- end left navigation rail --> 
      
      <div class="col-md-9">  <!-- start main content column -->
         <ol class="breadcrumb">
           <li><a href="#">Home</a></li>
           <li><a href="#">Browse</a></li>
           <li><a href="browse-posts.php">Posts</a></li>
           <li class="active"><?php // display title here ?></li>
         </ol>          
    
         <div class="page-header">
            <h1><?php // display title here ?></h1>
         </div>         
         <div class="row">
            <div class="col-md-9">
               <p><?php // display message here ?></p>
               <div class="well well-sm"> 
                  <h4>Images for Post</h4>        
                  <div class="row">
                     <?php // display thumbnails here ?>
                  </div>
               </div>
         
            </div>
            <div class="col-md-3"> 
               <div class="panel panel-default">
                 <div class="panel-heading">Posted By</div>
                 <div class="panel-body">
                   <?php // display user here ?>
                   <hr>
                   <p><em>Posts by this user</em></p>
                     <?php
                        // display other posts by  this user
                     ?>                   
                 </div>
               </div>    

               <div class="panel panel-success">
                 <div class="panel-heading">Social</div>
                 <div class="panel-body">
                   <p><a href="#" class="btn btn-primary btn-sm">Add to Favorites</a></p>
                   <p><a href="#" class="btn btn-success btn-sm">View Favorites</a></p>                  
                 </div>
               </div>    

               
            </div>   <!-- end right column -->                  
         </div>  <!-- end row -->

         
      </div>  <!-- end main content column -->   
   </div>  <!-- end main content row -->
</div>   <!-- end main content container -->
   
<?php include 'includes/travel-footer.inc.php'; ?>   

   
   
 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_travelTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_travelTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_travelTheme/assets/js/holder.js"></script>
</body>
</html>