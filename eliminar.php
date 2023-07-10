<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		require_once("db.php");
		$idpaciente = $_POST['idpaciente'];
		
			$paciente = $mysql->query("SELECT idpaciente 
						FROM paciente
						WHERE idpaciente = '".$_POST['idpaciente']."'");

if($paciente->num_rows==1){
	$datos=$paciente->fetch_assoc();
	$query = "DELETE FROM paciente WHERE idpaciente = $idpaciente";
	
		$result = $mysql->query($query);
		
		if ($result === TRUE) {
			echo json_encode('datos eliminados');
			
		}else{
			echo json_encode ('error');	
		}
		
		$mysql->close();
	
} else{
		
	echo json_encode(array('error'));
	$mysql->close();
	
	}

}

		
?>