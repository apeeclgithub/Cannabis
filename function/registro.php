<?php
if($_POST)
{
	$to_Email   	= "mario.meneses.a@gmail.com"; //Replace with recipient email address
	$subject        = 'Tienes un e-mail de contacto desde Cannabis'; //Subject line for emails
	
	
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
	if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userPhone"]) || !isset($_POST["userMessage"]))
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Campos vacios'));
		die($output);
	}

	//Sanitize input data using PHP filter_var().
	$user_Name        = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
	$user_Email       = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
	$user_Phone       = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
	$user_Message     = filter_var($_POST["userMessage"], FILTER_SANITIZE_STRING);
	
	//additional php validation
	if(strlen($user_Name)<4) // If length is less than 4 it will throw an HTTP error.
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Nombre corto o vacío'));
		die($output);
	}
	if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) //email validation
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Ingrese un mail válido'));
		die($output);
	}
	if(!is_numeric($user_Phone)) //check entered data is numbers
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Debe ingresar sólo números'));
		die($output);
	}
	if(strlen($user_Phone)<6) //check entered data is numbers
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Debe ingresar mínimo 6 dígitos'));
		die($output);
	}
	if(strlen($user_Message)<5) //check emtpy message
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Mensaje muy corto'));
		die($output);
	}
	
	//proceed with PHP email.
	$headers = 'From: '.$user_Email.'' . "\r\n" .
	'Reply-To: '.$user_Email.'' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
	$sentMail = @mail($to_Email, $subject,'Nombre: '.$user_Name."\n"."\n".'Fono: '.$user_Phone."\n"."\n".'Mail: '.$user_Email."\n"."\n".'Mensaje: ' .$user_Message, $headers);
	
	if(!$sentMail)
	{
		$output = json_encode(array('type'=>'error', 'text' => 'No se pudo enviar el mensaje.'));
		die($output);
	}else{
		$output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_Name .' Gracias por enviar su mensaje.'));
		die($output);
	}
}
?>


<?php
	include 'conexion.php';
	
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$pass = md5($_POST['pass']);
	$fono = $_POST['fono'];
	$direccion = $_POST['direccion'];
	$comuna = $_POST['comuna'];
	$pagina = $_POST['pagina'];

		
		$SQL = "Select * From usuario Where usu_email = '$email'";
		$consulta = mysql_query($SQL);
		$filas = mysql_num_rows($consulta);
		$datos = mysql_fetch_row($consulta);

			if ($filas>0){
				echo "<script>location.href='../$pagina.php?err=3';</script>";
			}else{
				$SQL = "Insert Into usuario (usu_nom, usu_tel, usu_dir, usu_com, usu_email, usu_pass, usu_tipo, usu_est) 
				Values ('".$nombre."','".$fono."','".$direccion."','".$comuna."','".$email."','".$pass."',1,'inactivo')";
				mysql_query($SQL);
				mail($email'Comprobar email',
				"Para comprobar su email pinche el siguiente link:\n\n".

				"<a href=\"http://www.elpollitope.cl/funtion/comprobar.php?email=$email");

				echo "<script>location.href='../$pagina.php?err=4';</script>";
			}	
	
?>