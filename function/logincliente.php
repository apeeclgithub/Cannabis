<?php 
	include 'conexion.php';
	session_start();
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];

	if(empty($mail)){echo 'esta wea del mail esta vacia'; return;}
	if(empty($pass)){echo 'esta wea del pass esta vacia'; return;}

	$sql = "SELECT usu_id FROM usuario WHERE usu_mail = '$mail' AND usu_pass = '$pass'";
	$consulta = mysql_query($sql);
	$fila = mysql_num_rows($consulta);
	$dato = mysql_fetch_array($consulta);

	if($fila>0){
		$_SESSION['usuario'] = $dato['usu_id'];
		echo "<script>location.reload();</script>";
	}else{
		echo 'Datos Incorrectos';
	}

 ?>