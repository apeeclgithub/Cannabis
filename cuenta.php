<?php
	session_start();
	include 'function/conexion.php';
	$id = @$_SESSION['usuario'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/script.js" type="text/javascript"></script>	
	</head>
	<body>
	<?php
	if(@$_SESSION['usuario']){
		include 'cuenta_ingresada.php';
	}else{
		include 'login_cliente.html';
	}
	?>
	</body>
</html>