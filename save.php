<?php


	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		require_once("db.php");
		
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$idTipo = $_POST['idTipo'];
		
		$query = "INSERT INTO users (nombre, email, password, idTipo) VALUES ('$nombre', '$email', '$password', '$idTipo')";
		$result = $mysql->query($query);
		
		if ($result === TRUE) {
			echo"usuario creado";
			
		}else{
			echo"error";	
		}
		
		$mysql->close();
	
	}
	