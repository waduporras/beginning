<!DOCTYPE html>
<html>
	<head>
		<title>duvan site</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body>
		
		<form action="/walter/php/datos.php" method="POST">
			<h1>Formulari</h1>
			<input type="text" name="name" placeholder="Escriba su nombre">
	 		<input type="text" name="apellido" placeholder="ingresa apellido">
	 		<input type='password' name='password' placeholder="password">
	 		
	 		<select name="edad" >

	 		<?php 
	 			for ( $i=8 ; $i <= 65 ; $i++) ; ?>
	 			<option value> </option>
			
			<input type="submit" value="iniciar">
			
			</select>
		
		</form>


	</body>

</html>