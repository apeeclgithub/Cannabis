<?php 

	include 'conexion.php';

	$useradmin = $_POST['useradmin'];
	$passadmin = $_POST['passadmin'];

	function val_useradmin($useradmin){
		if(preg_match("/^[A-Z a-z]{3,}+$/", $useradmin)){
			return true;
		}else{
			return false;
		}
	}

	function val_passadmin($passadmin){
		if (preg_match("/^[A-Z a-z 0-9]{3,}+$/", $passadmin)) {
			return true;
		}else{
			return false;
		}
	}
	$error = '';
	if (!val_useradmin($useradmin)) $error .= 'Error usuario';
	if (!val_passadmin($passadmin)) $error .= ' Error contraseña';


	if (!empty($error)) {
		$response = array('error' => $error);
	} else {

		$SQL = "Select * From admin Where user = '$useradmin' AND pass = '$passadmin'" ;
		$consulta = mysql_query($SQL);
		$filas = mysql_num_rows($consulta);
		//$datos = mysql_fetch_row($consulta);

			if ($filas>0){
				//VALIDAR SI INGRESA UNO CORRECTO Y OTRO INCORRECTO
				$response = array('error' => '', 'url' => 'admin.html');
			}else{
				$erroruser = ('Usuario o contraseña inválidos');
				//FALTA ERROR
				$response = array('error' => $erroruser);
			}


		// Aca valida BD
		//$response = array('error' => '', 'url' => 'admincrud.php');
	}

	echo json_encode($response);
 ?>

