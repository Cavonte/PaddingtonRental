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
            <div>
               <!-- form -->
               <div  class="row" >
                  <div class="col-md-1" >
                  </div>
                  <div class="col-md-4" >
                     <h2 style="margin-top:30px;"> Your Current Preferences</h2>                     
                     <?php 
                     require_once('mysqli_connect.php'); #connection
                           
                           $username=$_SESSION['user'];
                                                      
                           $query = "SELECT city,province,postalcode,price,date_entered,message FROM tpreferences WHERE log_in='$username'"; 
                           			// grab the preferences of the user
                           
                           if (mysqli_query($dbc, $query)) {
                               $response= mysqli_query($dbc,$query);	
                           
                           $demand=mysqli_fetch_array($response);  // array containing the values in the query
                           echo "City: " . $demand['city'] . '<br/>';
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


                      <br/>
                      <p> <a class="btn btn-default" href="index.php" role="button">Home &raquo;</a>
                        <a class="btn btn-default" href="tProfile.php" role="button">Profile &raquo;</a>
                        <a class="btn btn-default" href="contact.php" role="button">Contact &raquo;</a>
                        <a class="btn btn-default" href="logOut.php" role="button">Log out &raquo;</a>
                     </p>

                  </div>
                  <div class="col-md-1" >
                  </div>
                  <div class="col-md-6" >
                     <form action="tPreferencesadded.php" class="form-register" method="POST" id="form">
                        <h2> Set Your Preferences</h2>
                        <table>                           
                           <tr>
                              <td>City</td>
                              <td> <input   class="form-control" type="text" name="city" id="city"  pattern="[^0-9(\)\*\+\!\#\%\^\&\=\+\_\-\?\:\;\*\(\)\/\<\>\=\@\[\]\\\^\_\{\}\|\~]+" required  title="Only (-) and letters allowed"></td>
                           </tr>
                           <tr>
                              <td>Province</td>
                              <td> <input   class="form-control" type="text" name="province" id="province"  pattern="[^0-9(\)\*\+\!\#\%\^\&\=\+\_\-\?\:\;\*\(\)\/\<\>\=\@\[\]\\\^\_\{\}\|\~]+" required  title="Only (-) and letters allowed"></td>
                           </tr>
                           <tr>
                              <td>Postal Code</td>
                              <td> <input  class="form-control" type="text" name="postalCode" id="postalCode"   pattern="[A-Z|a-z]{1}[\d]{1}[A-Z|a-z]{1}\s?[\d]{1}[A-Z|a-z]{1}[\d]{1}" required   title="Accepted format is  : x1x 1x1 or x1x1x1" ></td>
                           </tr>
                           <tr>
                              <td>Price</td>
                              <td> <input  class="form-control" type="number" name="price" id="price" min="1" required   title="Digits only."></td>
                           </tr>
                           <tr>
                              <td>Available from </td>
                              <td><input class="form-control" type="date" name="date" min="2015-03-15" required></td>
                           </tr>
                           <tr>
                              <td></td>
                           </tr>
                           <tr>
                              <td ><textarea class="form-control" id="textProperty" name="message" rows="10" cols="30" required onkeypress="return messageLength()" title="Maximum 300 words">Additional preferences...
                                 </textarea>
                              </td>
                           </tr>
                           <tr>
                              <td></td>
                           </tr>
                           <tr>
                              <td style="text-align:center;" class="last"> <input type="submit" class="btn btn-lg btn-success" id="submit"></td>
                              <td style="text-align:center;" class="last"> <input type="reset" class="btn btn-lg btn-default" id="reset"></td>
                           </tr>
                        </table>
                     </form>
                  </div>
                  <div class="container marketing">
                     <script> 
                        footer();
                     </script>
                  </div>
               </div>
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