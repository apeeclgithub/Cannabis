<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/script.js" type="text/javascript"></script>
<script language="javascript">// <![CDATA[
$(document).ready(function() {

   // Interceptamos el evento submit
    $('#logincliente').submit(function() {
  // Enviamos el formulario usando AJAX
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
         
                $('#data').html(data);
            }
        })        
        return false;
    }); 
})
// ]]></script>
	</head>
	<body>

		<h3>Lista de productos</h3>

		<table border="1">
			<thead>
				<tr>
					<td></td>
					<td>Nombre</td>
					<td>Cantidad</td>
					<td>Valor</td>
					<td>Total</td>
					<td>Borrar</td>
				</tr>
			</thead>
			<?php
				include 'function/carrito.php'; 
				$carro = $carrito->get_content();
						if($carro){
						    foreach($carro as $producto)
						    {
						    	
						        echo '<tr>';
							        echo '<td><img width="70px" height="70px" src="img/prod'.$producto["id"].'.jpg"></td>';
							        echo '<td>'.$producto["nombre"].'</td>';
							        echo '<td>'.$producto["cantidad"].'</td>';
							        echo '<td>'.number_format($producto["precio"],0,',','.').'</td>';
							        echo '<td>'.number_format($producto["cantidad"]*$producto["precio"],0,',','.').'</td>';
							        echo '<td><a href="#"><span onclick="del(\''.$producto["unique_id"].'\')">x</span></a></td>';
						        echo '</tr>';

						    }
						}
			?>
			<tr>
				<td colspan="4">Total</td>
				<td colspan="2"><?php echo number_format($carrito->precio_total(),0,',','.')?></td>
			</tr>
		</table>
		<a href="carro.php">Ver Catalogo</a>

		<hr />

	    <?php 
		    if(@$_SESSION["usuario"]){
		    	include 'datoscliente.php';
		    }else{
		    	include 'login_cliente.html';
		    }
	    ?>

	</body>	
</html>