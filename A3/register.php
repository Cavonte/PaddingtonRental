<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	<title> Paddington Rental</title>	

	<!-- jquery -->
 	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"></script>
	<!--  bootstrap -->	
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">


	<!-- form validation  -->
    <script type="text/javascript" src="js/validation.js"> </script>
   <!-- navigation bar -->
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
			<div>
				
				<!-- form -->
			
					<div class="col-md-2" >	
					</div>
					<div class="col-md-3" >	
						<div class="signIn">
						<h2>Already a customer ?</h2>
						<h3>Sign in here.</h3>		
										
							<form  action="signedin.php" name"formsignin" class="form-signin" method="post">
						        
						        <label for="inputEmail" class="sr-only">User Name</label>
						        <input type="text"  name="username" class="form-control" placeholder="User name" required autofocus>
						        
						        <label for="inputPassword" class="sr-only">Password</label>
						        <input type="password"  name="password" class="form-control" placeholder="Password" required>
						        <br/>
						        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
						      </form>		
						</div>						
					</div>
					<div class="col-md-1" >	
					</div>

				


				<div class="col-md-1" >	
				</div>
				<div class="col-md-5" >
						<form action="registered.php" name="formRegister" id="form" class="form-register" onsubmit="return validateForm();" style="margin-bottom:60px;" method="post">
						<h2> Create a profile.</h2>					
						<table>
							
							<tr> 
							<td rowspan="2" class="definition">Registering as a </td>
							<td rowspan="2"> <input type="radio" name="type" id="type" checked="checked" value="OWNER" required > Property Owner <br/>
							 <input type="radio" value="TENANT" name="type" id="typeT"> Tenant</td>
							</tr>
							
							<tr></tr>
							<tr> 
							<th colspan="2" style="text-align:center;" class="header">Contact Information </th>					
							</tr>

							<tr> 
							<td>First name</td>
							<td> <input   class="form-control" type="text" name="nameF" pattern="[^0-9(\)\*\+\!\#\%\^\&\=\+\_\-\?\:\;\*\(\)\/\<\>\=\@\[\]\\\^\_\{\}\|\~]+" id="firstName" title="Only (-) and letters allowed" required></td>
							</tr>
							
							<tr> 
							<td>Last name</td>
							<td> <input   class="form-control" type="text" name="nameL" id="lastName"  pattern="[^0-9(\)\*\+\!\#\%\^\&\=\+\_\-\?\:\;\*\(\)\/\<\>\=\@\[\]\\\^\_\{\}\|\~]+" required  title="Only (-) and letters allowed"></td>
							</tr>

							<tr> 
							<td>Phone Number</td>
							<td> <input    class="form-control" type="text" name="phone" id="phoneNumber" required pattern="\({1}(\d{3})\){1}(\d{3})-{1}(\d{4})" title="(xxx)xxx-xxxx"></td>
							</tr>

							<tr> 
							<td>Email Adress</td>
							<td> <input   class="form-control" type="email" name="email" id="email" pattern="^([\w\.\-_]+)?\w+@[\w-_]+(\.\w+){1,}$" required title="abcd.efg@mail.com"></td>
							</tr>

							<tr> 
							<th colspan="2" style="text-align:center;" class="header">Identification Information </th>					
							</tr>

							<tr> 
							<td>Log in</td>
							<td> <input   class="form-control" type="text" name="logIn" id="logIn" pattern="^[a-z0-9]{6,}$" title="Must contain at least 6 characters that are alphanumerical." required></td>
							</tr>

							<tr> 
							<td>Password</td>
							<td> <input   class="form-control" type="password" name="pass" id="password" pattern="^[a-z0-9]{6,}$" required title="Must contain at least 6 characters that are alphanumerical."></td>
							</tr>

							<tr> 
							<td>Password confirmation</td>
							<td> <input    class="form-control" type="password" name="passC" id="passwordConf" pattern="^[a-z0-9]{6,}$"   required title="Must contain at least 6 characters that are alphanumerical." ></td>
							</tr>
							<tr>
							<td><p id="validate-status"></p></td>
							</tr>
							<tr></tr>
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