<?php
include 'function/conexion.php';

if(isset($_SESSION['admin'])){
	echo "<script>location.href='admin.php';</script>";
}

?>

<!DOCTYPE html>
<html>
	<head>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script language="javascript">// <![CDATA[
		$(document).ready(function() {

		   // Interceptamos el evento submit
		    $('#loginadmin').submit(function() {
		  // Enviamos el formulario usando AJAX
		        $.ajax({
		            type: 'POST',
		            url: $(this).attr('action'),
		            data: $(this).serialize(),
		            // Mostramos un mensaje con la respuesta de PHP
		            success: function(data) {
		         
		                $('#data1').html(data);
		            }
		        })        
		        return false;
		    }); 
		})
// ]]></script>
		
	</head>
	<body>
		<h2>Ingrese a su cuenta para continuar.</h2>

	<fieldset>
		<form id="loginadmin" name="loginadmin" method="post" action="function/loginadmin.php">

			<label id="user_label" for="user">Mail</label>
	      	<input id="user" class="text-input" name="user" type="text" />
	 
	      	<label id="pass_label" for="pass">Pass</label>
	     	<input id="pass" class="text-input" name="pass" type="password" />

	     	<input id="submit_admin" class="button" name="submit" type="submit" value="Send" />

		</form>			
	</fieldset>
		
		<div id="data1"></div>



	</body>
</html>