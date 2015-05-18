<?php
   session_start();
   if (!isset($_SESSION['user'])) {
      header("Location: index.php");
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title> Paddington Rental</title>
      <!-- <link rel="stylesheet" type="text/css" href="css/styleSheet.css"> -->
      <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"></script>
      <!--  bootstrap -->
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/navbar.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <!-- Custom styles for this template -->
      <!-- <link href="jumbotron.css" rel="stylesheet"> -->
      <script type="text/javascript" src="js/navBar.js"> </script>
      <script type="text/javascript" src="js/validation.js"> </script>
   </head>
   <body style="background-color:rgba(75, 124, 223, 0.2);">
      <input type="checkbox" id="sidebartoggler" name="" value="">
      <div class="page-wrap">
         <label for="sidebartoggler" class="toggle">☰</label>
         <!--  beginnig of page content -->
         <div id="pagecontent">
            <div class="CoverImage FlexEmbed FlexEmbed--3by1">
               <div class="container">
               </div>
            </div>
            <div id="addProperty" class="lead">
               <!-- <h2>Property added</h2> -->
               <?php             
                  $city=$_POST['city'];
                  $province=$_POST['province'];
                  $pCode=$_POST['postalCode'];
                  $price=$_POST['price'];
                  $date=$_POST['date'];
                  $message=$_POST['message'];                  
                 
                  echo "City: " . $city ." <br/>" ;
                  echo "Province: " . $province ." <br/>" ;
                  echo "Postal code: " . $pCode ." <br/>" ;
                  echo "Price: " . $price ." <br/>" ;
                  echo "Date: " . $date ." <br/>" ;
                  echo "Message: " . $message ." <br/>" ;
                  
                  $username=$_SESSION['user'];                 
                  
                  require_once('mysqli_connect.php'); #connection    
                  
                  $query ="SELECT log_in FROM tpreferences WHERE log_in='$username' "; 
                  // Check if the user as property already                          
                  
                  $response= mysqli_query($dbc,$query);  
                  
                  if(mysqli_num_rows($response) <= 0){ //number of response is 0, so no user with these credentials
                  
                        $query = "INSERT INTO  tpreferences(`city`,`province`,`postalcode`,`price`,`date_entered`,`message`, `log_in`)
                        VALUES ('$city','$province','$pCode','$price','$date','$message','$username');";
                  
                        if (mysqli_query($dbc, $query)) {
                            echo "Preferences set." . '<br/>'   ;
                        } else {
                            echo "Error: " . $query . "<br/>" . mysqli_error($dbc);
                        }
                  
                  } else {
                  
                     $query= "UPDATE tpreferences
                     SET city='$city',province='$province', postalcode='$pCode', price='$price', date_entered='$date',message='$message'
                     WHERE log_in='$username' ";               
                  
                        if (mysqli_query($dbc, $query)) {
                            echo "Preferences Updated." . '<br/>' ;
                        } else {
                            echo "Error: " . $query . "<br/>" . mysqli_error($dbc);
                        }
                  
                  }  
                  mysqli_close($dbc);  
                  ?> 
                  <br/>
                  <br/>
                   <p>   <a class="btn btn-default" href="index.php" role="button">Home &raquo;</a>
                        <a class="btn btn-default" href="tProfile.php" role="button">Profile &raquo;</a>
                        <a class="btn btn-default" href="contact.php" role="button">Contact &raquo;</a>
                        <a class="btn btn-default" href="logOut.php" role="button">Log out &raquo;</a>
                     </p>
                  <br/>
                  <br/>

               </div>
            <div class="container marketing" style="max-height:50px;">
            <p style="text-align:center;font-size:20px;">
            
            </p>
               <script> 
                  footer();
               </script>      
            </div>
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