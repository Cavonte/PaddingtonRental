<?php
   session_start();
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
      <!-- navigationBar -->
      <script type="text/javascript" src="js/navBar.js"> </script>
   </head>
   <body>
      <input type="checkbox" id="sidebartoggler" name="" value="">
      <div class="page-wrap">
         <label for="sidebartoggler" class="toggle">☰</label>
         <!--  beginning of page content -->
         <div id="pagecontent">
            <div class="CoverImage FlexEmbed FlexEmbed--3by1">
               <div class="container">
               </div>
            </div>
            <div class="container marketing">
               <hr class="featurette-divider">
               <h2 class="headH">  Properties </h2>
               <p class="headP">These are  all the properties.</p>
               <hr class="featurette-divider">
               <?php 
                  require_once('mysqli_connect.php');
                  $query = "SELECT title,street,city,province,postalcode,price,date_entered,message FROM oproperties";
                  $rep= @mysqli_query($dbc,$query);  

                  $numHouse=3;
                  if(isset($_GET['numHouse'])){
                  $numHouse=$_GET['numHouse'];
                  }
                  
                  for ($i=0; $i <$numHouse ; $i++) {  
                  if ($row = mysqli_fetch_array($rep)) {
                  echo '<div class="row featurette">
                     <div class="col-md-3">
                        <a href="aProperties.php" > 
                           <h2 style="margin-top:0px;"> Title: '  . $row['title'] . '</h2>
                        </a>
                        <a href="aProperties.php" > <img class="featurette-image img-responsive" src="http://placeimg.com/200/200/arch" alt="Generic placeholder image" style="margin-bottom:10px;"></a>
                     </div>
                     <div class="col-md-9">
                        <br/>
                        <br/>
                        <br/> 
                        <p class="lead">';     
                  
                        	echo 											
                  'City: ' . $row['city'] . 	'<br/>' .
                  'Postal code: ' . $row['postalcode'] .	'<br/>' .					
                  'Province: ' . $row['province'] . 	'<br/>' .
                  'Street: ' . $row['street'] . '<br/>' .					
                  'Availability: ' . $row['date_entered'] .	'<br/>' .
                  'Price: ' . $row['price'] .	'<br/>' .					
                  'Message: ' . $row['message'] .	'<br/>'  ;              
                              	
                           
                        echo ' </p>
                        <p><a class="btn btn-default" href="aProperties.php" role="button">View Details &raquo;</a></p>
                     </div>
                  </div>
                  <hr class="featurette-divider">';
                  }                   
                  } #end of the whhile loop
                  
                  mysqli_close($dbc);
                   ?>  
               <?php 
                  $numHouse=$numHouse+5;
                  echo '<p style="text-align:center;"><a class="btn btn-default" href="aProperties.php?numHouse=' . $numHouse . ' " role="button">More &raquo;</a>' ;
                   ?>
                    <a class="btn btn-default" href="index.php" role="button">Home &raquo;</a></p>
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