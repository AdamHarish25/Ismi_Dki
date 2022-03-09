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

//   $(function () {
//     $("#tgl-lahir").datepicker({
//       calendarWeeks: true,
//       todayHighlight: true,
//       autoclose: true,
//     });
//   });
  function OnOn() {
   $('#ToggleButton').find("i").toggleClass("fa-bars fa-times");
  }

  // var tables = document.getElementsByTagName('table');
  // for (let i = 0; i < tables.length; i++) {
  //   resizeableGrid(tables[i]);
  // }

  // function resizeableGrid(table) {
  //   var row = table.getElementsByTagName('tr')[0],
  //   cols = row ? row.children : undefined;
  //   if (!cols) return;

  //   table.style.overflow = 'hidden';
    
  //   var tableHeight = table.offsetHeight;

  //   for (let i = 0; i < cols.length; i++) {
  //     var div = createDiv(tableHeight);
  //     cols[i].appendChild(div);
  //     cols[i].style.position = 'relative';
  //     setListeners(div);
  //   }

  //   function setListeners(div){
  //     var pageX,curCol,nxtCol,curColWidth,nxtColWidth;

  //     div.addEventListener('mousedown', function(e) {
  //       curCol = e.target.parentElement;
  //       nxtCol = curCol.nextElementSibling;
  //       pageX = e.pageX;

  //       var padding = paddingDiff(curCol);

  //       curColWidth = curCol.offsetWidth - padding;
  //       if (nxtCol) 
  //         nxtColWidth = nxtCol.offsetWidth - padding;
  //     });

  //     div.addEventListener('mouseover',function(e) {
  //       e.target.style.borderRight = '2px'
  //     })
  //   }
  // }