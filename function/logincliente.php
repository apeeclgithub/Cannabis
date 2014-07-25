<?php 
	include 'conexion.php';
	session_start();
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];

	if(empty($mail)){echo 'esta wea del mail esta vacia'; return;}
	if(empty($pass)){echo 'esta wea del pass esta vacia'; return;}

	$sql = "SELECT usu_mail FROM usuario WHERE usu_mail = '$mail' AND usu_pass = '$pass'";
	$consulta = mysql_query($sql);
	$fila = mysql_num_rows($consulta);
	$dato = mysql_fetch_array($consulta);

	if($fila>0){
		$_SESSION['usuario'] = $dato['usu_mail'];
		echo "<script>location.reload();</script>";
	}else{
		echo 'Datos Incorrectos';
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