<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'connection.php';
    if (isset($_POST['submit'])) {
        $email = $_POST['Email'];

        $sql = "select * from AdminIsmiDkiLogin where Email = ?";
    }

    try{
        $stmt = $db2->prepare($sql);
        $stmt->execute([$email]);
        $abc = $stmt->fetch(PDO::FETCH_ASSOC);
        if($abc){
            ?>
            <script>
                 Swal.fire({
                     icon: 'success',
                     title: 'Ketemu!',
                     text: 'Keberadaan email anda telah terverifikasi.'
                 }).then(function() {
                     window.location.assign('gantiPassword.html');
                 })
             </script>
         <?php
        } else {
            ?>
            <script>
                   Swal.fire({
                       icon: 'error',
                       title: 'Tidak ketemu',
                       text: 'Keberadaan email anda tidak ditemukan. (disarankan utk registrasi terlebih dulu.)'
                   }).then(function() {
                       window.location.assign('Verifikasi.html');
                   })
               </script>
               
       <?php
        }
    }catch(PDOException $e){
        die("Terjadi Masalah : " . $e->getMessage());
    }

    ?>
</body>
</html>