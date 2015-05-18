<?php
   session_start();
   if (!isset($_SESSION['user'])) {
      header("Location: index.php");
   }
   ?>
<!DOCTYPE php>
<html>
   <head>
      <meta charset="UTF-8">
      <title> Paddington Rental</title>
      <!--  bootstrap -->	
      <link href="css/bootstrap.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/navbar.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <script type="text/javascript" src="js/navBar.js"> </script>
   </head>
   <body>
      <input type="checkbox" id="sidebartoggler" name="" value="">
      <div class="page-wrap">
         <label for="sidebartoggler" class="toggle">☰</label>
         <!--  beginnig of page content -->
         <div id="pagecontent">
            <div class="CoverImage FlexEmbed FlexEmbed--3by1">
               <div class="container">
               </div>
            </div>
            <div class="container marketing">
               <hr class="featurette-divider">
               <h2 class="headH">Your property </h2>
               <hr class="featurette-divider">               
               <div class="row featurette">
                  <div class="col-md-3">
                     <a href="oProperties.php" >
                        <h2 style="margin-top:0px;">Property</h2>
                     </a>
                     <a href="oProperties.php" > <img class="featurette-image img-responsive" src="http://placeimg.com/200/200/arch" alt="Generic placeholder image" style="margin-bottom:10px;"></a>
                  </div>
                  <div class="col-md-9">
                     <br/>                    
                    
                        <p class="lead">
                         <?php  
                           require_once('mysqli_connect.php'); #connection
                           
                           $username=$_SESSION['user'];
                                                      
                           $query = "SELECT title,street,city,province,postalcode,price,date_entered,message FROM oproperties WHERE log_in='$username'"; 
                           			// grab the preferences of the user
                           
                           if (mysqli_query($dbc, $query)) {
                               $response= mysqli_query($dbc,$query);	
                           
                           $demand=mysqli_fetch_array($response);  // array containing the values in the query
                           
                           echo "<br/>" . "Title: " . $demand['title'] . "<br/>";
                           echo "Street: " . $demand['street'] . "<br/>" ;
                           echo "City: " . $demand['city'] . "<br/>";
                           echo "Postal Code: " . $demand['postalcode'] . "<br/>" ;
                           echo "Province: " . $demand['province'] . "<br/>";
                           echo "Availability: " . $demand['date_entered'] . "<br/>";                           
                           echo "Message: " . $demand['message'] . "<br/>" ;
                           echo "Price: " . $demand['price'] . "<br/>" ;
                           
                           
                           mysqli_close($dbc);	
                           } else {                           		
                               echo "Error: "  . "<br/>" . mysqli_error($dbc);	
                           }
                           ?>

                        </p>
                     
                     <p><a class="btn btn-default" href="addProperties.php" role="button">Update ⋙</a></p>
                  </div>
               </div>
               <br>
               <hr class="featurette-divider">          
               <div >
               <p style="text-align:center;">
                <a class="btn btn-default"  id="addMore" href="addProperties.php" role="button">Update the property ✚ </a>
                <a class="btn btn-default" href="oPreferences.php" role="button">Preferences &raquo;</a>
                        <a class="btn btn-default" href="oProperties.php" role="button">Property &raquo;</a>
                        <a class="btn btn-default" href="contact.php" role="button">Contact &raquo;</a>
                        <a class="btn btn-default" href="logOut.php" role="button">Log out &raquo;</a>
                        <a class="btn btn-default" href="index.php" role="button">Home &raquo;</a>
            </p>         
                 
               </div>
               <hr class="featurette-divider">
               <!-- FOOTER -->
               <script> 
                  footer();
               </script>
            </div>
            <!-- /.container -->
         </div>
         <!-- end of page content  -->
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