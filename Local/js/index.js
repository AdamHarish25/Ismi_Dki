const collapsee = document.querySelector(".navbar-collapse");

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


//   $(document).on("ready", function() {

//     // Put your offset checking in a function
//     function checkOffset() {
//         if ($(".navbar").offset().top > 50) {
//             $(".navbar-fixed-top").addClass("top-nav-collapse");
//         }
//         else {
//             $(".navbar-fixed-top").removeClass("top-nav-collapse");
//         }
//     }

//     // Run it when the page loads
//     checkOffset();

//     // Run function when scrolling
//     $(window).on("scroll" , function() {
//         checkOffset();
//     });
// });

$(".navbar-collapse a").on("click", function () {
  $(collapsee).collapse("hide");
  $("#ToggleButton").find("i").toggleClass("fa-times fa-bars");
});

$(function () {
  $("#tgl-lahir").datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true,
  });
});
function OnOn() {
  $("#ToggleButton").find("i").toggleClass("fa-bars fa-times");
}
