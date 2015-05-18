	function navbar(i) {
//  tenant's view when logged in

if (i==1) {
		document.write("<div class='sidebar'>",
	   "<ul>",
	      "<li><a href='index.php'>Home</a></li>",

	      "<li>_______</li>",	       
	      "<li><a href='logOut.php'>Log out</a></li>",
	       "<li><a href='aProperties.php'>Properties</a></li>",
	      "<li>_______</li>",		 
	      "<li><a href='tProfile.php'>Profile</a></li>",
	      "<li><a href='tPreferences.php'>Preferences</a></li>",
	      "<li>_______</li>",	 
	      "<li><a href='contact.php'>Contact</a></li>",	      
	    "</ul>",	    
	  "	</div>");
};

if (i==2) {
		//  owner's view
		document.write("<div class='sidebar'>",
	   "<ul>",
	      "<li><a href='index.php'>Home</a></li>",
	      "<li>_______</li>",	       
	      "<li><a href='logOut.php'>Log out</a></li>",
	       "<li><a href='aProperties.php'>Properties</a></li>",
	      "<li>_______</li>",	 
	      "<li><a href='oPreferences.php'>Preferences</a></li>",
	      "<li><a href='oProperties.php'>Your Property</a></li>",
	      "<li><a href='addProperties.php'>Add/Update your Property</a></li>",
	      "<li>_______</li>",	 
	      "<li><a href='contact.php'>Contact</a></li>",
	      "</ul>",	    
	  "	</div>");
};


if (i==3) {
		// general view
	document.write("<div class='sidebar'>",
	   "<ul>",
	      "<li><a href='index.php'>Home</a></li>",
	      "<li>_______</li>",	       
	      "<li><a href='register.php'>Register / Sign in</a></li>",
	       "<li><a href='aProperties.php'>Properties</a></li>",
	      "<li>_______</li>",		 
	      "<li><a href='contact.php'>Contact</a></li>",
	      
	    "</ul>",	    
	  "	</div>");
};
}

function footer(){
	document.write(
		"<footer>",
       	"<p class='pull-right'><a href='#pagecontent'>Back to top</a></p>",
        "<p>&copy; 2014 Paddington Rental, Inc. &middot; <a href='#'>Privacy</a> &middot; <a href='#''>Terms</a></p>",
      	"</footer>");
}


// function addProperty(number,src,href){
// document.write("<hr class='featurette-divider'>",		     
//  			"<div class='row featurette'>",
// 		        "<div class='col-md-3'>",
// 		        	"<a href=",+href ,"><h2 style='margin-top:0px;'>Property",+ number, "</h2></a>",
// 		        " <a href=",+href ,"> <img class='featurette-image img-responsive' src='src' alt='Generic placeholder image' style='margin-bottom:10px;'></a>",
// 		       " </div>",
// 		       " <div class='col-md-9'>",
// 		       "  </br>",
// 		        " </br>",
// 		       "  </br>",
// 		        "<a href=",+href+
// 		       " <p class='lead'> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod",
// 						"tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
// 			"</p>",
// 				"</a>",

// 				"<p><a class='btn btn-default' href=",+href+ "role='button'>View Details ⋙</a></p>",
// 		       " </div>",
// 		    " </div>", 
		      
// 				"<br>",
// 		"<hr class='featurette-divider'>");
// }