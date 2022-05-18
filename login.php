<?php
session_start();

include "config/fonction.php";


?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">


				<form method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Connectez-vous
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input type="submit" class="login100-form-btn" style="background-color:green" value="Se connecter" name="login">
						</div>
					</div>

				</form>



			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

</body>
</html>

<?php

if(isset($_POST['login'])){
	if(!empty($_POST['email']) AND !empty($_POST['pass'])){
        
		$email = $_POST['email'];
		$mdp = $_POST['pass'];

		$infos = getUser($email, $mdp);

		if($infos){
            $_SESSION['admin'] = $infos;
			header('Location: admin/');
		}
		else{
			header('Location: index.php');
		}
	}
}


?>