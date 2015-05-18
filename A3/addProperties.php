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
            <form action="addedProperties.php" id="addProperty" class="form-register"  style="margin-bottom:60px;" method="post" enctype="multipart/form-data">
               <h2 style="text-align:center;">Add/Update a property.</h2>
               <table>
                  <tr>
                     <th colspan="2" style="text-align:left;" class="header">General</th>
                  </tr>
                  <tr>
                     <td> Ad title</td>
                     <td> <input   class="form-control" type="text" name="title" id="titleAd" required></td>
                  </tr>
                  <tr>
                     <td>Street Adress</td>
                     <td> <input   class="form-control" type="text" name="street" id="street" required  pattern="[^0-9(\)\*\+\!\#\%\^\&\=\+\_\-\?\:\;\*\(\)\/\<\>\=\@\[\]\\\^\_\{\}\|\~]+"  title="Only (-) and letters allowed"></td>
                  </tr>
                  <tr>
                     <td>City</td>
                     <td> <input  class="form-control" type="text" name="city" id="city"  pattern="[^0-9(\)\*\+\!\#\%\^\&\=\+\_\-\?\:\;\*\(\)\/\<\>\=\@\[\]\\\^\_\{\}\|\~]+" required  title="Only (-) and letters allowed"></td>
                  </tr>
                  <tr>
                     <td>Province</td>
                     <td> <input  class="form-control" type="text" name="province" id="province"  pattern="[^0-9(\)\*\+\!\#\%\^\&\=\+\_\-\?\:\;\*\(\)\/\<\>\=\@\[\]\\\^\_\{\}\|\~]+" required  title="Only (-) and letters allowed"></td>
                  </tr>
                  <tr>
                     <td>Postal Code</td>
                     <td> <input  class="form-control" type="text" name="postalcode" id="postalCode"   pattern="[A-Z|a-z]{1}[\d]{1}[A-Z|a-z]{1}\s?[\d]{1}[A-Z|a-z]{1}[\d]{1}" required   title="Accepted format is  : x1x 1x1 or x1x1x1" ></td>
                  </tr>
                  <tr>
                     <td></td>
                  </tr>
                  <tr>
                     <th colspan="2" style="text-align:left;" class="header">Accessibility</th>
                  </tr>
                  <tr>
                     <td>Price</td>
                     <td> <input  class="form-control" type="number" name="price" id="price" min="1" required   title="Digits only."></td>
                  </tr>
                  <tr>
                     <td>Available from </td>
                     <td><input  class="form-control" type="date" name="date" min="2015-03-15" required></td>
                  </tr>
                  <tr>
                     <th colspan="2" style="text-align:left;" class="header">Personal message</th>
                  </tr>
                  <tr>
                     <td ><textarea   class="form-control" id="textProperty" colspan="4" name="message" rows="10" cols="30" required onkeypress="return messageLength()" title="Maximum 300 words">Additional preferences...
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


            <br/>
            <p style="text-align:center;"><a class="btn btn-default" href="oPreferences.php" role="button">Preferences &raquo;</a>
                        <a class="btn btn-default" href="oProperties.php" role="button">Property &raquo;</a>
                        <a class="btn btn-default" href="contact.php" role="button">Contact &raquo;</a>
                        <a class="btn btn-default" href="logOut.php" role="button">Log out &raquo;</a>
                        <a class="btn btn-default" href="index.php" role="button">Home &raquo;</a>
            </p>
             <br/>

            <div class="container marketing" style="max-height:50px;">
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
                 echo 'navbar(' .$type. ');';
                 echo '</script>';
               }
               ?>
         </div>
      </div>
   </body>
</html>