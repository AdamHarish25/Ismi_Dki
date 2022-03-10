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
        $password = md5($_POST['Password']);

        $sql = "select * from AdminIsmiDkiLogin where Email = ? and Password = ?";
    }

    try{
        $stmt = $db2->prepare($sql);
        $stmt->execute([$email, $password]);
        $abc = $stmt->fetch(PDO::FETCH_ASSOC);
        if($abc){
            ?>
            <script>
                 Swal.fire({
                     icon: 'success',
                     title: 'Sukses',
                     text: 'Berhasil memasukkan anda menjadi Admin kembali!'
                 }).then(function() {
                     window.location.assign('indexAdmin.html');
                 })
             </script>
         <?php
        } else {
            ?>
            <script>
                   Swal.fire({
                       icon: 'error',
                       title: 'Gagal',
                       text: 'Gagal memasukkan anda menjadi Admin kembali! silahkan periksa kembali Email atau Password anda.'
                   }).then(function() {
                       window.location.assign('Login.html');
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