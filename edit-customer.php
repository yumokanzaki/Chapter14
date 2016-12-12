<?php

require_once('includes/book-setup.inc.php');


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
   if (isset($_GET['id']) ) {
      $id = $_GET['id'];
   }
   else {
      $id = 1;
   }
}   
else {
   // POST request -- retrieve form data and ...
   $id = $_POST['id'];
   
 

   // tell the customer object to update itself

}





?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; 
   charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Book Template</title>

   <link rel="shortcut icon" href="../../assets/ico/favicon.png">   

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_bookTheme/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap theme CSS -->
   <link href="bootstrap3_bookTheme/theme.css" rel="stylesheet">


   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_bookTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_bookTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>

<?php include 'includes/book-header.inc.php'; ?>
   
<div class="container">
   <div class="row">  <!-- start main content row -->

      <div class="col-md-2">  <!-- start left navigation rail column -->
         <?php include 'includes/book-left-nav.inc.php'; ?>
      </div>  <!-- end left navigation rail --> 

      <div class="col-md-10">  <!-- start main content column -->
        
         <!-- book panel  -->
         <div class="panel panel-danger spaceabove">           
           <div class="panel-heading"><h4>Edit Customer</h4></div>

<form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group spaceabove">
    <label for="id" class="col-md-3 control-label">ID</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="id" value="<?php // display id here ?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="firstname" class="col-md-3 control-label">First Name</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="firstname" value="<?php // display first name here ?>" >
    </div>
  </div>  
  <div class="form-group">
    <label for="lastname" class="col-md-3 control-label">Last Name</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="lastname" value="<?php // display last name here ?>"  >
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-md-3 control-label">Email</label>
    <div class="col-md-8">
      <input type="email" class="form-control" name="email" value="<?php // display email here ?>"  >
    </div>
  </div>  
  <div class="form-group">
    <label for="university" class="col-md-3 control-label">University</label>
    <div class="col-md-8">
      <input type="text" class="form-control" name="university" value="<?php // display university here ?>"  >
    </div>
  </div>   
  <div class="form-group">
    <label for="lastname" class="col-md-3 control-label">Address</label>
    <div class="col-md-8">
      <input type="text" class="form-control" name="address" value="<?php // display address here?>"  >
    </div>
  </div>  
  <div class="form-group">
    <label for="city" class="col-md-3 control-label">City</label>
    <div class="col-md-3">
      <input type="text" class="form-control" name="city" value="<?php // display city here?>"  >
    </div>
  </div>   
  <div class="form-group">
    <label for="region" class="col-md-3 control-label">Region</label>
    <div class="col-md-2">
      <input type="text" class="form-control" name="region" value="<?php // display region here ?>"  >
    </div>
  </div>  
  <div class="form-group">
    <label for="postal" class="col-md-3 control-label">Postal</label>
    <div class="col-md-2">
      <input type="text" class="form-control" name="postal" value="<?php // display postal here ?>"  >
    </div>
  </div>   
  <div class="form-group">
    <label for="country" class="col-md-3 control-label">Country</label>
    <div class="col-md-3">
      <input type="text" class="form-control" name="country" value="<?php // display country here ?>"  >
    </div>
  </div>  
    <div class="form-group">
    <label for="phone" class="col-md-3 control-label">Phone</label>
    <div class="col-md-3">
      <input type="tel" class="form-control" name="phone" value="<?php // display phone here ?>"  >
    </div>
  </div>  

  <div class="form-group">
    <div class="col-md-offset-3 col-md-9">
      <button type="submit" class="btn btn-default">Save Changes</button>
    </div>
  </div>
</form>           
           
           
         </div>           
      </div>
      


      </div>  <!-- end main content column -->
   </div>  <!-- end main content row -->
</div>   <!-- end container -->
   


   
   
 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_bookTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_bookTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_bookTheme/assets/js/holder.js"></script>
</body>
</html>