<?php
session_start();
if (isset($_SESSION['usuario'])) {
	session_destroy();
	echo "<script>location.href='../carro.php';</script>";
} else {
	echo "<script>location.href='../carro.php';</script>";
}



?>