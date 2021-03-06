<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Anime rating - strona główna</title>
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
				<li class="nav-item active">
				  <a class="nav-link" href="index.php">Strona główna<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="animeList.php">Baza anime</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="ranking.php">Ranking</a>
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
		<div class="container">
			<section>
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
					<div class="carousel-item active">
					   <a href="animeDescription.php"><img class="d-block w-100" src="img/slide1.jpg" alt="First slide"></a>
					</div>
					<div class="carousel-item">
					   <a href="animeDescription.php"><img class="d-block w-100" src="img/slide2.jpg" alt="Second slide"></a>
					</div>
					<div class="carousel-item">
					  <a href="animeDescription.php"><img class="d-block w-100" src="img/slide3.jpg" alt="Third slide"></a>
					</div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</section>
			<section>
				<div class="row mt-5">
				
					<img class="col-md-2 col-sm-3 col-xs-4 col-5 ml-0 pl-0" src="img/listaimg.png">
					
					<div class="col-md-10 col-sm-9 col-sx-8 col-7 mx-auto my-auto">
						<h1 class="h4" style="font-weight: 700;">BAZA ANIME</h1>

						<p style="font-size:15px; font-weight: 700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec consectetur purus, eget sodales orci. Nam vel malesuada neque. Nam pulvinar pharentra pellentresque. Pellentresque a leo non elit viverra cursus in sit amet arcu.</p>
							
						<p style="font-size:15; font-weight: 400;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec consectetur purus, eget sodales orci. Nam vel malesuada neque. Nam pulvinar pharentra pellentresque. Pellentresque a leo non elit viverra cursus in sit amet arcu.</p>
					</div>
				</div>
			
			
			</section>
			<section class="mt-5">
				<h1 class="h4 text-center" style="font-weight: bold;">RANKING</h1>
				<p class="text-center mt-4" style="margin-left: 18vw; margin-right: 16vw; font-weight: 500;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec consectetur purus, eget sodales orci. Nam vel malesuada neque. Nam pulvinar pharentra pellentresque. Pellentresque a leo non elit viverra cursus in sit amet arcu.</p>
				
				<div class="container mt-5">
					<div class="row no-gutters">
						<figure class="col-sm-9 col-md-5 col-lg-3 offset-md-1 mx-auto">
							<img src="img/slide1.jpg" class="img-fluid">
							<figcaption><p class="mt-4" style="font-size:14px; font-weight: 800;">LOREM IPSUM DOLOR SIT AMET,</p><p style="font-size:14px; font-weight: 500;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec consectetur purus, eget sodales orci. Nam vel malesuada neque. Nam pulvinar pharentra pellentresque. Pellentresque a leo non elit viverra cursus in sit amet arcu.</p>

							<a href="animeDescription.php?anime=4"><p style="font-weight: bold; color: #6d7eed;">Czytaj dalej</p></a></figcaption>
						</figure>
						
						<figure class="col-sm-9 col-md-5 col-lg-3 mx-auto">
							<img src="img/slide2.jpg" class="img-fluid">
							<figcaption><p class="mt-4" style="font-size:14px; font-weight: 800;">LOREM IPSUM DOLOR SIT AMET,</p><p style="font-size:14px; font-weight: 500;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec consectetur purus, eget sodales orci. Nam vel malesuada neque. Nam pulvinar pharentra pellentresque. Pellentresque a leo non elit viverra cursus in sit amet arcu.</p>

							<a href="animeDescription.php?anime=2"><p style="font-weight: bold; color: #6d7eed;">Czytaj dalej</p></a></figcaption>
						</figure>
						
						<figure class="col-sm-9 col-md-5 col-lg-3 mx-auto">
							<img src="img/slide3.jpg" class="img-fluid">
							<figcaption><p class="mt-4" style="font-size:14px; font-weight: 800;">LOREM IPSUM DOLOR SIT AMET,</p><p style="font-size:14px; font-weight: 500;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec consectetur purus, eget sodales orci. Nam vel malesuada neque. Nam pulvinar pharentra pellentresque. Pellentresque a leo non elit viverra cursus in sit amet arcu.</p>

								<a href="animeDescription.php?anime=3"><p style="font-weight: bold; color: #6d7eed;">Czytaj dalej</p></a></figcaption>
						</figure>
					</div>
				</div>
			</section>
		</div>
	</main>
	
	<footer class="text-center text-lg-start" style="background-color: #e3e3e3;">
	  <div class="container p-4" style="background-color: #e3e3e3;">
		<div class="row">
		  <div class="col-lg-6 col-md-12 my-auto">
			<h5 class="text-uppercase">O STRONIE</h5>
			<p>
			  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
			  molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
			  aliquam voluptatem veniam, est atque cumque eum delectus sint!
			</p>
		  </div>

		  <div class="col-lg-6 col-md-12 my-auto">
			<img src="img/footerimg.png"></img>
		  </div>
		</div>
	  </div>
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