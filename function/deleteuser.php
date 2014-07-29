<?php 

	include 'conexion.php';
	$USU_ID = $_GET['id'];var_dump($USU_ID);
	$sql1=("DELETE FROM direccion WHERE usu_id=".$USU_ID);
	$sql=("DELETE FROM usuario where usu_id=".$USU_ID);
	mysql_query($sql1);
	mysql_query($sql);
	header('Location: ../admin.php');
 ?>
