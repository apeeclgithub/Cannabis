<?php
	include 'conexion.php';

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$fono = $_POST['fono'];
	$mail = $_POST['mail'];
	$dir = $_POST['dir'];
	$reg = $_POST['reg'];
	$com = $_POST['com'];
	$pass = $_POST['pass'];

	$sql = "UPDATE usuario INNER JOIN direccion ON usuario.usu_id = direccion.usu_id INNER JOIN comuna ON direccion.com_id = comuna.com_id SET usuario.usu_nombre ='$nombre', usuario.usu_fono = $fono, usuario.usu_mail = '$mail', usuario.usu_pass = '$pass', direccion.dir_direccion = '$dir', direccion.com_id = $com WHERE usuario.usu_id = $id";
	$con = mysql_query($sql);

	echo "<script>location.href='./cuenta.php'</script>";
	


	?>