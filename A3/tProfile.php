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
                     <h2 style="margin-top:30px;"> Your Profile</h2>
                     <p class="lead">
                        <?php  
                           require_once('mysqli_connect.php'); #connection
                           
                           $username=$_SESSION['user'];
                           
                           //'no','yes',25,'yes',0,'banana1'		
                           
                           $query = "SELECT pets,smoking,age,employed,income FROM tprofiles WHERE log_in='$username'"; 
                           			// grab the preferences of the user
                           
                           if (mysqli_query($dbc, $query)) {
                               $response= mysqli_query($dbc,$query);	
                           
                           $demand=mysqli_fetch_array($response);  // array containing the values in the query
                           
                           echo "<br/>" . "Pets: " . $demand['pets'] . "<br/>";
                           echo "Smoking: " . $demand['pets'] . "<br/>";
                           echo "Age treshold: ". $demand['age'] . "<br/>";
                           echo "Occupation: " . $demand['employed'] . "<br/>";
                           echo "Income treshold:  " . $demand['income'] . "<br/>" ;
                           
                           mysqli_close($dbc);	
                           } else {                           		
                               echo "Error: "  . "<br/>" . mysqli_error($dbc);	
                           }
                           ?>
                     </p>

                      <p><a class="btn btn-default" href="index.php" role="button">Home &raquo;</a>
                        <a class="btn btn-default" href="tPreferences.php" role="button">Preferences &raquo;</a>
                        <a class="btn btn-default" href="contact.php" role="button">Contact &raquo;</a>
                        <a class="btn btn-default" href="logOut.php" role="button">Log out &raquo;</a>
                     </p>
                    
                  </div>
                  <div class="col-md-1" >
                  </div>
                  <div class="col-md-6" >
                     <form action="tProfileadded.php" name="formRegister" id="form" class="form-register" method="POST">
                        <h2> Set Your Profile	</h2>
                        <table>
                           <tr>
                              <td rowspan="2" class="definition">Pets </td>
                              <td rowspan="2"> <input type="radio" name="pet" id="petNes" value="no" checked> No <br/>
                                 <input type="radio" name="pet" value="yes" id="petYes"> Yes
                              </td>
                           </tr>
                           <tr>
                              <td></td>
                           </tr>
                           <tr>
                              <td rowspan="2" class="definition">Habits </td>
                              <td rowspan="2"> <input type="radio" name="smoking" id="smokingYes" value="yes"> Smoking <br/>
                                 <input type="radio" name="smoking" id="smokingNo" value="no" checked> Non-smoking
                              </td>
                           </tr>
                           <tr>
                              <td></td>
                           </tr>
                           <tr>
                              <th colspan="2" style="text-align:center;" class="header">Personal Information</th>
                           </tr>
                           <tr style="height:5px;">
                              <td rowspan="4" class="definition">Age range </td>
                              <td rowspan="4">
                                 <input type="radio" name="age" value="20" id="age10" checked> 20 +<br/>
                                 <input type="radio" name="age" value="30" id="age20"> 30 +<br/>
                                 <input type="radio" name="age" value="40" id="age35"> 40 +<br/>
                                 <input type="radio" name="age" value="50" id="age50"> 50 +<br/>	
                              </td>
                           <tr>
                              <td></td>
                           </tr>
                           <tr>
                              <td></td>
                           </tr>
                           <tr>
                              <td></td>
                           </tr>
                           <tr>
                              <td rowspan="2" class="definition">Occupation</td>
                              <td rowspan="2"> <input type="radio" name="occupation"  value="yes"  id="jobYes"> Employed <br/>
                                 <input type="radio" name="occupation" id="jobNo"  value="no" checked> Unemployed
                              </td>
                           </tr>
                           <tr>
                              <td></td>
                           </tr>
                           <tr style="height:5px;">
                              <td rowspan="4" class="definition">Income range </td>
                              <td rowspan="4">
                                 <input type="radio" name="income" value="0" checked> No Income <br/>
                                 <input type="radio" name="income" value="20000"> 20000+<br/>
                                 <input type="radio" name="income" value="30000"> 30000+ <br/>
                                 <input type="radio" name="income" value="45000"> 45000+ <br/>
                                 <input type="radio" name="income" value="60000"> 60000+ <br/> 					
                              </td>
                           <tr>
                              <td></td>
                           </tr>
                           <tr>
                              <td></td>
                           </tr>
                           <tr>
                              <td></td>
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
                  <!-- FOOTER -->
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