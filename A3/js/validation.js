$(document).ready(function() {
  $("#passwordConf").keyup(validate);
});


function validate() {
  var password1 = $("#password").val();
  var password2 = $("#passwordConf").val();

    
 
    if(password1 == password2) {
       $("#validate-status").text("valid");        
    }
    else {
        $("#validate-status").text("invalid");  
    }
    
}



function validateForm() {
    var password1 = $("#password").val();
    var password2 = $("#passwordConf").val();


    if (password1 == password2 ) {
     console.log("hello");
   
    }
    else {
    	alert("The passwords have to be identical.");
        return false;
    }
}

function messageLength(){
	var text = $("#textProperty").val();

	var a= text.split(" ");

	if(a.length>300)
		return false;
}

