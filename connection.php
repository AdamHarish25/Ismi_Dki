<?php 

$mysqli = new mysqli('localhost', 'u770127161_IsmiDki', '', 'u770127161_AnggotaBaru');
if($mysqli -> connect_errno) {
    die("Connection Failed: " . $mysqli->connect_error);
}

?>