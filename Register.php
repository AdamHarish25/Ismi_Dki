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
        $name = $_POST['Username'];
        $password = $_POST['Password'];
        $repassword = $_POST['Password2'];
        $email = $_POST['Email'];
        $nohp = $_POST['Telp'];


        $sql = "insert into AdminIsmiDkiLogin (Nama, Password, Email, NoHp) values (:Nama, :Password, :Email, :NoHp)";
    }

    try {
        $stmt = $db2->prepare($sql);

        // bind parameter ke query
        $params = array(
            ":Nama" => $name,
            ":Password" => $password,
            ":Password" => $repassword,
            ":Email" => $email,
            ":NoHp" => $nohp,
        );

        // eksekusi query untuk menyimpan ke database
        $saved = $stmt->execute($params);
        if (!$saved AND $password !== $repassword) {
    ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: 'Gagal mendaftarkan anda menjadi Admin, cek kembali Password anda.'
                }).then(function() {
                    window.location.assign('Registration.html');
                })
            </script>
        <?php
        } else {
        ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses',
                    text: 'Berhasil mendaftarkan anda menjadi Admin!'
                }).then(function() {
                    window.location.assign('index.html');
                })
            </script>
    <?php
        }
    } catch (PDOException $e) {
        //show error
        die("Terjadi masalah: " . $e->getMessage());
    }


    ?>
</body>

</html>