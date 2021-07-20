<?php
include "../koneksi.php";

$NamaAnime		= $_POST['Form_Name'];
$NamaAlternatif	= $_POST['Form_Alternatif'];
$Kategori		= $_POST['Form_Kategori'];
$link			= $_POST['Form_Link_Youtube'];

$sql = "INSERT INTO `list_anime` (`No`, `Nama`, `Alternatif`, `Kategori`, `Tanggal`, `Link`) VALUES (NULL, '$NamaAnime', '$NamaAlternatif', '$Kategori', current_timestamp(), '$link')";
$execution = mysqli_query($koneksi, $sql);

if ($execution) {
	header("location:list_anime.php");
}
else {
	echo 'data tidak berhasil';
}
?>