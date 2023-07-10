<?php

	
		
		 require "db.php";
		$idpaciente = $_POST['idpaciente'];
		$nombre = $_POST['nombre'];
		$edad = $_POST['edad'];
		$especie = $_POST['especie'];
		$raza = $_POST['raza'];
		$sexo = $_POST['sexo'];
		$color = $_POST['color'];
		
		$paciente = $mysql->query("SELECT idpaciente 
						FROM paciente
						WHERE idpaciente = '$idpaciente'");

if($paciente->num_rows==1){
	$datos=$paciente->fetch_assoc();
	echo json_encode(array('error'));
	$mysql->close();
} else{

$query = ("INSERT INTO paciente (idpaciente, nombre, edad, especie, raza, sexo, color) VALUES ('$idpaciente', '$nombre', '$edad', '$especie', '$raza', '$sexo', '$color');");
	
		
		$result = $mysql->query($query);
	
		if ($result === TRUE){
			echo json_encode(array('exito'));
			
		}else{
			echo json_encode (array('erro'));
		}
		
		$mysql->close();

}
		
	
	?>