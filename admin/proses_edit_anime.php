<?php
include "../koneksi.php";

$NamaAnime		= $_POST['Form_Name'];
$NamaAlternatif	= $_POST['Form_Alternatif'];
$Kategori		= $_POST['Form_Kategori'];
$Link			= $_POST['Form_Link_Youtube'];

$sql = "UPDATE `list_anime` SET `Nama` = '$NamaAnime', `Alternatif` = '$NamaAlternatif', `Kategori` = '$Kategori', `Link` = '$Link' WHERE `list_anime`.`No` = 13";
$execution = mysqli_query($koneksi, $sql);

if ($execution) {
	header("location:list_anime.php");
}
else {
	echo 'data tidak berhasil';
}
?>