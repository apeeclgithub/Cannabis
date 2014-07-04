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
		<div>
			<ul class="carro">
				<li class="item"><a href="#">Carrito: <span><?php echo $carrito->articulos_total()?></span></a>
					<?php
						echo '<ul>';
						$carro = $carrito->get_content();
						if($carro){
						    foreach($carro as $producto)
						    {
						    	
						        echo '<li><a href="#">'.$producto["cantidad"].' x '.$producto["nombre"].'<span onclick="del(\''.$producto["unique_id"].'\')">x</span></a></li>';

						    }
						    
						echo "<li><a href=\"#\">Valor Total: CLP ".$carrito->precio_total()." <span onclick=\"delall('si')\">Borrar Todo</span></a></li>";
						}
						echo '</ul>';
					?>	
				</li>
			</ul>

			
	
		</div>

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
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.carro > li > ul'),
	           menu_a  = $('.carro > li > a'),
	           menu_ul_a = $('.carro > li > ul > li');
	    
	    menu_ul.hide();
	
	    menu_a.mouseenter(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {

	        }

	    });
	    menu_ul.mouseleave(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	        	menu_ul.removeClass('active');
				menu_a.removeClass('active');
				menu_ul.filter(':visible').slideUp('normal');
	            $(this).next().stop(true,true).slideUp('normal');
	        } else {

	        }

	    });


	
	});
</script>
	</body>
</html>