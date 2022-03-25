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
    if (isset($_POST['submitt'])) {
        $name = $_POST['fname'];
        $email = $_POST['email'];
        $nohp = $_POST['phone'];
        $date = $_POST['tanggal'];
        $address = $_POST['Alamat'];
        $company = $_POST['Company'];
        $Productname = $_POST['ProductName'];
        $ProductType = $_POST['ProductType'];
        $Website = $_POST['Website'];
        $idd = $_GET['id'];
        $tgl = date("Y-m-d", strtotime($date));
        // print_r($name.$email.$nohp.$date.$address.$company.$Productname.$ProductType.$Website);
        // exit();
      
    }

    try{
      $sql = "update AnggotaBaruIsmiDki set Nama=:Nama, Email=:Email, NoHp=:NoHp, TglLahir=:TglLahir, Alamat=:Alamat, NamaPerusahaan=:NamaPerusahaan, NamaProduk=:NamaProduk, JenisProduk=:JenisProduk, WebPerusahaan=:WebPerusahaan where ID=:ID";
        $stmt = $db->prepare($sql);
      
          // bind parameter ke query
          $params = array(
              ":Nama" => $name,
              ":Email" => $email,
              ":NoHp" => $nohp,
              ":TglLahir" => $tgl,
              ":Alamat" => $address,
              ":NamaPerusahaan" => $company,
              ":NamaProduk" => $Productname,
              ":JenisProduk" => $ProductType,
              ":WebPerusahaan" => $Website,
              ":ID" => $idd,
          );
      
          // eksekusi query untuk menyimpan ke database
          $saved = $stmt->execute($params);
          if($saved) {
              ?>
                      <script>
                        Swal.fire({
                          type: 'success',
                          title: 'Success',
                          text: 'Berhasil mengganti list!'
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
                  text: 'Maaf, mungkin kamu melewatkan sesuatu kolom yg masih kosong. Dan jika tidak, ini adalah salah kami dan kami akan memperbaikinya.'
                }).then(function() {
                  window.location.assign('DaftarListAnggota.php');
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