<?php
session_start();
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


<!-- This code is taken directly from the agency template from bootstrap. The link is  http://startbootstrap.com/template-overviews/agency/ -->
		<div id="pagecontent">   
			<div class="headRegister">
	      		 <div class="container">
		            <div class="row">
		                <div class="col-lg-12 text-center">
		                    <h2 class="section-heading">Contact Us</h2>
		                    <h3 class="section-subheading text-muted">Questions or comments ?</h3>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-lg-12">
		                    <form name="sentMessage" id="contactForm" novalidate>
		                        <div class="row">
		                            <div class="col-md-6">
		                                <div class="form-group">
		                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
		                                    <p class="help-block text-danger"></p>
		                                </div>
		                                <div class="form-group">
		                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
		                                    <p class="help-block text-danger"></p>
		                                </div>
		                                <div class="form-group">
		                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
		                                    <p class="help-block text-danger"></p>
		                                </div>
		                            </div>
		                            <div class="col-md-6">
		                                <div class="form-group">
		                                    <textarea class="form-control" placeholder="Your Message *"  rows="8" cols="30" id="message" required data-validation-required-message="Please enter a message."></textarea>
		                                    <p class="help-block text-danger"></p>
		                                </div>
		                            </div>
		                            <div class="clearfix"></div>
		                            <div class="col-lg-12 text-center">
		                                <div id="success"></div>
		                                <button type="submit" class="btn btn-xl">Send Message</button>
		                            </div>
		                        </div>
		                    </form>
		                </div>
		            </div>
        </div>
   			 </div>


		<div class="container marketing">
		      <script>
		     footer();
		     </script>
		</div>

		</div>
		<!-- end of page content -->

	

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