<?php
	include 'conexion.php';
     
if($_POST)
{

	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	
		//exit script outputting json data
		$output = json_encode(
		array(
			'type'=>'error', 
			'text' => 'Request must come from Ajax'
		));
		
		die($output);
    } 
	
	//check $_POST vars are set, exit if any missing
	if(!isset($_POST["userName1"]) || !isset($_POST["userEmail1"]) || !isset($_POST["userPass1"]))
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Campos vacios'));
		die($output);
	}

	//Sanitize input data using PHP filter_var().
	$user_Name1     = filter_var($_POST["userName1"], FILTER_SANITIZE_STRING);
	$user_Email1    = filter_var($_POST["userEmail1"], FILTER_SANITIZE_EMAIL);
	$user_Pass1     = filter_var($_POST["userPass1"], FILTER_SANITIZE_STRING);

	//additional php validation
	if(strlen($user_Name1)<4) // If length is less than 4 it will throw an HTTP error.
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Nombre corto o vacío'));
		die($output);
	}
	if(!filter_var($user_Email1, FILTER_VALIDATE_EMAIL)) //email validation
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Ingrese un mail válido'));
		die($output);
	}
	if(strlen($user_Pass1)<6) //check entered data is numbers
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Debe ingresar mínimo 6 caracteres en la contraseña'));
		die($output);
	}

	
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
	
}
?>