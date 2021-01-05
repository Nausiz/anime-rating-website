<?php

	session_start();
	
	if ((isset($_SESSION['logged'])) && ($_SESSION['logged']==true))
	{
		header('Location: myList.php');
		exit();
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Anime rating - logowanie</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="loginRegister.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
	<script src="https://kit.fontawesome.com/e6c92d3f6a.js" crossorigin="anonymous"></script>
	
</head>

<body>
	
	<main class="row">
		<div class="col-10 FormContainer m-auto">
			<div class="Form text-center">
				<div>
					<form action="loginPhp.php" method="post" class="d-inline-block my-5 align-items-center">
						<input type="email" name="email" placeholder="Adres e-mail" />
						<input type="password" name="password" placeholder="Hasło" />
						<div class="underInputs">
							<div></div>
							<div style="flex-grow: 1;">
								<label style="font-size:11px; opacity: 0.5; padding-right:10px;">
									<input style="width:15px; height: 15px;" type="checkbox" name="rememberMe" />Zapamiętaj mnie
								</label>
							</div>
							<div style="flex-grow: 1;">
								<a href="#" style="font-size: 11px; opacity: 0.5;">Zapomniałeś
									hasła?</a>
							</div>
							<div></div>
						</div>
						<input type="submit" value="Zaloguj" />
					</form>
<?php
	if(isset($_SESSION['error']))	echo $_SESSION['error'];
?>
					<p class="mt-4" style="font-size: 10px; position: relative; opacity:0.5; text-align: center;">Nie
						masz jeszcze konta? <a href="register.php"><b>Zarejestruj się</b></a></p>
				</div>
			</div>
		</div>
	</main>
	
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity "sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>