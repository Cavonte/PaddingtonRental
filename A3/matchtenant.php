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
               <?php 
                  require_once('mysqli_connect.php');
                  require_once('objects.php');
                  $username= $_SESSION['user'];

                  $query= "SELECT  pets,smoking,age,employed,income,log_in FROM opreferences WHERE log_in='$username'  ";
                  
                  if (mysqli_query($dbc,$query)) {
                     $response= mysqli_query($dbc,$query);              
                            } else {                               
                     echo "Error: "  . "<br/>" . mysqli_error($dbc);   
                  }
                  
                  $demand=mysqli_fetch_array($response);           
                                              
                  $queryTenant= "SELECT  * FROM tProfiles" ;
                   
                  if (mysqli_query($dbc,$queryTenant)) {
                     $response= mysqli_query($dbc,$queryTenant);              
                            } else {                               
                     echo "Error: "  . "<br/>" . mysqli_error($dbc);   
                  }
                  
                  $arrayTenant=array();           
                  
                  while ($tenantRow=mysqli_fetch_array($response)) {
                    $arrlength = count($arrayTenant);
                    $arrayTenant[$arrlength]= new tenant($tenantRow['log_in'],$tenantRow['pets'],$tenantRow['smoking'],$tenantRow['age'],$tenantRow['employed'],$tenantRow['income']);
                     }                
                 

                    $highScore=0;
                    $finalUsername='';                
                    
                  
                  foreach ($arrayTenant as $key) {
                                //debug  echo "user : " . $key->getUser() . "  <br/> "   ;
                            if ($key->getScore($demand['pets'],$demand['smoking'],$demand['income'],$demand['age'],$demand['employed'])>=$highScore) {
                               $highScore=$key->getScore($demand['pets'],$demand['smoking'],$demand['income'],$demand['age'],$demand['employed']);
                               $finalUsername=$key->getUser();
                            }
                          } 

                          echo "$finalUsername";
                  
                  
                          $finalQuery= "SELECT  * FROM tProfiles WHERE log_in='$finalUsername' "; 
                  
                          
                  
                          if (mysqli_query($dbc,$finalQuery)) {
                           $finalResponse= mysqli_query($dbc,$finalQuery);
                           $demand=mysqli_fetch_array($finalResponse); 
                  
                           echo '<div class="row featurette">
                          <div class="col-md-3">
                             <a href="aProperties.php" > 
                                <h2 style="margin-top:0px;"> Ideal Tenant </h2>
                                
                             </a>
                             <a href="aProperties.php" > <img class="featurette-image img-responsive" src="img/tenantfound.png" alt="Generic placeholder image" style="margin-bottom:10px;"></a>
                          </div>
                          <div class="col-md-9">
                             <br/>
                             <br/>
                             <br/> 
                             <h3 style="margin-top:0px;">With a score of : ' . $highScore . '</h3>
                             <p class="lead">';     
                       
                                echo                                
                       'Pets: ' . $demand['pets'] .  '<br/>' .
                       'Smoking: ' . $demand['smoking'] . '<br/>' .               
                       'Income: ' . $demand['income'] .   '<br/>' .
                       'Age: ' . $demand['age'] . '<br/>' .               
                       'Employed: ' . $demand['employed'] . '<br/>' ;              
                                      
                                
                             echo ' </p>
                             <p><a class="btn btn-default" href="aProperties.php" role="button">Message Tenant ⋙</a>
                             <a class="btn btn-default" href="index.php" role="button">Home ⋙</a>
                             <a class="btn btn-default" href="opreferences.php" role="button">Preferences ⋙</a></p>
                             <br/>
                          </div>
                       </div>
                       <hr class="featurette-divider">';
                            
                          }     
     
                  ?>
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