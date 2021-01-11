<?php

	session_start();
	
	if (!isset($_SESSION['logged']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Anime rating - ocenione</title>
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
			
			<div class="ml-auto">
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<?php
							echo '<a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" style="color: #f1f1f1">'.$_SESSION['email'].'</a>'
						?>
						<div class="dropdown-menu" aria-labelledby="dropdown07">
							<a class="dropdown-item" href="myList.php">Moja lista</a>
							<a class="dropdown-item active" href="ratedAnime.php">Ocenione</a>
							<a class="dropdown-item" href="logout.php" style="color: red;">Wyloguj</a>
						</div>
					</li>
				</ul>
			</div>
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
						<text style="font-weight:bold; font-size:12px; margin-left: 15px;">Ocenione przeze mnie</text>
					</div>
				</div>
			</section>
			<section class="col-xl-8 pb-4">
				<h3 class="my-4" style="font-weight: 700;">Ocenione przeze mnie</h3>
				<p class="mb-4" style="font-size:15px; font-weight: 700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac pretium nunc. Cras blandit non eros in interdum. Donec quis venenatis leo. Vestbulum condimentum</p>
			</section>
			<section class="col-12 pb-4">
				<form>
					<div style="margin-top: 20px; margin-bottom: 20px;" class="row">

						<!--<div class="col-md-6" style="margin-top: 20px;">
							<label for="categories">Filtruj kategorie:</label>
							<select name="categories" id="categories" style="border:0; outline:0; background-color:#fff;">
								<option value="action">Akcja</option>
								<option value="adventure">Bajka przygodowa</option>
								<option value="comedy">Komedia</option>
								<option value="drama">Dramat</option>
								<option value="fantasy">Fantasy</option>
							</select>
						</div>
						
						Wykomentowałam to, bo robienie podwójnego filtra to imo trochę sporo kombinowania. Jak masz pomysł, to można przywrócić, ale
						ja bym się nie bawiła w to.-->

						<div class="col-md-6" style="margin-top: 20px;">
							<label for="about">Sortuj po:</label>
							<select name="about" id="about" style="border:0; outline:0; background-color:#fff;" onchange="this.form.submit()">
								<option value="none" selected hidden>Sortuj</option>
								<option value="userRating">Mojej ocenie</option>
								<option value="rating">Ocenie użytkowników</option>
							</select>
						</div>	
					</div>
				</form>
			</section>
			<section class="col-12 pb-4">
			
			<?php
				require_once "connect.php";

				$connect = @new mysqli($host, $db_user, $db_password, $db_name);

				if ($connect->connect_errno != 0) {
					echo "Error: " . $connect->connect_errno;
				} else {

					if (isset($_GET['about']))
					{
						$selected_order= $_GET['about'];						

							$sql = "SELECT anime.title as title, anime.rating as rating, ratedanime.userRating as userRating
							FROM anime						
							INNER JOIN ratedanime ON anime.id=ratedanime.animeID
							INNER JOIN users ON users.id = ratedanime.userID
							ORDER BY $selected_order DESC;";	
												
					}
					else
					{

						$sql = "SELECT anime.title as title, anime.rating as rating, ratedanime.userRating as userRating
						FROM anime				
							INNER JOIN ratedanime ON anime.id=ratedanime.animeID
							INNER JOIN users ON users.id = ratedanime.userID
							ORDER BY userRating DESC;";
						
					}

					$result = mysqli_query($connect, $sql);
					echo "<div class='divider'></div>";


					if (mysqli_num_rows($result) > 0) {

						while ($row = mysqli_fetch_assoc($result))
							{
							echo
								"<div class='row text-center'>


									<div class='col-4'><a href='animeDescription.php' style='font-weight: 700;'>" . $row["title"] . "</a></div>
									<div class='col-4'>Ocena użytkowników: <span>" . $row["rating"] . "</span>/5</div>

									<div class='col-md-4'>
										<fieldset class='rating'>
											<input type='radio' id='star5' name='rating' value='5' /><label class='full' for='star5'></label>
											<input type='radio' id='star4half' name='rating' value='4 and a half' /><label class='half' for='star4half'></label>
											<input type='radio' id='star4' name='rating' value='4' /><label class='full' for='star4'></label>
											<input type='radio' id='star3half' name='rating' value='3 and a half' /><label class='half' for='star3half'></label>
											<input type='radio' id='star3' name='rating' value='3' /><label class='full' for='star3'></label>
											<input type='radio' id='star2half' name='rating' value='2 and a half' /><label class='half' for='star2half'></label>
											<input type='radio' id='star2' name='rating' value='2' /><label class='full' for='star2'></label>
											<input type='radio' id='star1half' name='rating' value='1 and a half' /><label class='half' for='star1half'></label>
											<input type='radio' id='star1' name='rating' value='1' /><label class='full' for='star1'></label>
											<input type='radio' id='starhalf' name='rating' value='half' /><label class='half' for='starhalf'></label>
										</fieldset>
									</div>
								</div>

				<div class='divider'></div>";
							}
						}

				}
				?>
						
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