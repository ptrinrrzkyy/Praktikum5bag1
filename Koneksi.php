<?php
$userName = "root";
$password = "";
$database = "db_akademik1";
$con = new mysqli("localhost", $userName, $password, $database);

// Periksa koneksi
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>