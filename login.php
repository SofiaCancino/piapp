<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Login </title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


	<?php require_once 'fragments/header.php' ?>

	<div class="error">
		<span>Datos de ingreso no válidos, inténtelo nuevamente</span>
	</div>



	<fieldset class="fs">
		<form action="" id="formu">

			<h1> Iniciar Sesión</h1>
			<input type="text" name="email" placeholder="Ingrese mail" required>
			<input type="password" name="password" placeholder="Ingrese contraseña" required>
			<input type="submit" class="botonlg" value="Ingresar">


		</form>
	</fieldset>
	<script src="http://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="js/jquery-migrate-3.3.2.js"></script>
	<script src="js/main.js"></script>


</body>

</html>