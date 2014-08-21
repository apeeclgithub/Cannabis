<?php
include 'function/conexion.php';

if(isset($_SESSION['admin'])){
	echo "<script>location.href='admin.php';</script>";
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
		<form id="loginadmin" name="loginadmin" method="post" action="function/loginadmin.php">

			<label id="user_label" for="user">Usuario</label>
	      	<input id="user" class="text-input" name="user" type="text" />
	 
	      	<label id="pass_label" for="pass">Contraseña</label>
	     	<input id="pass" class="text-input" name="pass" type="password" />

	     	<input id="submit_admin" class="button" name="submit" type="submit" value="Send" />

		</form>			
	</fieldset>
		
		<div id="data1"></div>



	</body>
</html>