<?php
session_start();
include_once 'conexion.php';
session_destroy();
echo "<script>location.href='../index.php';</script>";
?>