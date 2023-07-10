<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Ingresar Paciente </title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
	<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boostrap@5.0.2/dist/css/boots">-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
	
</head>

<body>

	<div class="exito">
		<span>Datos ingresados con éxito</span>
	</div>
	<div class="borrado">
		<span>Datos eliminados con éxito</span>
	</div>
	<div class="noborrado">
		<span>No existen registros</span>
	</div>
	<div class="err">
		<span>Código ya existe</span>
	</div>


	<?php require_once 'fragments/header.php' ?>
	


	<form action="" id="ingresa" class="fs">
		<label class="titulo">
			<h2>Ingresar datos de paciente</h2>
		</label>

		<input type="number" name="idpaciente" id="idpaciente" min="1" max="999" placeholder="ID Paciente"
			required>
		<input type="text" class="form-hor" name="nombre" id="nombre" placeholder="Ingrese nombre..." required>
		<input type="text" class="form-hor" name="edad" id="edad" placeholder="Ingrese edad...">
		<input type="text" class="form-hor" name="especie" id="especie" placeholder="Ingrese especie..." required>
		<input type="text" class="form-hor" name="raza" id="raza" placeholder="Ingrese raza..." required>
		<input type="text" class="form-hor" name="sexo" id="sexo" placeholder="Ingrese sexo..." required>
		<input type="text" class="form-hor" name="color" id="color" placeholder="Ingrese color..." required>
		
		<input type="submit" class="botonIngresa" value="Ingresar">


	</form>



	<!-- <script src= "http://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
		<script src= "https://cdn.jsdelivr.net/npm/boostrap@5.0.2/dist/js/boostrap.min.js"></script> -->
	<script src="http://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="js/jquery-migrate-3.3.2.js"></script>
	<script src="js/main.js"></script>

</body>

</html>