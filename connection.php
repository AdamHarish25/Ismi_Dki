<?php
// Create connection
try {    
    //create PDO connection 
    $db = new PDO("mysql:host=217.21.74.189;dbname=u770127161_AnggotaBaru", 'u770127161_IsmiDki', 'IsmiDki54321');
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
?>