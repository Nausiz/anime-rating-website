<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Anime rating - lista wszystkich anime</title>
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
				  <a class="nav-link active" href="animeList.php">Baza anime</a>
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
						<text style="font-weight:bold; font-size:12px; margin-left: 15px;">Baza anime</text>
					</div>
				</div>
			</section>
			<section class="col-xl-8 pb-4">
				<h3 class="my-4" style="font-weight: 700;">Baza anime</h3>
				<p class="mb-4" style="font-size:15px; font-weight: 700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac pretium nunc. Cras blandit non eros in interdum. Donec quis venenatis leo. Vestbulum condimentum</p>
			</section>
			<section class="col-12 pb-4">
				<form>
					<div style="margin-top: 20px; margin-bottom: 20px;" class="row">
						<div class="col-md-6" style="text-align: center;">  
							<div class="searchDiv">
								<input type="text" class="form-control form-control-sm eventPlaceholder" placeholder="Szukaj anime..." aria-label="candidate name" aria-describedby="basic-addon2" style="border: none; margin: 10px;">
								<div class="input-group-append" style="width: 100px; margin-right: 5px;">
									<button class="btn btn-sm btn-search my-0" type="button">Szukaj</button>
								</div>
							</div>	  
						</div>
						<div class="col-md-6" style="margin-top: 20px;">
							<label for="categories">Filtruj kategorie:</label>
							<select name="categories" id="categories" style="border:0; outline:0; background-color:#fff;">
								<option value="action">Akcja</option>
								<option value="adventure">Bajka przygodowa</option>
								<option value="comedy">Komedia</option>
								<option value="drama">Dramat</option>
								<option value="fantasy">Fantasy</option>
							</select>
						</div>	
					</div>
				</form>
			</section>
			<section class="col-12 pb-4">
			
				<div class="row d-flex justify-content-around">
					<div class="my-auto">
						<span class="checkboxAddToList">
							<input class="checkboxAddToList-element" type="checkbox"/>  
							<i class="fas fa-plus-circle"></i>
						</span>
					</div>
					<div class="my-auto"><a href="animeDescription.php" style="font-weight: 700;">Sword Art Online</a></div>
					<div class="my-auto">Ocena użytkowników: <span>4</span>/5</div>
					<div class="my-auto">Kategorie: <span>Akcja, Fantasy</span></div>
					<div class="my-auto">
						<fieldset class="rating">
							<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5"></label>
							<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half"></label>
							<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4"></label>
							<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half"></label>
							<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3"></label>
							<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half"></label>
							<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" ></label>
							<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half"></label>
							<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1"></label>
							<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf"></label>
						</fieldset>
					</div>
				</div>
					
				<div class="divider"></div>
				
				<div class="row d-flex justify-content-around">
					<div class="my-auto">
						<span class="checkboxAddToList">
							<input class="checkboxAddToList-element" type="checkbox"/>  
							<i class="fas fa-plus-circle"></i>
						</span>
					</div>
					<div class="my-auto"><a href="animeDescription.php" style="font-weight: 700;">Sword Art Online</a></div>
					<div class="my-auto">Ocena użytkowników: <span>4</span>/5</div>
					<div class="my-auto">Kategorie: <span>Akcja, Fantasy</span></div>
					<div class="my-auto">
						<fieldset class="rating">
							<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5"></label>
							<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half"></label>
							<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4"></label>
							<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half"></label>
							<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3"></label>
							<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half"></label>
							<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" ></label>
							<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half"></label>
							<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1"></label>
							<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf"></label>
						</fieldset>
					</div>
				</div>
					
				<div class="divider"></div>
				
				<div class="row d-flex justify-content-around">
					<div class="my-auto"><a href="animeDescription.php" style="font-weight: 700;">Sword Art Online</a></div>
					<div class="my-auto">Ocena użytkowników: <span>4</span>/5</div>
					<div class="my-auto">Kategorie: <span>Akcja, Fantasy</span></div>
				</div>
					
				<div class="divider"></div>
				
				<div class="row d-flex justify-content-around">
					<div class="my-auto"><a href="animeDescription.php" style="font-weight: 700;">Sword Art Online</a></div>
					<div class="my-auto">Ocena użytkowników: <span>4</span>/5</div>
					<div class="my-auto">Kategorie: <span>Akcja, Fantasy</span></div>
				</div>
					
				<div class="divider"></div>
				
				<div class="row d-flex justify-content-around">
					<div class="my-auto"><a href="animeDescription.php" style="font-weight: 700;">Sword Art Online</a></div>
					<div class="my-auto">Ocena użytkowników: <span>4</span>/5</div>
					<div class="my-auto">Kategorie: <span>Akcja, Fantasy</span></div>
				</div>
					
				<div class="divider"></div>
						
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