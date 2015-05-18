<?php
   session_start();
   if (isset($_SESSION['user'])) {
    $type= $_SESSION['type'];
   }
     
   ?>
<!DOCTYPE php>
<html>
   <head>
      <meta charset="UTF-8">
      <title> Paddington Rental</title>
      <!-- Important : ******* Assignement has been done while testing with chrome. Some functionality do not work with chrome. For the imtended result, please open with chrome. -->
      <!--  bootstrap -->
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/navbar.min.css">
      <link rel="stylesheet" type="text/css" href="css/main.min.css">
      <script type="text/javascript" src="js/navBar.js"> </script>
   </head>
   <body>
      <input type="checkbox" id="sidebartoggler" name="" value="">
      <div class="page-wrap">
         <label for="sidebartoggler" class="toggle">☰</label>
         <div id="pagecontent">
            <div class="jumbotron">
               <div class="container">
                  <h1>Paddington Rental</h1>
                  <h3>Welcome to Paddington Rental !</h3>
                  <p> Your humble companion in the vast world of real estate.</p>
               </div>
            </div>
            <div class="container marketing">
               <?php 
                  if (!isset($_SESSION['user'])) {
                  
                   ?>
               <hr class="featurette-divider">
               <h2 class="headH"> Welcome to Paddington Rental</h2>
               <p class="headP">Paddington is a market matching website. Whether you are a property owner or a tenant looking for a property, we will take care of matching you with an ideal market counterpart. On our website, every owner and tenant gets to pick their preferences so that our algorithm match them with the perfect property/tenant.</p>
               </br>
               <hr class="featurette-divider">
               <div class="row featurette">
                  <div class="col-md-7">
                     <h2 class="featurette-heading">Searching for a property ?</h2>
                     <p class="lead">As a tenant, you will have your own customizable profile and your preferences Those will be greatly useful when will be the time of searching for THE property. </br>  You can register and set your preferences here.</p>
                     <p><a class="btn btn-default" href="register.php" role="button">Register &raquo;</a></p>
                  </div>
                  <div class="col-md-5">
                     <img class="featurette-image img-responsive" src="img/searching.png" alt="Generic placeholder image">
                  </div>
               </div>
               <hr class="featurette-divider">
               <div class="row featurette">
                  <div class="col-md-5">
                     <img class="featurette-image img-responsive" src="img/renting.png" alt="Generic placeholder image">
                  </div>
                  <div class="col-md-7">
                     <h2 class="featurette-heading">Looking to rent your property ? <br></h2>
                     <p class="lead">As an owner, you will have access to a comprehensive property manager. You will also be able to set your criterias for your future tenants. Serious matches guaranteed. </br> Head over to the registration page and find the perfect tenant(s).</p>
                     <p><a class="btn btn-default" href="register.php" role="button">Register &raquo;</a></p>
                  </div>
               </div>
               <hr class="featurette-divider">
               <div class="row featurette">
                  <div class="col-md-7">
                     <h2 class="featurette-heading">Only window shopping ?</h2>
                     <p class="lead">We can still help! Have a look at the properties offered by our loyal customers. It is certain you will find your liking.</p>
                     <p><a class="btn btn-default" href="aProperties.php" role="button">Gallery &raquo;</a></p>
                  </div>
                  <div class="col-md-5">
                     <img class="featurette-image img-responsive"  src="img/browsing.png" alt="Generic placeholder image">
                  </div>
               </div>
               <hr class="featurette-divider">
               <?php } else { 
                  if ($type===1) {
                   # tenant
                  ?>
               <hr class="featurette-divider">
               <div class="row featurette">
                  <div class="col-md-5">
                     <img class="featurette-image img-responsive"  src="img/match.png" alt="Generic placeholder image">
                  </div>
                  <div class="col-md-7">
                    <h2> Hello  <?php echo $_SESSION['user']; ?> ,  </h2>
                     
                     <h3 class="featurette-heading">Search for a match <br/></h3>
                     <a class="btn btn-default" href="matchowner.php" role="button">Match &raquo;</a>
                     <h3 class="featurette-heading">Other Options <br></h3>
                     <p><a class="btn btn-default" href="tPreferences.php" role="button">Preferences &raquo;</a>
                        <a class="btn btn-default" href="tProfile.php" role="button">Profile &raquo;</a>
                        <a class="btn btn-default" href="contact.php" role="button">Contact &raquo;</a>
                        <a class="btn btn-default" href="logOut.php" role="button">Log out &raquo;</a>
                     </p>
                  </div>
               </div>
               <hr class="featurette-divider">
               <?php } else { 
                  // owner
                  ?>
               <hr class="featurette-divider">
               <div class="row featurette">
                  <div class="col-md-5">
                     <img class="featurette-image img-responsive"  src="img/tenantfound.png" alt="Generic placeholder image">
                  </div>
                  <div class="col-md-7">
                    <h2> Hello  <?php echo $_SESSION['user']; ?> ,  </h2>
                     
                     <h3 class="featurette-heading">Search for a match <br/></h3>
                     <a class="btn btn-default" href="matchtenant.php" role="button">Match &raquo;</a>
                     <h3 class="featurette-heading">Other Options <br></h3>
                     <p><a class="btn btn-default" href="oPreferences.php" role="button">Preferences &raquo;</a>
                        <a class="btn btn-default" href="oProperties.php" role="button">Property &raquo;</a>
                        <a class="btn btn-default" href="contact.php" role="button">Contact &raquo;</a>
                        <a class="btn btn-default" href="logOut.php" role="button">Log out &raquo;</a>
                     </p>
                  </div>
               </div>
               <hr class="featurette-divider">
               <?php  } } ?>
               <!-- START THE FEATURETTES -->
               <!-- /END THE FEATURETTES -->
               <!-- FOOTER -->
               <script> 
                  footer();
               </script>
            </div>
            <!-- /.container -->
            <!-- Bootstrap core JavaScript
               ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <!-- // <script src="js/docs.min.js"></script> -->
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <!-- // <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
         </div>
         <div class="sidebar">
            <script >
               navbar(3); // default navigation bar.
            </script>
            <?php     
               if (isset($_SESSION['user'])) {   // if this varible is defined ( there is currently a user logged in)
                 $type= $_SESSION['type'];    
                 echo '<script>';
                 echo 'console.log(' .$type .');'; // debug purposes
                 echo 'navbar(' .$type. ');';
                 echo '</script>';
               }
               ?>
         </div>
      </div>
   </body>
</html>