<?php
	$mysql = new mysqli(
		"localhost",
		"root",
		"",
		"piapp"
	);
	
	if ($mysql ->connect_error){
		die("Error al conectar a la base de datos" . $mysql->connect_error);
		
	}
	
?>
