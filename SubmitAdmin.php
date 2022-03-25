<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
</head>
<body>
<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    $name = $_POST['Nama'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $address = $_POST['Alamat'];
    $company = $_POST['Perusahaan'];
    $productN = $_POST['Nproduk'];
    $productT = $_POST['Jproduk'];
    $webSite = $_POST['Webb'];
    $tgl = date("Y-m-d", strtotime($date));

   $sql = "insert into AnggotaBaruIsmiDki (Nama, Email, NoHp, TglLahir, Alamat, NamaPerusahaan, NamaProduk, JenisProduk, WebPerusahaan) values (:Nama, :Email, :NoHp, :TglLahir, :Alamat, :NamaPerusahaan, :NamaProduk, :JenisProduk, :WebPerusahaan)";
  
  }
  try{
  $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":Nama" => $name,
        ":Email" => $email,
        ":NoHp" => $phone,
        ":TglLahir" => $tgl,
        ":Alamat" => $address,
        ":NamaPerusahaan" => $company,
        ":NamaProduk" => $productN,
        ":JenisProduk" => $productT,
        ":WebPerusahaan" => $webSite
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);
    if($saved) {
        ?>
                <script>
                  Swal.fire({
                    type: 'success',
                    title: 'Success',
                    text: 'Nama anda telah terdaftar sebagai Anggota Kami!'
                  }).then(function() {
                    window.location.assign('DaftarListAnggota.php');
                  })
                </script>
            <?php
      } else {
        ?>
        <script>
          Swal.fire({
            type: 'error',
            title: 'Gagal',
            text: 'Nama anda gagal kami daftarkan sebagai anggota kami 😔, silahkan daftar ulang lagi.'
          }).then(function() {
            window.location.assign('indexAdmin.html');
          })
        </script>
    <?php
      }
  }catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
  }
  
?>
</body>
</html>
