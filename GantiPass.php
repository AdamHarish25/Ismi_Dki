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
        $password = md5($_POST['Password']);
        $password2 = md5($_POST['Password2']);

        // print_r($name.$email.$nohp.$date.$address.$company.$Productname.$ProductType.$Website);
        // exit();
      
    }

    try{
        $sql = "update AdminIsmiDkiLogin set Password=:Password";
        $stmt = $db2->prepare($sql);
      
          // bind parameter ke query
          $params = array(
              ":Password" => $password,
          );
      
          // eksekusi query untuk menyimpan ke database
          $saved = $stmt->execute($params);
          if($saved AND $password == $password2) {
              ?>
                      <script>
                        Swal.fire({
                          type: 'success',
                          title: 'Berhasil mengganti Password',
                          text: 'silahkan lanjutkan untuk login kembali'
                        }).then(function() {
                          window.location.assign('Login.html');
                        })
                      </script>
                  <?php
            } else {
              ?>
              <script>
                Swal.fire({
                  type: 'error',
                  title: 'Gagal',
                  text: 'Silahkan cek kembali password anda dan harus sama.'
                }).then(function() {
                  window.location.assign('gantiPassword.html');
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