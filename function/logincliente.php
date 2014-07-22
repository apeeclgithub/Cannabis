<?php 

	include 'conexion.php';

	$usercliente = $_POST['usercliente'];
	$passcliente = $_POST['passcliente'];

	function val_usercliente($usercliente){
		if(preg_match("/^[A-Z a-z]{3,}+$/", $usercliente)){
			return true;
		}else{
			return false;
		}
	}

	function val_passcliente($passcliente){
		if (preg_match("/^[A-Z a-z 0-9]{3,}+$/", $passcliente)) {
			return true;
		}else{
			return false;
		}
	}
	$error = '';
	if (!val_usercliente($usercliente)) $error .= 'Error usuario';
	if (!val_passcliente($passcliente)) $error .= ' Error contraseña';


	if (!empty($error)) {
		$response = array('error' => $error);
	} else {

		$SQL = "SELECT * FROM USUARIO WHERE USU_MAIL = '$usercliente' AND USU_PASS = '$passcliente'" ;
		$consulta = mysql_query($SQL);
		$filas = mysql_num_rows($consulta);
		$datos = mysql_fetch_array($consulta);

			if ($filas>0){
				//VALIDAR SI INGRESA UNO CORRECTO Y OTRO INCORRECTO
				$response = array('error' => '', 'url' => 'venta.php');
				$_SESSION["usuario"] = $datos['usu_mail'];
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