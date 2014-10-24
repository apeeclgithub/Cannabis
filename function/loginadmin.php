<?php 
	include 'conexion.php';
	session_start();
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	if(empty($user)){echo 'Usuario vacío'; return;}
	if(empty($pass)){echo 'Contraseña vacía'; return;}

	$sql = "SELECT user FROM admin WHERE user = '$user' AND pass = '$pass'";
	$consulta = mysql_query($sql); 
	$fila = mysql_num_rows($consulta);
	$dato = mysql_fetch_array($consulta);

	if($fila>0){
		$_SESSION['admin'] = $dato['user'];
		echo "<script>location.href='admin.php';</script>";
	}else{
		echo 'Datos Incorrectos';
	}

 ?>