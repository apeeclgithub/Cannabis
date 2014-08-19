<?php
include 'function/conexion.php';

if(isset($_SESSION['usuario'])){
	echo "<script>location.href='cuenta.php';</script>";
}

?>

<!DOCTYPE html>
<html>
	<head>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>

		
	</head>
	<body>
		<h2>Ingrese a su cuenta para continuar.</h2>

	<fieldset>
		<form id="logincliente" name="logincliente" method="post" action="function/logincliente.php">

			<label id="mail_label" for="mail">Mail</label>
	      	<input id="mail" class="text-input" name="mail" type="text" />
	 
	      	<label id="pass_label" for="pass">Pass</label>
	     	<input id="pass" class="text-input" name="pass" type="password" />

	     	<input id="submit_cliente" class="button" name="submit" type="submit" value="Send" />

		</form>			
	</fieldset>
		
		<div id="data1"></div>



	</body>
</html>