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
                     <h2 style="margin-top:30px;"> Your Preferences</h2>
                     <p class="lead">
                        <?php            
                           $pet=$_POST['pet'];
                           $smoking=$_POST['smoking'];
                           $age=$_POST['age'];
                           $job=$_POST['occupation'];
                           $income=$_POST['income'];
                           
                           
                           echo "Pet(s): " . $pet ." <br/>" ;
                           echo "Smoking: " . $smoking ." <br/>" ;
                           echo "Age treshold: " . $age ." + <br/>" ;
                           echo "Occupation: " . $job ." <br/>" ;
                           echo "Income treshold:  " . $income ." + <br/>" ;                          
                           
                           
                           $username=$_SESSION['user'];                
                           
                           
                           require_once('mysqli_connect.php'); #connection    
                           
                           $query ="SELECT log_in FROM opreferences WHERE log_in='$username' "; 
                           // Check if the user as property already                          
                           
                           $response= mysqli_query($dbc,$query);  
                           
                           if(mysqli_num_rows($response) <= 0){ 
                           
                                 $query = "INSERT INTO  opreferences(`pets`,`smoking`,`age`, `employed`,`income`,`log_in`)
                                 VALUES ('$pet','$smoking','$age','$job','$income','$username');";
                           
                                 if (mysqli_query($dbc, $query)) {
                                     echo '<br/>' . "Preferences added." . '<br/>'   ;
                                 } else {
                                     echo "Error: " . $query . "<br/>" . mysqli_error($dbc);
                                 }
                           
                           } else {
                           
                              $query= "UPDATE opreferences
                              SET pets='$pet', smoking='$smoking', age='$age', employed='$job', income='$income'
                              WHERE log_in='$username' ";               
                           
                                 if (mysqli_query($dbc, $query)) {
                                     echo  '<br/>' . " Preferences updated." . '<br/>' ;
                                 } else {
                                     echo "Error: " . $query . "<br/>" . mysqli_error($dbc);
                                 }
                           
                           }                  
                             mysqli_close($dbc);  
                           ?>                           
                         <h5> (Where yes means allowed.) </h5>

                        <p style="text-align:center;font-size:20px;">
                           <a href="index.php"> Home </a>
                        </p>
                     </p>
                     <!--Possible PHP  -->
                  </div>
                  <div class="col-md-1" >
                  </div>
                  <div class="col-md-6" >
                     <form action="opreferencesadded.php" name="formRegister" id="form" class="form-register" method="POST">
                        <h2> Set Your Preferences</h2>
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
                              <td rowspan="2"> <input type="radio" name="smoking" id="smokingYes" value="yes"> No Preferences <br/>
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
                                 <input type="radio" name="occupation" id="jobNo"  value="no" checked> No Preferences
                              </td>
                           </tr>
                           <tr>
                              <td></td>
                           </tr>
                           <tr style="height:5px;">
                              <td rowspan="4" class="definition">Income range </td>
                              <td rowspan="4">
                                 <input type="radio" name="income" value="0" checked> No Preferecnces<br/>
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