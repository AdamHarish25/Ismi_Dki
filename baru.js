$(document).ready(function () {
  $(".delete_student").click(function (e) {
    e.preventDefault();
    var studentid = $(this).attr("data-student-id");
    var parent = $(this).parent("td").parent("tr");
    bootbox.dialog({
      title: "<h1>A custom dialog with buttons and callbacks</h1>",
      message:
        "<p>This dialog has buttons. Each button has it's own callback function.</p>",
      size: "large",
      buttons: {
        cancel: {
          label: "No",
          className: "btn-danger",
          callback: function () {
            $(".bootbox").modal("hide");
          },
        },
        // noclose: {
        //     label: "",
        //     className: 'btn-warning',
        //     callback: function(){
        //         console.log('Custom button clicked');
        //         return false;
        //     }
        // },
        ok: {
          label: "Yes",
          className: "btn-info",
          callback: function () {
            $.ajax({
              type: "GET",
              url: "Delete.php?id=" + studentid,
            })
              .done(function (bla) {
                bootbox.alert(bla);
                bootbox.hideAll();
                // parent.fadeOut('slow');
              })
              .fail(function () {
                bootbox.alert("Error....");
              });
          },
        },
      },
    });
  });
});
