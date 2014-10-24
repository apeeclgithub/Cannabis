<?php
	include 'conexion.php';

	$name1 = $_POST['name1'];
	$email1 = $_POST['email1'];
	$pass1 = $_POST['pass1'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$fecha = $year.'-'.$month.'-'.$day;
	//var_dump($_POST);

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
	//FALTA VALIDAR Q NO ENTRE VACIA LA FECHA 1*1

	function val_age($nac){ //var_dump($nac); die();
		$nac = new DateTime($nac);
		$act = new DateTime(date('Y-m-d'));
		$final = $nac->diff($act);
		$edad = $final->y;
		if ($edad!="") {
			if ($edad>18) { //corregir
				return true;
			}else{
				return false;
			}
	}
		}


	$error = '';
	if (!val_name($name1)) $error .= 'Nombre inválido';
	if (!val_email($email1)) $error .= 'Email inválido';
	if (!val_pass1($pass1)) $error .= 'Contraseña inválida';
	if (!val_age($fecha)) $error .= ' Debes ser mayor de edad';


	if (!empty($error)) {
		echo $error;
	} else {
		$SQL = "Select * From usuario Where usu_mail = '$email1'";
		$consulta = mysql_query($SQL);
		$filas = mysql_num_rows($consulta);
		$datos = mysql_fetch_row($consulta);

			if ($filas>0){
				echo "Correo ya registrado";
			}else{
				$SQL = "INSERT INTO usuario (usu_nombre, usu_mail, usu_pass, usu_edad, usu_fecha)  Values ('".$name1."','".$email1."','".$pass1."','".$fecha."', '".date("y-m-d")."')";
				mysql_query($SQL);
				echo "Usuario registrado Correctamente";
			}

			$sql1 = "SELECT usu_id FROM usuario WHERE usu_mail = '$email1'";
			$con = mysql_query($sql1);
			$dato = mysql_fetch_array($con);

			if($dato['usu_id']){
				$sql2 = "INSERT INTO direccion (dir_id, usu_id, com_id, dir_direccion) VALUES (".$dato['usu_id'].", ".$dato['usu_id'].", 0, 'Sin definir')";
				mysql_query($sql2);
			}
	}

	
?>