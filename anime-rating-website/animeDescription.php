<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Anime rating - opis</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
	<script src="https://kit.fontawesome.com/e6c92d3f6a.js" crossorigin="anonymous"></script>
	
</head>

<body>

	<header>
		<nav class="navbar navbar-expand-md navbar-dark">
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar-collapse justify-content-md-center collapse">
			  <ul class="navbar-nav">
				<li class="nav-item">
				  <a class="nav-link" href="index.php">Strona główna<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="animeList.php">Baza anime</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="ranking.php">Ranking</a>
				</li>
				<li class="nav-item">
					<form class="form-inline my-2 my-md-0 ml-auto">
						<input class="form-control search" type="text" placeholder=" Szukaj" style="font-family:Calibri, FontAwesome"/>
					</form>
				</li>
			  </ul>
			</div>
			
			<?php

				session_start();
				
				if (!isset($_SESSION['logged']))
				{
					echo '<div class="my-2 my-md-0 ml-auto">';
					echo	'<a href="login.php" class="btn btn-light mr-2" >Zaloguj</a>';
					echo	'<a href="register.php" class="btn btn-light mr-2">Zarejestruj</a>';
					echo '</div>';
				}
				else if (isset($_SESSION['logged']))
				{
					echo '<div class="ml-auto">';
					echo	'<ul class="navbar-nav">';
					echo		'<li class="nav-item dropdown">';
							
					echo 			'<a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" style="color: #f1f1f1">'.$_SESSION['email'].'</a>';
							
					echo			'<div class="dropdown-menu" aria-labelledby="dropdown07">';
					echo				'<a class="dropdown-item" href="myList.php">Moja lista</a>';
					echo				'<a class="dropdown-item" href="ratedAnime.php">Ocenione</a>';
					echo				'<a class="dropdown-item" href="logout.php" style="color: red;">Wyloguj</a>';
					echo			'</div>';
					echo		'</li>';
					echo	'</ul>';
					echo '</div>';
				}
				
			?>
		</nav>
	</header>
	
	<main>
		<img class="col-12 px-0" src="img/stripe.jpg"></img>
		<div class="container">
			<section class="py-5">
				<div class="row">
					<div class="col-12">
						<a style="font-size: 12px; color: #000; text-decoration: none; margin-right: 15px;" href="index.php">Strona główna</a>
						<i class="fas fa-chevron-right"></i>
						<text style="font-weight:bold; font-size:12px; margin-left: 15px;">Lorem ipsum dolor sit amet</text>
					</div>
				</div>
			</section>
			<section class="col-xl-8 pb-4">
				<h3 class="my-4" style="font-weight: 700;">LOREM IPSUM DOLOR SIT AMET</h3>

				<p class="mb-4" style="font-size:15px; font-weight: 700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac pretium nunc. Cras blandit non eros in interdum. Donec quis venenatis leo. Vestbulum condimentum</p>
								
				<p style="font-size:13; font-weight: 400;">In cursus nisi a hendrerit aliquam. Duis ipsum enim, pretium at felis quis, elementum tristique augue. Aenean porta dignissim egestas. Suspendisse ut lacinia nunc, quis porta nulla. Mauris sed mi ornare odio dignissim egestas. Vivamus euismod ex eu nisi feugiat lacinia. Morbi vitae ex ut arcu sagittis gravida at facilisis erat. Quisque augue nunc, posuere non ultricies sed, auctor eu orci. Nulla finibus diam sodales sodales tincidunt. Aliquam imperdiet pretium fringilla. Vestibulum eleifend dictum semper. Aenean a ligula aliquet, gravida turpis vel, luctus ipsum. Sed dictum suscipit leo, nec cursus orci malesuada quis. Donec massa risus, hendrerit eget congue ut, accumsan non mi. Maecenas semper sapien vel justo condimentum dapibus.</p>
								
				<p style="font-size:13; font-weight: 400;">Nam ultrices rutrum massa, vitae tempor elit luctus vel. Proin vitae odio a arcu convallis dignissim eu vitae augue. Vivamus posuere ultrices erat, eget malesuada ipsum. Donec id tortor pulvinar, euismod nibh eget, sollicitudin risus. Sed quam nunc, luctus eu feugiat ut, elementum a nibh. Praesent porttitor nunc nulla, sed auctor massa mattis quis. In vestibulum, ex eget ultricies vulputate, ex libero suscipit neque, at tristique nisi eros id odio. Sed a semper sapien. Ut id magna maximus, commodo est vel, condimentum quam. Morbi scelerisque pellentesque nisi, tincidunt egestas mi posuere eu. Suspendisse ac odio sit amet ligula scelerisque dignissim. Praesent non odio non odio vulputate ornare venenatis et tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam erat volutpat.</p>
			</section>
		</div>
	</main>
	
	<footer class="text-center text-lg-start" style="background-color: #e3e3e3;">
	  <div class="text-center p-3 text-light" style="background-color: #202120;">
		© 2020 Copyright:
		<a class="text-light" href="index.php">anime-rating-website.com</a>
	  </div>
	</footer>
	
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity "sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>