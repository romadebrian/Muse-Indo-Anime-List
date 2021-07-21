<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="List Anime in Youtube Muse Indonesia ">
    <meta name="author" content="Roma Debrian">
	
    <title>List Anime Muse Indonesia Youtube</title>
	
	<link href="..\bootstrap\css\bootstrap.min.css" rel="stylesheet">
	
	<link rel="icon" type="image/png" href="..\resource\favicon.png" />
	
    <!-- Custom styles for this template -->
    <link href="..\headers.css" rel="stylesheet">
	<link href="..\custom_style.css" rel="stylesheet">
	
	<style>
	.table_border_only_header td
	{
		border: 0;
	}
	

</style>
  </head>

<body>

<div class="container">

	<?php 
	include ("../headers.php");
	include ("form_input_anime.php");
	?>

	<header class="py-3 mb-4 border-bottom">
		<div class="container d-flex flex-wrap justify-content-center">
			<a href="/index.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
			<img src="../resource/Logo.png" alt="Logo" width="35" height="35" class="bi me-2">
			<span class="fs-4">ADMIN ANIME LIST</span>
			</a>
		</div>
	</header>
	
	<div id="List_Anime">
		<div class="container">
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form_input_anime"> Input Anime </button>
		<?php include ("form_edit_anime.php"); ?>
		<div>
			<table class="table table-bordered">
			<thead class="table-dark text-center">
				<td><b> No </td>
				<td><b> Nama Anime </td>
				<td><b> Alternatif </td>
				<td width="80"><b> Kategori </td>
				<td width="100"><b> Tanggal </td>
				<td width="50"><b> Link </td>
				<td colspan="2" ><b> Aksi </td>
			</thead>
		
			<?php
			include ('../koneksi.php');
			$tampil="SELECT * FROM `list_anime` ";
			$hasil=mysqli_query($koneksi, $tampil);

			while ($data=mysqli_fetch_array($hasil))
			{
				echo "<td class='align-middle text-center'> $data[No] </td>";
				echo "<td class='text-xs-left'> $data[Nama] </td>";
				echo "<td> $data[Alternatif] </td>";
				echo "<td class='align-middle text-center'> $data[Kategori] </td>";
				echo "<td class='align-middle text-center' width='85'> $data[Tanggal] </td>";
				echo "<td class='align-middle'> <p class='overflow'><a href='$data[Link]'> $data[Link] </a></p></td>";
				echo "<td width='50' class='align-middle text-center'><img src='../resource/Edit.png' alt='Edit' width='30' height='30' data-bs-toggle='modal' data-bs-target='#form_Edit_anime$data[No]'></td>";
				echo "<td width='50' class='align-middle text-center'><a href='Hapus_Murid.php?kode=$data[No]'> <img src='../resource/Delete.png' alt='Delete' width='30' height='30'> </a></td>
			</TR>";
			}
					
			?>

			</table>
		</div>
		<div class="clearfix margin-bawah"></div>
		</div>
	</div>
</div>

<footer id="footer" class="text-center">
</footer>

<script src="..\bootstrap\js\bootstrap.bundle.min.js"></script>


</body>
</html>