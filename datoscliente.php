<h2>Sus Datos</h2>
<a href="function/logout.php">salir</a>
<br>
<?php
	include 'function/conexion.php';
	$sql1 = "SELECT usuario.usu_id, usu_nombre, usu_fono, usu_mail, usu_edad, dir_direccion, com_nombre, reg_nombre FROM usuario INNER JOIN direccion ON usuario.usu_id = direccion.usu_id INNER JOIN comuna ON direccion.com_id = comuna.com_id INNER JOIN region ON comuna.reg_id = region.reg_id WHERE usuario.usu_id = ".$_SESSION["usuario"];
	$consulta1 = mysql_query($sql1);
	$dato1 = mysql_fetch_array($consulta1);

	echo '<a href="modifica.php?id='.$dato1["usu_id"].'">Modifica tus datos</a>';
	echo '<br>';
	echo 'Nombre: '.$dato1["usu_nombre"];
	echo '<br>';
	echo 'Telefono: '.$dato1["usu_fono"];
	echo '<br>';
	echo 'E-mail: '.$dato1["usu_mail"];
	echo '<br>';
	echo 'Edad: '.$dato1["usu_edad"];
	echo '<br>';

	
	echo '<h2>Datos de entrega</h2>';	
	echo $dato1["dir_direccion"];
	echo '<br>';
	echo $dato1["com_nombre"];
	echo '<br>';
	echo $dato1["reg_nombre"];
	echo '<br>';


?>

