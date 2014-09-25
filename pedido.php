<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="img/logo-250.png" rel="icon" type="image/x-icon" /><!--faltafavicon -->
    <link href="img/logo-250.png" type="image/x-icon" rel="shortcut icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu pedido - EVN</title>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/modernizr.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <!--[if lt IE 9 ]>
    <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/html5shiv-printshiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->

    <!--Facebook Tags-->
    <meta property="og:title" content="Espacio verde natural"/>
    <meta property="og:image" content="img/logo-250.png"/>
    <meta property="og:site_name" content="Espacio verde natural"/>
    <meta property="og:description" content="Espacio verde natural, venta de variados productos"/>  
    <!--Twitter Cards Tags-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@PONER TWITTER">
    <meta name="twitter:title" content="Espacio verde natural">
    <meta name="twitter:description" content="Espacio verde natural, venta de variados productos">
    <meta name="twitter:creator" content="@PONER TWITTER">
    <meta name="twitter:image:src" content="img/logo-250.png">

    <meta name="description" content="Espacio verde natural, venta de variados productos">
    <meta name="author" content="Espacio verde natural">
    <meta name="keywords" content="venta cremas, venta semillas, semillas, cremas, ropa, vestuario, venta vestuario,  venta ropa, venta fertilizante, fertilizante, cosmetica, semillas feminizadas, feminizadas, semillas automaticas, automaticas, accesorios, vestuario y accesorios, marihuana, cannabis">
</head>
	<body>

			<?php
				include 'function/conexion.php';
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
			
		<a href="nuestros-productos.php">Ver Catalogo</a>

		<hr />

	    <?php 
		    if(@$_SESSION["usuario"]){
		    	echo "<h2>Sus Datos</h2>";
				echo '<a href="function/logout.php">salir</a>';
				echo '<br>';
				$sql1 = "SELECT usuario.usu_id, usu_nombre, usu_fono, usu_mail, usu_edad, dir_direccion, com_nombre, reg_nombre FROM usuario INNER JOIN direccion ON usuario.usu_id = direccion.usu_id INNER JOIN comuna ON direccion.com_id = comuna.com_id INNER JOIN region ON comuna.reg_id = region.reg_id WHERE usuario.usu_id = ".$_SESSION["usuario"];
				$consulta1 = mysql_query($sql1);
				$dato1 = mysql_fetch_array($consulta1);

				echo '<a href="tusdatos.php">Modifica tus datos</a>';
				echo '<br>';
				echo 'Nombre: '.$dato1["usu_nombre"];
				echo '<br>';
				echo 'Telefono: '.$dato1["usu_fono"];
				echo '<br>';
				echo 'E-mail: '.$dato1["usu_mail"];
				echo '<br>';
				echo 'Edad: '.$dato1["usu_edad"];
				echo '<br>';

				
				echo '<h2>Datos de entrega</h2>';	
				echo $dato1["dir_direccion"];
				echo '<br>';
				echo $dato1["com_nombre"];
				echo '<br>';
				echo $dato1["reg_nombre"];
				echo '<br>';

				if ($dato1['dir_direccion']=='Sin definir'){
					echo 'Debe registrar su dirección antes de comprar<br>';
					echo '<a href="agregar-direccion.php">Agregar dirección</a>';
					echo "<script>if (window.confirm('Necesita Agregar una dirección para continuar con la compra')) {window.location.href='agregar-direccion.php';}</script>";
				}else{
					echo '<a href="function/comprar.php">COMPRAR!!</a>';
				}
		    }else{
		    	echo '<a href="inicio-sesion.php">Login</a>';
		    }
	    ?>



	</body>	

</html>