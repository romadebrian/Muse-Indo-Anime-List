<?php
session_start();
if($_SESSION){
	header("Location: admin/list_anime.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login">
    <meta name="author" content="Roma Debrian">
    <title>Login Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
	<?php
	if(isset($_POST['login'])){
	include("koneksi.php");
	
	$username	= $_POST['Frm_Username'];
	$password	= sha1($_POST['Frm_Password']);
	$query = mysqli_query($koneksi, "SELECT * FROM akun WHERE Username='$username' AND Password='$password'");
	
	if(mysqli_num_rows($query) == 0)
	{
		echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
	}
	else
	{
		$_SESSION['username'] = $username;
		header("Location: admin/list_anime.php");	
	}
	}
	?>
  <form role="form" action="" method="post">
    <img class="mb-4" src="resource/Logo.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal">MASUK</h1>

    <div class="form-floating">
      <input class="form-control" id="ID_Usermae" name="Frm_Username" placeholder="name@example.com">
      <label for="floatingInput">USERNAME</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="Id_Password" name="Frm_Password" placeholder="Password">
      <label for="floatingPassword">PASSWORD</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Sign in</button>
  </form>
</main>


    
  </body>
</html>