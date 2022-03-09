function myFunction() {
    x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
      $("#RevealPass").find("i").toggleClass("fa-eye fa-eye-slash");
    } else {  
      x.type = "password";
      $("#RevealPass").find("i").toggleClass("fa-eye-slash fa-eye");
    }
    
    // const a = document.getElementById("RevealPass");
    // a.onclick = (e) => {
    //     e.preventDefault();
    //     console.log("clicked")
    // }

  }