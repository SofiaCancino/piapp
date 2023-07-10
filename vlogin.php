<?php

require 'db.php';


$usuarios = $mysql->query("SELECT email, idtipo 
						FROM users
						WHERE email = '".$_POST['email']."' 
						and password = '".$_POST['password']."'");

if($usuarios->num_rows==1):
	$datos=$usuarios->fetch_assoc();
	echo json_encode(array('error' => false, 'tipo' => $datos['idtipo']));
else:
	echo json_encode(array('error'=>true));
endif;

$mysql->close();
?>