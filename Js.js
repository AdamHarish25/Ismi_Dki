$(document).ready(function(){
    $('.delete_student').click(function(e){
      e.preventDefault();
     var studentid = $(this).attr('data-student-id');
     var parent = $(this).parent("td").parent("tr");
     bootbox.dialog({
      title: "<h1 class ='text-lg text-center font-Poppins text-black'>Apakah anda yakin utk menghapus?</h1>",
      message: "Anda tidak akan bisa mengembalikan data tsb jika dihapus.",
    //   title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
      buttons: {
       success: {
        label: "Tidak, saya tidak jadi",
        className: "bg-green-500 text-white py-2 hover:py-3",
        callback: function() {
         $('.bootbox').modal('hide');
         }
         },
         danger: {
          label: "Ya, saya ingin menghapusnya!",
          className: "bg-red-500 text-white py-2 hover:py-3",
          callback: function(bla) {
            $.ajax({
              type: 'GET',
              url: 'Delete.php?id=' + studentid,
             })
             
             .done(function() {
              Swal.fire({
                icon:'success',
                type: 'success',
                title: 'Success',
                text: 'Berhasil menghapus list!'
              }).then(function() {
                window.location.assign('DaftarListAnggota.php');
              })
              bla = setTimeout("location.reload(true);", 5000);
            })


             .fail(function(){
                Swal.fire({
                icon:'error',
                type: 'error',
                title: 'Gagal',
                text: 'Gagal menghapus list.'
                }).then(function() {
                window.location.assign('DaftarListAnggota.php');
                })
                $('.bootbox').modal('hide');
              })
          }
         }
       }
     });
    });
   });