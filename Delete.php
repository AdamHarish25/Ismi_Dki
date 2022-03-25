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
        $idd = $_GET['id'];
        // print_r($idd);
        // exit();     
    try{
      $sql = "Delete from AnggotaBaruIsmiDki where ID=:ID";
        $stmt = $db->prepare($sql);
      
          // bind parameter ke query
          $params = array(
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
                          text: 'Berhasil menghapus list!'
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
                  text: 'Gagal menghapus list.'
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