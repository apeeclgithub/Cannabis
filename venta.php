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

			<?php
				include 'function/carrito.php'; 
				$carro = $carrito->get_content();
						if($carro){
							echo "<h3>Lista de productos</h3>";

							echo "<table border=\"1\">";
								echo "<thead>";
									echo "<tr>";
										echo "<td></td>";
										echo "<td>Nombre</td>";
										echo "<td>Cantidad</td>";
										echo "<td>Valor</td>";
										echo "<td>Total</td>";
										echo "<td>Borrar</td>";
										echo "</tr>";
										echo "</thead>";
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
				echo "<tr>";
				echo "<td colspan=\"4\">Total</td>";
				echo "<td colspan=\"2\">".number_format($carrito->precio_total(),0,',','.')."</td>";
				echo "</tr>";
				echo "</table>";
						}else{
							echo "<h2>No tiene productos en su carro.</h2>";
						}
				
			?>
			
		<a href="carro.php">Ver Catalogo</a>

		<hr />

	    <?php 
		    if(@$_SESSION["usuario"]){
		    	include 'datoscliente.php';
		    	echo '<a href="function/comprar.php">COMPRAR!!</a>';
		    }else{
		    	include 'login_cliente.html';
		    }
	    ?>

	</body>	
</html>