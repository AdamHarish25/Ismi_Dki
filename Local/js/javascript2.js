document.addEventListener("DOMContentLoaded", function () {
    el_autohide = document.querySelector(".autohide");

    // add padding-top to body (if necessary)
    navbar_height = document.querySelector(".navbar").offsetHeight;
    document.body.style.paddingTop = navbar_height + "px";
    if (el_autohide) {
      var last_scroll_top = 0;
      window.addEventListener("scroll", function () {
        let scroll_top = window.scrollY;
        if (scroll_top < last_scroll_top) {
          el_autohide.classList.remove("scrolled-down");
          el_autohide.classList.add("scrolled-up");
        } else {
          el_autohide.classList.remove("scrolled-up");
          el_autohide.classList.add("scrolled-down");
        }
        last_scroll_top = scroll_top;
      });
      // window.addEventListener
    }
    // if
  });

  $(".navbar-collapse a").click(function () {
    $(".navbar-collapse").collapse("hide");
    $('#ToggleButton').find("i").toggleClass("fa-times fa-bars");
  });

  function show() {
    $('#collapsedButton').find("i").toggleClass("fa-angle-down fa-angle-up");
  }

  function OnOn() {
   $('#ToggleButton').find("i").toggleClass("fa-bars fa-times");
  }