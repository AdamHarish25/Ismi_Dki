<?php
$servername = "localhost";
$database = "u770127161_AnggotaBaru";
$username = "u770127161_IsmiDki";
$password = "IsmiDki54321";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>