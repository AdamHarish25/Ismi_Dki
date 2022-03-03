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
      $message = "Success";
      echo "<script type='text/javascript'>alert('$message');</script>";
      } else {
      $message = "Failed";
      echo "<script type='text/javascript'>alert('$message');</script>";
      }
    print_r($saved);
    exit();
  }catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
  }
  
?>