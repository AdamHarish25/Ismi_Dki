function Warning() {
    Swal.fire({
      title: "Yakin untuk Logout?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Ya",
      cancelButtonText: "Tidak",
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.assign("index.html");
      }
    });
  }
  