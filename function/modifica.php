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

	$sql = "UPDATE usuario SET usu_nombre = '$nombre', usu_fono = $fono, usu_mail = '$mail', usu_pass = '$pass' WHERE usu_id = $id";
	$con = mysql_query($sql);

	echo "<script>alert('Funciona');</script>";
	echo "<script>location.href='./cuenta.php'</script>";
	


	?>