<?php include 'function/carrito.php';?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link href="img/logo-250.png" rel="icon" type="image/x-icon" /><!--faltafavicon -->
    <link href="img/logo-250.png" type="image/x-icon" rel="shortcut icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espacio verde natural</title>
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

<!-- Script GA-->
<!--
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42768469-3', 'auto');
  ga('send', 'pageview');

</script>
-->
</head>
<body>
		<header class="header">
			<div class="redes_top">
				<div class="red_top">
					<li id="follow">SÍGUENOS</li>
					<a href="#"><img src="img/twitter.png" alt="twitter"></a>
					<a href="#"><img src="img/instagram.png" alt="instagran"></a>
					<a href="#"><img src="img/facebook.png" alt="facebook"></a>
				</div>
			</div>
			
			
			<div class="ul_menu">
				<nav class="menu_p">
					<div id="menuGrande">
						<ul>
							<li ><a href="" id="menu_inicio">INICIO</a></li>
							<li ><a href="" id="menu_quienes">QUIENES SOMOS</a></li>
							<li ><a href="" id="menu_prod">NUESTROS PRODUCTOS</a></li>
							<li ><a href="contacto.html" 	id="menu_cont">CONTACTO</a></li>
							<li ><a href="" id="menu_cond">CONDICIONES DE COMPRA</a></li>
							<li ><a href="" id="menu_pol">POLÍTICAS DE PRIVACIDAD Y TÉRMINOS DE USO</a></li>
						</ul>
					</div>
					<div id="menuChico">
					<input id="check1" type="checkbox" />
			        <label for="check1">
			            <img src="img/menu.png" alt="icono">
			        </label>
			        <div class="menu">
						<ul>
							<li ><a href="" id="menu_inicio">INICIO</a></li>
							<li ><a href="" id="menu_quienes">QUIENES SOMOS</a></li>
							<li ><a href="" id="menu_prod">NUESTROS PRODUCTOS</a></li>
							<li ><a href="contacto.html" 	id="menu_cont">CONTACTO</a></li>
							<li ><a href="" id="menu_cond">CONDICIONES DE COMPRA</a></li>
							<li ><a href="" id="menu_pol">POLÍTICAS DE PRIVACIDAD Y TÉRMINOS DE USO</a></li>
						</ul>
					</div>
					</div>
				</nav>
			</div>
	
			
				<div class="logo">
					<h1><img src="img/logo-500.png" alt="Espacio verde natural"></h1>
				</div>

			<div class="sesion">
				<a href="#" id="menu_registro">REGISTRO</a>
				<a href="#" id="menu_cuenta">MI CUENTA</a>
				
				<div id="colorNav">
					<ul>
						<li>
							<a href="">Carro (<?php echo $carrito->articulos_total()?>)</a>
							<?php
								echo '<ul>';
								$carro = $carrito->get_content();
								if($carro){
								    foreach($carro as $producto){
								    	
								        echo '<li><a href="#">'.$producto["cantidad"].' x '.$producto["nombre"].'</a></li>';
								    }
								    
									echo "<li><a>Valor Total: CLP ".number_format($carrito->precio_total(),0,',','.')."</a></li>";
									echo "<li><a><span onclick=\"delall('si')\">Borrar Todo</span></a></li>";
									echo "<li><a href=\"venta.php\"><button class=\"comprar\">Modificar y Compra</button></a></li>";
								}
								echo '</ul>';
							?>
						</li>
					</ul>
				</div>
			</div>
		</header>
		<section class="section">
			<article class="news">
				<div class="noticia">
					<img src="img/noticia.png" alt="news">
				</div>
			</article>
			<article class="ult_prod">
				<div class="ult_prods">
					<h2 class="ult_prods">ÚLTIMOS PRODUCTOS</h2>
				</div>
				<div class="item_home">
						<h3 class="item_home">ROPA</h3>
						<img src="img/prod1.png" alt="">
					<div class="text_home">
						<h4 class="text_home">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor</h4>
						<div class="img_vermas">
							<a href="#"><img src="img/vermas.png" alt="Ver mas" onclick="add(1, 1, 19990, 'Producto destacado 1')"></a>
						</div>
					</div>
				</div>
				<div class="item_home">
						<h3 class="item_home">ROPA</h3>
						<img src="img/prod1.png" alt="">
					<div class="text_home">
						<h4 class="text_home">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor</h4>
						<div class="img_vermas">
							<a href="#"><img src="img/vermas.png" alt="Ver mas"></a>
						</div>
					</div>
				</div>
				<div class="item_home">
						<h3 class="item_home">ROPA</h3>
						<img src="img/prod1.png" alt="">
					<div class="text_home">
						<h4 class="text_home">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor</h4>
						<div class="img_vermas">
							<a href="#"><img src="img/vermas.png" alt="Ver mas"></a>
						</div>
					</div>
				</div>
				<div class="item_home">
						<h3 class="item_home">ROPA</h3>
						<img src="img/prod1.png" alt="">
					<div class="text_home">
						<h4 class="text_home">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor</h4>
						<div class="img_vermas">
							<a href="#"><img src="img/vermas.png" alt="Ver mas"></a>
						</div>
					</div>
				</div>
				<div class="item_home">
						<h3 class="item_home">ROPA</h3>
						<img src="img/prod1.png" alt="">
					<div class="text_home">
						<h4 class="text_home">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor</h4>
						<div class="img_vermas">
							<a href="#"><img src="img/vermas.png" alt="Ver mas"></a>
						</div>
					</div>
				</div>
				<div class="item_home">
						<h3 class="item_home">ROPA</h3>
						<img src="img/prod1.png" alt="">
					<div class="text_home">
						<h4 class="text_home">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor</h4>
						<div class="img_vermas">
							<a href="#"><img src="img/vermas.png" alt="Ver mas"></a>
						</div>
					</div>
				</div>
				<div class="item_home">
						<h3 class="item_home">ROPA</h3>
						<img src="img/prod1.png" alt="">
					<div class="text_home">
						<h4 class="text_home">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor</h4>
						<div class="img_vermas">
							<a href="#"><img src="img/vermas.png" alt="Ver mas"></a>
						</div>
					</div>
				</div>
				<div class="item_home">
						<h3 class="item_home">ROPA</h3>
						<img src="img/prod1.png" alt="">
					<div class="text_home">
						<h4 class="text_home">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor</h4>
						<div class="img_vermas">
							<a href="#"><img src="img/vermas.png" alt="Ver mas"></a>
						</div>
					</div>
				</div>												
			</article>
		</section>
		<footer class="pie">
			<div class="cont_pie">
				<div class="logo_pie">
					<img src="img/logo-footer.png" alt="Espacio verde natural">
				</div>
				<div class="follow_pie">
					<div class="follow_text">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias</div>
					<ul id="follow_pie_ul">
						<li>SÍGUENOS</li>
						<li><a href="#"><img src="img/twitter.png" alt="Twitter"></a></li>
						<li><a href="#"><img src="img/instagram.png" alt="Instagram"></a></li>
						<li><a href="#"><img src="img/facebook.png" alt="Facebook"></a></li>
					</ul>
				</div>
			</div>
		</footer>
</body>
</html>