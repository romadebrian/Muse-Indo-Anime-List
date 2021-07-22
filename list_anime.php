<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="List Anime In Youtube Muse Indonesia ">
    <meta name="author" content="Roma Debrian">
	
    <title>List Anime Muse Indonesia Youtube</title>
	
	<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
	
	<link rel="icon" type="image/png" href="resource\favicon.png" />
	
    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">
	<link href="custom_style.css" rel="stylesheet">
	
	<style>
	.table_border_only_header td
	{
		border: 0;
	}
	</style>
  </head>

<body>

<div class="container">

	<?php include ("headers.php");?>

  <header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
      <a href="/index.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
        <!-- <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg> -->
		<img src="resource/Logo.png" alt="Logo" width="35" height="35" class="bi me-2">
        <span class="fs-4">ANIME LIST</span>
      </a>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>
    </div>
  </header>

	<div class="bd-example">
        <nav aria-label="List Anime">
          <ul class="pagination">
			<?php
			$i = '1';
			$a = 'A';
			while ($i <= 26)
			{
				
			?>
            <li class="page-item"><a class="page-link" href="#List_Anime_<?php echo $a; ?>"><?php echo $a; ?></a></li>
		  <?php
		  $i++;
		  $a++;
		  }
		  ?>
          </ul>
        </nav>
	</div>
	
	<?php
	$i = '1';
	$a = 'A';
	while ($i <= 26)
	{
		
	?>
	
	<section id="List_Anime_<?php echo $a; ?>">
	<div class="bd-example">
        <table class="table table_border_only_header">
          <thead>
          <tr>
            <th scope="col"><?php echo $a; ?></th>
          </tr>
          </thead>
          <tbody>
		  <?php
			include ('koneksi.php');
			$sql 		= "SELECT * FROM list_anime WHERE list_anime.Kategori = '$a' ";
			$execute 	= mysqli_query($koneksi, $sql);

			while ($data=mysqli_fetch_array($execute))
			{
		  ?>
          <tr>
            <td><a href="<?php echo $data['Link'] ?>"><b><?php echo $data['Nama'] ?></b></a></td>
          </tr>
		  <?php
			}
		  ?>
          </tbody>
        </table>
	</div>
	</section>
	<?php
		$i++;
		$a++;
	}
	?>
</div>

<footer id="footer" class="text-center">
</footer>

</body>
</html>