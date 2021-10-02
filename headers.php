<nav class="py-2 bg-light border-bottom">
	<div class="container d-flex flex-wrap">
		<ul class="nav me-auto">
			<li class="nav-item"><a href="http://127.0.0.1/muse/" class="nav-link link-dark px-2 active" aria-current="page">Home</a></li>
			<li class="nav-item"><a href="http://127.0.0.1/muse/list_anime.php" class="nav-link link-dark px-2">Anime List </a></li>
			<li class="nav-item"><a href="https://www.youtube.com/channel/UCxxnxya_32jcKj4yN1_kD7A" class="nav-link link-dark px-2">Youtube Channel</a></li>
			<li class="nav-item"><a href="https://www.facebook.com/Muse.Communication.ID/?view_public_for=584842802208603" class="nav-link link-dark px-2">Facebook</a></li>
			<li class="nav-item"><a href="#" class="nav-link link-dark px-2">About</a></li>
		</ul>
		<ul class="nav">
			<?php
			@session_start();
			if ($_SESSION) {
				echo "<li class='nav-item'><a href='http://127.0.0.1/muse/logout.php' class='nav-link link-dark px-2'>Logout</a></li>";
			} else {
				echo "<li class='nav-item'><a href='http://127.0.0.1/muse/login.php' class='nav-link link-dark px-2'>Login</a></li>";
			}
			?>
		</ul>
	</div>
</nav>