$(document).ready(function () {
  // $.validator.addMethod(
  //   "date",
  //   function (value, element, param) {
  //     return value != 0 && value <= 31 && value == parseInt(value, 10);
  //   },
  //   "Please enter a valid date!"
  // );
  // $.validator.addMethod(
  //   "month",
  //   function (value, element, param) {
  //     return value != 0 && value <= 12 && value == parseInt(value, 10);
  //   },
  //   "Please enter a valid month!"
  // );
  // $.validator.addMethod(
  //   "year",
  //   function (value, element, param) {
  //     return value != 0 && value >= 1900 && value == parseInt(value, 10);
  //   },
  //   "Please enter a valid year not less than 1900!"
  // );
  // $.validator.addMethod(
  //   "username",
  //   function (value, element, param) {
  //     var nameRegex = /^[a-zA-Z0-9]+$/;
  //     return value.match(nameRegex);
  //   },
  //   "Only a-z, A-Z, 0-9 characters are allowed"
  // );

  var val = {
    // Specify validation rules
    rules: {
      fname: "required",
      email: {
        required: true,
        email: true,
      },

      date: {
        required: true,
      },

      Alamat: {
        required: true,
      },

      Company: {
        required: true,
      },

      ProductName: {
        required: true,
      },

      ProductType: {
        required: true,
      },

      Website: {
        required: true,
        url: true,
      },

      phone: {
        required: true,
        minlength: 20,
        maxlength: 20,
        digits: true,
      },
      // date: {
      //   date: true,
      //   required: true,
      //   minlength: 2,
      //   maxlength: 2,
      //   digits: true,
      // },
      month: {
        month: true,
        required: true,
        minlength: 2,
        maxlength: 2,
        digits: true,
      },
      year: {
        year: true,
        required: true,
        minlength: 4,
        maxlength: 4,
        digits: true,
      },
      username: {
        username: true,
        required: true,
        minlength: 4,
        maxlength: 16,
      },
      password: {
        required: true,
        minlength: 8,
        maxlength: 16,
      },
    },
    // Specify validation error messages
    messages: {
      fname: "Kolom nama tidak boleh kosong!",
      email: {
        required: "Kolom Email harus diisi",
        email: "Email mu ada yang salah, mohon di cek kembali.",
      },
      Alamat: {
        required: "Kolom alamat harus diisi!",
      },
      Company: {
        required: "Kolom Nama perusahaan harus diisi!",
      },
      ProductName: {
        required: "Kolom Nama produk harus diisi!",
      },
      ProductType: {
        required: "Kolom Jenis Produk harus diisi!",
      },
      Website: {
        required: "Kolom Website harus diisi!",
        url: "Kolom ini harus diisi dengan link website yang masih aktif!",
      },
      phone: {
        required: "Kolom NoHp tidak boleh kosong",
        minlength: "Mohon utk mengisi nomor yang benar dan masih aktif",
        maxlength: "Mohon utk mengisi nomor yang benar dan masih aktif",
        digits: "Kolom ini hanya boleh diisi dengan nomor saja",
      },
      // date: {
      //   required: "Date is required",
      //   minlength: "Date should be a 2 digit number, e.i., 01 or 20",
      //   maxlength: "Date should be a 2 digit number, e.i., 01 or 20",
      //   digits: "Date should be a number",
      // },
      month: {
        required: "Kolom tanggalLahir tidak boleh Kosong",
        minlength:
          "Kolom tanggal lahir hanya boleh diisi 2 digit saja contoh : 12/01/25",
        maxlength:
          "Kolom tanggal lahir hanya boleh diisi 2 digit saja contoh : 12/01/25",
        digits: "Kolom ini hanya boleh diisi dengan nomor saja",
      },
      year: {
        required: "Kolom tanggalLahir tidak boleh Kosong",
        minlength:
          "Kolom tanggal lahir hanya boleh diisi 2 digit saja contoh : 12/01/25",
        maxlength:
          "Kolom tanggal lahir hanya boleh diisi 2 digit saja contoh : 12/01/25",
        digits: "Kolom ini hanya boleh diisi dengan nomor saja",
      },
      username: {
        required: "Username harus diisi",
        minlength: "Username harus diisi setidak nya 4 karakter",
        maxlength: "Username tidak boleh melebihi 16 karakter",
      },
      password: {
        required: "Password harus diisi",
        minlength: "Password harus diisi setidak nya 8 karakter",
        maxlength: "Password tidak boleh melebihi 16 karakter",
      },
    },
  };
  $("#myForm")
    .multiStepForm({
      // defaultStep:0,
      beforeSubmit: function (form, submit) {
        console.log("called before submiting the form");
        console.log(form);
        console.log(submit);
      },
      validations: val,
    })
    .navigateTo(0);
});

$(function () {
  $("#TglLahir").datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true,
  });
});

function directWarning() {
  Swal.fire({
    title: "Batal edit?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya",
    cancelButtonText: "Tidak",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.assign("DaftarListAnggota.php");
    }
  });
}

function directWarning2() {
  Swal.fire({
    title: "Batal edit?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya",
    cancelButtonText: "Tidak",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.assign("indexAdmin.html");
    }
  });
}

// function removeSpaces() {
//   var inputs = document.getElementsByTagName("input");
//   inputs.replace(/^\s+|\s+$/gm, "");

//   return inputs;
// }
