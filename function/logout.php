<?php
session_start();
if (isset($_SESSION['usuario'])) {
	include 'conexion.php';
} else {
	echo "<script>location.href='../carro.php';</script>";
}
session_destroy();
echo "<script>location.href='../carro.php';</script>";
?>