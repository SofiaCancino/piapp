<!DOCTYPE html>
<html >

	<head>
	<meta charset="utf-8">
	<title> Bienvenido </title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/style.css">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boostrap@5.0.2/dist/css/boots">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
	
	</head>
	<body>
	<?php require '../fragments/header.php' ?>
	<h1 class=align-center>Detalle de su ficha</h1>
	
	<div id="mensaje"></div>
	
			
			<div class="row">
				<div class="col-7">
				  <table class="table fs" >
				   <thead class=thead-color>
				    <tr>
						
						<th class=th-style>Fecha</th>
						<th class=th-style>Próxima Fecha</th>
						<th class=th-style>Detalles</th>
						
				    </tr>
				   </thead>	
				   <tbody>
				   <tr>
						
						<td><?php echo "05/01/2021"?> </td>
						<td><?php echo "05/03/2021"?>  </td>
						<td> <?php echo "Vacuna óctuple "?> </td>
					
				    </tr>
				   	   <tr>
						
						<td><?php echo "05/03/2021"?> </td>
						<td><?php echo "05/05/2021"?>  </td>
						<td> <?php echo "2° Vacuna óctuple "?> </td>
						
					
				    </tr>
					</tbody>
				  </table>
				   
				   </tbody>
				
				</div>
			</div>	
	
		</div>
		
		
	
	
	
	
	
		 <script src= "http://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	    <script src= "https://cdn.jsdelivr.net/npm/boostrap@5.0.2/dist/js/boostrap.min.js"></script> 
		<script src="http://code.jquery.com/jquery-3.6.0.js"></script>
		<script src="js/jquery-migrate-3.3.2.js"></script>
		<script src="js/main.js"></script>
		
	
	</body>
</html>