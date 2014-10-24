<?php 
	include 'conexion.php';
	$id = $_GET['id'];
	mysql_query("UPDATE pedido SET ped_estado = 'rechazado' WHERE ped_id = $id");
	echo "<script>location.href='../admin.php?'</script>";
 ?>
