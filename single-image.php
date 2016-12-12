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
           <li><a href="browse-images.php">Images</a></li>
           <li class="active"><?php // title here ?></li>
         </ol>          
    
         <div class="page-header">
            <h1><?php echo // title here ?></h1>
         </div>  
      
         <div class="row">
            <div class="col-md-9">

            <img src="images/travel/medium/<?php // path here ?>" alt="<?php // title here ?>" title="<?php // title here ?>" class="img-thumbnail img-responsive bottomspacing">          
            

               <p><?php echo // description here ?></p>

            </div>
            <div class="col-md-3"> 
               <div class="panel panel-default">
                 <div class="panel-heading">Image By</div>
                 <div class="panel-body">
                   <?php // display user name as link ?>
                 </div>
               </div>    

 

               <div class="panel panel-default">
                 <div class="panel-heading">Image Details</div>
                 <div class="panel-body">
                  <?php
                     // display city and country name
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