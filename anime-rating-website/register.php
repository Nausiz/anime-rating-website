<?php

	session_start();
	
	if (isset($_POST['email']))
	{
		//Walidacja
		$validation_OK=true;
		
		//Email
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$validation_OK=false;
			$_SESSION['e_email']="Podaj poprawny adres e-mail!";
		}
		
		//Hasło
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];
		
		if ((strlen($password1)<8) || (strlen($password1)>20))
		{
			$validation_OK=false;
			$_SESSION['e_password']="Hasło musi posiadać od 8 do 20 znaków!";
		}
		
		if ($password1!=$password2)
		{
			$validation_OK=false;
			$_SESSION['e_password']="Podane hasła nie są identyczne!";
		}	

		$password_hash = password_hash($password1, PASSWORD_DEFAULT);
		
		//Regulamin
		if (!isset($_POST['regulations']))
		{
			$validation_OK=false;
			$_SESSION['e_regulations']="Potwierdź akceptację regulaminu!";
		}				
		
		//Zapamiętanie danych
		$_SESSION['fr_email'] = $email;
		$_SESSION['fr_password1'] = $password1;
		$_SESSION['fr_password2'] = $password2;
		if (isset($_POST['regulations'])) $_SESSION['fr_regulations'] = true;
		
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			$connect = new mysqli($host, $db_user, $db_password, $db_name);
			if ($connect->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				//Czy email już istnieje?
				$result = $connect->query("SELECT id FROM users WHERE email='$email'");
				
				if (!$result) throw new Exception($connect->error);
				
				$emails = $result->num_rows;
				if($emails>0)
				{
					$validation_OK=false;
					$_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail!";
				}		
				
				if ($validation_OK==true)
				{
					
					if ($connect->query("INSERT INTO users VALUES (NULL, '$email', '$password_hash')"))
					{
						$_SESSION['successfulRegistration']=true;
						header('Location: welcome.php');
					}
					else
					{
						throw new Exception($connect->error);
					}
					
				}
				
				$connect->close();
			}
			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}
		
	}
?>

<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Anime rating - rejestracja</title>
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
					<form method="post" class="d-inline-block my-5 align-items-center">
						<input type="email" placeholder="Adres e-mail" value="<?php
			if (isset($_SESSION['fr_email']))
			{
				echo $_SESSION['fr_email'];
				unset($_SESSION['fr_email']);
			}
		?>" name="email"/>
		<?php
			if (isset($_SESSION['e_email']))
			{
				echo '<div class="error">'.$_SESSION['e_email'].'</div>';
				unset($_SESSION['e_email']);
			}
		?>
						<input type="password" placeholder="Hasło" value="<?php
			if (isset($_SESSION['fr_password1']))
			{
				echo $_SESSION['fr_password1'];
				unset($_SESSION['fr_password1']);
			}
		?>" name="password1"/>
		<?php
			if (isset($_SESSION['e_password']))
			{
				echo '<div class="error">'.$_SESSION['e_password'].'</div>';
				unset($_SESSION['e_password']);
			}
		?>	
						<input type="password" placeholder="Powtórz hasło" value="<?php
			if (isset($_SESSION['fr_password2']))
			{
				echo $_SESSION['fr_password2'];
				unset($_SESSION['fr_password2']);
			}
		?>" name="password2"/>
						<label style="width: 50%; height: auto; font-size:9px;">
						<input class="input" type="checkbox" name="regulations" style="margin: 5px; width:15px; height: 15px;" <?php
			if (isset($_SESSION['fr_regulations']))
			{
				echo "checked";
				unset($_SESSION['fr_regulations']);
			}
				?>/>Zakładając konto akceptujesz warunki <a href="#" style="color: #000; font-weight:bold;">regulaminu</a> oraz naszą <a href="#" style="color: #000; font-weight:bold;">politykę prywatności</a>
						</label><br/>
						<?php
							if (isset($_SESSION['e_regulations']))
							{
								echo '<div class="error">'.$_SESSION['e_regulations'].'</div>';
								unset($_SESSION['e_regulations']);
							}
						?>	
						<input id="Sub" type="submit" value="Zarejestruj"/>
					</form>
					<p style="font-size: 10px; opacity:0.5; text-align: center;" class="mt-2">Posiadasz konto? <a href="login.php"><b>Zaloguj się</b></a></p>
				</div>
			</div>
		</div>
	</main>
	
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity "sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>