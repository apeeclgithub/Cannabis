<?php
	include 'function/carrito.php';
	
?>
<!DOCTYPE html>
<html lang="es">
	<head>

		<meta charset="UTF-8">
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/script.js" type="text/javascript"></script>
	</head>
	<body>
		<span class="item">
			Articulos: <span id="carrito"><?php echo $carrito->articulos_total();
			echo "<hr />";
			echo 'Precio: '.$carrito->precio_total();
			echo "<hr />";
			$carro = $carrito->get_content();
			if($carro){
			    foreach($carro as $producto)
			    {
			        echo 'Articulo: '.$producto["nombre"]."<span class=\"derecha\"><a href=\"#\" onclick=\"del('".$producto["unique_id"]."')\">X</a>&nbsp;</span>";
			        echo "<br />";
			        echo 'Cantidad: '.$producto["cantidad"];
			        echo "<br />";
			        echo 'Valor: '.$producto["precio"];
			        echo "<br />";
			        echo 'Total: '.$producto['cantidad']*$producto['precio'];
			        echo "<hr />";
			    }
			echo "<center><a href=\"#\" onclick=\"delall('si')\">Borrar Carrito</a></center>";
			}
			?></span>
		</span>

		<span item="item">
			
		</span>
		<div class="item">
			<div class="bloque">
				<img class="img-item" src="img/prod1.jpg" />
				<div class="article">
					<center><a href="ver.html">+</a></center>
				</div>
			</div>
			<div class="text">
				<h3>Producto destacado 1<span class="derecha">CLP: 19.990</span></h3>
				<center><button class="agregar" onclick="add(1, 1, 19990, 'Producto destacado 1')">Agregar</button></center>
			</div>
		</div>

		<div class="item">
			<div class="bloque">
				<img class="img-item" src="img/prod2.jpg" />
				<div class="article">
					<center><a href="ver.html">+</a></center>
				</div>
			</div>
			<div class="text">
				<h3>Producto destacado 2<span class="derecha">CLP: 590</span></h3>
				<center><button class="agregar" onclick="add(2, 1, 590, 'Producto destacado 2')">Agregar</button></center>
			</div>
		</div>

		<div class="item">
			<div class="bloque">
				<img class="img-item" src="img/prod3.jpg" />
				<div class="article">
					<center><a href="ver.html">+</a></center>
				</div>
			</div>
			<div class="text">
				<h3>Producto destacado 3<span class="derecha">CLP: 990</span></h3>
				<center><button class="agregar" onclick="add(3, 1, 990, 'Producto destacado 3')">Agregar</button></center>
			</div>
		</div>

		<div class="item">
			<div class="bloque">
				<img class="img-item" src="img/prod4.jpg" />
				<div class="article">
					<center><a href="ver.html">+</a></center>
				</div>
			</div>
			<div class="text">
				<h3>Producto destacado 4<span class="derecha">CLP: 599.990</span></h3>
				<center><button class="agregar" onclick="add(4, 1, 599990, 'Producto destacado 4')">Agregar</button></center>
			</div>
		</div>

	</body>
</html>