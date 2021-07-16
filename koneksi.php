<?php
$servername = "localhost";
$database = "muse";
$database_username = "root";
$password_password = "";

$koneksi = mysqli_connect($servername, $database_username, $password_password, $database);

if (!$koneksi) 
{
	die("Koneksi gagal: " . mysqli_connect_error());
}
?>