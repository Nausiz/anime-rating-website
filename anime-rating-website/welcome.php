<?php

	session_start();
	
	if (!isset($_SESSION['successfulRegistration']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{
		unset($_SESSION['successfulRegistration']);
	}
	
	//Usuwanie zmiennych pamiętających wartości wpisane do formularza
	if (isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
	if (isset($_SESSION['fr_password1'])) unset($_SESSION['fr_password1']);
	if (isset($_SESSION['fr_password2'])) unset($_SESSION['fr_password2']);
	if (isset($_SESSION['fr_regulations'])) unset($_SESSION['fr_regulations']);
	
	//Usuwanie błędów rejestracji
	if (isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
	if (isset($_SESSION['e_password'])) unset($_SESSION['e_password']);
	if (isset($_SESSION['e_regulations'])) unset($_SESSION['e_regulations']);
	
?>

<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Anime rating - witaj!</title>
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
			
			<div class="my-2 my-md-0 ml-auto">';
				<a href="login.php" class="btn btn-light mr-2" >Zaloguj</a>
				<a href="register.php" class="btn btn-light mr-2">Zarejestruj</a>
			</div>
				
		</nav>
	</header>
	
	<main>
		<img class="col-12 px-0" src="img/stripe.jpg"></img>
		<div class="container">
			<section class="col-xl-8 pb-4">
				<h3 class="my-4" style="font-weight: 700;">Witaj na anime-rating-website.com!</h3>

				<p class="mb-4" style="font-size:15px; font-weight: 700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac pretium nunc. Cras blandit non eros in interdum. Donec quis venenatis leo. Vestbulum condimentum</p>
				
				<iframe src="https://giphy.com/embed/yyVph7ANKftIs" alt="Hi!" width="480" height="320" frameBorder="0"/></iframe>
								
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