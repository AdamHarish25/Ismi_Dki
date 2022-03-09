function myFunction() {
   var x = document.getElementById("password");
   var j = document.getElementById("password2");
   
   if (x.type === "password") {
    x.type = "text";
    $("#RevealPass").find("i").toggleClass("fa-eye fa-eye-slash");
  } else {  
    x.type = "password";
    $("#RevealPass").find("i").toggleClass("fa-eye-slash fa-eye");
  }

  if (j.type === "password") {
    j.type = "text";
    $("#RevealPass2").find("i").toggleClass("fa-eye fa-eye-slash");
  } else {  
    j.type = "password";
    $("#RevealPass2").find("i").toggleClass("fa-eye-slash fa-eye");
  }
}


