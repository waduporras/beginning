<?php 
 
	if ( isset( $_POST[ 'name' ] ) ) {
		$name = $_POST[ 'name' ];
	} 
	
	if ( isset( $_POST[ 'apellido' ] ) ) {
		$apellido = $_POST[ 'apellido' ];
	}

	if ( isset( $_POST[ 'password' ] ) ) {
		$password = $_POST[ 'password' ];
	}

	if ( isset( $_POST[ 'edad' ] ) ) {
		$edad = $_POST [ 'edad' ];
	}

	$variable = 'lola' ;

	if ( $password != $variable ) {
  		header('Location: /duvan/');
	}

	echo " my nombre es " . $name . " " . $apellido . " " . " mi password es " . $password . " y tengo " . $edad;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>perfil</title>
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<h1>nothing is impossible, but incapable people</h1>

		<img src="../imagenes/camila.jpg">

		<center>

			<iframe  src="https://www.youtube.com/embed/LSt9rRLBaWc" frameborder="0" allowfullscreen width="300" height="300">
			</iframe>"

		</center>

	</body>
</html>

