<?php
	include 'conexion.php';
     

	$name1 = $_POST['name1'];
	$email1 = $_POST['email1'];
	$pass1 = $_POST['pass1'];
/*	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
*/
	function val_name($name1){
		if(preg_match("/^[A-Z a-z]{3,}+$/", $name1)){
			return true;
		}else{
			return false;
		}
	}

	function val_email($email1){
		if (preg_match("/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+\.[A-Za-z]{2,4}$/", $email1)) {
			return true;
		}else{
			return false;
		}
	}

	function val_pass1($pass1){
		if (preg_match("/^[A-Z a-z 0-9]{3,}+$/", $pass1)) {
			return true;
		}else{
			return false;
		}

	}


	$error = '';
	if (!val_name($name1)) $error .= 'Error nombre';
	if (!val_email($email1)) $error .= ' Error email ';
	if (!val_pass1($pass1)) $error .= ' Error pass ';
/*	if (!val_edad($edad)) $error .= 'Error edad';*/

if (!empty($error)) {
		echo $error;
	} else {
		echo "Formulario guardado!";
	}
/*
	$SQL = "Select * From usuario Where usu_mail = '$user_Email1'";
	$consulta = mysql_query($SQL);
	$filas = mysql_num_rows($consulta);
	$datos = mysql_fetch_row($consulta);

	if ($filas>0){
		$output = json_encode(array('type'=>'error', 'text' => 'Correo ya registrado'));
		die($output);
	}else{

	if(strtolower($_SERVER['REQUEST_METHOD']) == 'post') {

	
		$SQL = "Insert Into usuario (usu_nombre, usu_mail, usu_pass) 
	
		Values ('".$user_Name1."','".$user_Email1."','".$user_Pass1."')";
		mysql_query($SQL);

		$output = json_encode(array('type'=>'error', 'text' => 'Usuario registrado correctamente'));
		die($output);

	}else{
		$output = json_encode(array('type'=>'error', 'text' => 'Error al registrar usuario'));
		die($output);	}                               
	}
*/	
?>