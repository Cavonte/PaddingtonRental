$(document).ready(function() {
  $("#passwordConf").keyup(validate);
});


function validate() {
  var password1 = $("#password").val();
  var password2 = $("#passwordConf").val();

    
 
    if(password1 == password2) {
       $("#validate-status").text(" ✔ Valid ");        
    }
    else {
        $("#validate-status").text(" ✖ Invalid ");  
    }
    
}