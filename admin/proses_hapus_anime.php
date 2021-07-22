<?php
include ("../koneksi.php");

$No = $_GET['No'];
$query = "delete from list_anime where No = '$No'";
$execution = mysqli_query($koneksi, $query);

if ($execution) {
	header("location:list_anime.php");
}
else {
	echo 'data tidak berhasil';
}
?>
