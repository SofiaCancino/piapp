<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		require_once("db.php");
		$idpaciente = $_POST['idpaciente'];
		$nombre = $_POST['nombre'];
		$edad = $_POST['edad'];
		$especie = $_POST['especie'];
		$raza = $_POST['raza'];
		$sexo = $_POST['sexo'];
		$color = $_POST['color'];
		
		$query = "UPDATE paciente SET nombre='$nombre', edad='$edad', especie='$especie', raza='$raza',sexo='$sexo', color='$color' where idpaciente='$idpaciente'";
		$result = $mysql->query($query);
		
		if ($result === TRUE) {
			echo json_encode ("datos actualizados");
			
		}else{
			echo json_encode("error");
		}
		
		$mysql->close();
	
	}








?>