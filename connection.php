<?php 

$mysqli = new mysqli('localhost', 'u770127161_IsmiDki', 'IsmiDki54321', 'u770127161_AnggotaBaru');
if($mysqli -> connect_errno) {
    die("Connection Failed: " . $mysqli->connect_error);
}

?>