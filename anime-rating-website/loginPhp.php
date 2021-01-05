<?php

	session_start();
	
	if ((!isset($_POST['email'])) || (!isset($_POST['password'])))
	{
		header('Location: login.php');
		exit();
	}

	require_once "connect.php";

	$connect = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($connect->connect_errno!=0)
	{
		echo "Error: ".$connect->connect_errno;
	}
	else
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$email = htmlentities($email, ENT_QUOTES, "UTF-8");
		$password = htmlentities($password, ENT_QUOTES, "UTF-8");
		
		if ($result = @$connect->query(
		sprintf("SELECT * FROM users WHERE email='%s' AND password='%s'",
		mysqli_real_escape_string($connect,$email),
		mysqli_real_escape_string($connect,$password))))
		{
			$ilu_userow = $result->num_rows;
			if($ilu_userow>0)
			{
				$_SESSION['logged'] = true;
				
				$wiersz = $result->fetch_assoc();
				$_SESSION['id'] = $wiersz['id'];
				$_SESSION['email'] = $wiersz['email'];
				$_SESSION['password'] = $wiersz['password'];
				
				unset($_SESSION['error']);
				$result->free_result();
				header('Location: myList.php');
				
			} else {
				
				$_SESSION['error'] = '<span style="color:red">Nieprawidłowy e-mail lub hasło!</span>';
				header('Location: login.php');
				
			}
		}
		$connect->close();
	}
?>