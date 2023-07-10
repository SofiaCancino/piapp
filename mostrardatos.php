<?php

include_once 'db.php';


?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Registro de Pacientes </title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boostrap@5.0.2/dist/css/boots"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
	<?php require 'fragments/header.php' ?>
	<h1>Pacientes</h1>

	<div id="mensaje" class="borrado"> Informción eliminada con exito</div>
	<div id="mensaje" class="noborrado"> ERROR</div>


	<form action="buscar.php" id="busca" class="buscar-id">
		<input type="number" name="idpaciente" id="idpaciente" placeholder="buscar N° de Ficha...">
		<input type="submit" class="botonBusca" value="Buscar" name="Buscar" min="1">
		<br>
		<br><a href="mostrardatos.php">Ver registros</a>
		
	</form>

	<form action="" id="elimina" class="elimina-id">
		<input type="number" name="idpaciente" placeholder="Ingrese N° de Ficha..." required>
		<input type="submit" class="botonElimina" id="borra" value="Eliminar">
	</form>

	<div class="row">
		<div class="col-7">
			
			<table class="table" id="lista-pacientes" border="1" align="center">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Edad</th>
						<th>Especie</th>
						<th>Raza</th>
						<th>Sexo</th>
						<th>Color</th>


					</tr>
				</thead>
				<tbody>
					<?php

					require "db.php";
					$sql = "SELECT * from paciente";
					$result = mysqli_query($mysql, $sql);

					while ($mostrar = mysqli_fetch_array($result)) {
						?>

						<tr>

							<td>
								<?php echo $mostrar['idpaciente'] ?>
							</td>
							<td>
								<?php echo $mostrar['nombre'] ?>
							</td>
							<td>
								<?php echo $mostrar['edad'] ?>
							</td>
							<td>
								<?php echo $mostrar['especie'] ?>
							</td>
							<td>
								<?php echo $mostrar['raza'] ?>
							</td>
							<td>
								<?php echo $mostrar['sexo'] ?>
							</td>
							<td>
								<?php echo $mostrar['color'] ?>
							</td>

						
						</tr>
						<?php
					}
					?>

				</tbody>
			</table>

			</tbody>

		</div>
	</div>
	


	</div>







	<script src="http://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/boostrap@5.0.2/dist/js/boostrap.min.js"></script> -->
	<script src="http://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="js/jquery-migrate-3.3.2.js"></script>
	<script src="js/main.js"></script>


</body>

</html>