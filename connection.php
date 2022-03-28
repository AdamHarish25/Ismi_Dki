<?php
// Create connection
try {    
    //create PDO connection 
    $db = new PDO("mysql:host=217.21.74.189;dbname=u770127161_AnggotaBaru", 'u770127161_IsmiDki', 'IsmiDki54321');
    $db2 = new PDO("mysql:host=217.21.74.189;dbname=u770127161_AdminIsmiDki", 'u770127161_AdminIDki', 'Adminismidki54321');
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
?>

<?php 

    $con = mysqli_connect('217.21.74.189','u770127161_AdminIDki', 'Adminismidki54321', 'u770127161_AdminIsmiDki');

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
       }
    // print_r($con);
    // exit();
?>