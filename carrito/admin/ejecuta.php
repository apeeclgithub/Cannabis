<?php 
	include "../conexion.php";
	if($_POST['Caso']=="Eliminar"){
		mysql_query("delete from productos where Id=".$_POST['Id']);
		unlink("../productos/".$_POST['Imagen']);
		echo 'El producto se ha eliminado';
	}
	if($_POST['Caso']=="Modificar"){
		mysql_query("update productos set Nombre='".$_POST['Nombre']."' where Id=".$_POST['Id']);
		mysql_query("update productos set Descripcion='".$_POST['Descripcion']."' where Id=".$_POST['Id']);
		mysql_query("update productos set Precio='".$_POST['Precio']."' where Id=".$_POST['Id']);
		echo 'El producto se ha modificado';
	}

?>