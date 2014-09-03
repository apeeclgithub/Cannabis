<?php

include 'conexion.php';
session_start();

$id = $_SESSION['usuario'];
$direccion = $_POST['direccion'];
$comuna = $_POST['comuna'];
echo $comuna;
$sql = "UPDATE direccion SET dir_direccion = '".$direccion."', com_id = ".$comuna." WHERE usu_id = ".$id;
mysql_query($sql);
echo "<script>location.href='../tus-datos.php'</script>";


?>