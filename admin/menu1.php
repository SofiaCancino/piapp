<!DOCTYPE html>
<html >

	<head>
	<meta charset="utf-8">
	<title> Bienvenido </title>
	<link rel="stylesheet" href="../assets/css/style.css">
	</head>
	<body>
	<div class="error" >
		<span>Datos de ingreso no válidos, inténtelo nuevamente</span>
	</div>
		
		<?php require '../fragments/header.php' ?>
		<h1> Bienvenido</h1>
		
		<form action="" id="formlg" class="fs"> 
		<button class="menu1"><a href="../ingresa_paciente.php"> Ingresar Pacientes </a></button>
		<button class="menu1"><a href="../mostrardatos.php">Ver Registros</a></button>
		
		</form>
		
		<script src="http://code.jquery.com/jquery-3.6.0.js"></script>
		<script src="js/jquery-migrate-3.3.2.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>