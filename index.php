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
		<script src="js/jquery.slides.min.js"></script>
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
		<meta property="og:description" content="Espacio verde natural, el gusto por lo natural"/>	
		<!--Twitter Cards Tags-->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@PONER TWITTER">
		<meta name="twitter:title" content="Espacio verde natural">
		<meta name="twitter:description" content="Espacio verde natural, el gusto por lo natural">
		<meta name="twitter:creator" content="@PONER TWITTER">
		<meta name="twitter:image:src" content="img/logo-250.png">

		<meta name="description" content="Espacio verde natural, el gusto por lo natural">
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
			<div class="logo">
				<h1><img src="img/evn-gif.gif" alt="Espacio verde natural"></h1>
			</div>
			<div class="cont_color_follow">
				<div class="cont_follow_top">
					<div class="follow_top">
						<div class="sig_top">
							SÍGUENOS
						</div>
						<div class="redestop"><a href="http://www.twitter.com" target="_blank"><img src="img/twitter.png" alt="Twitter"></a><a href="http://www.instagram.com" target="_blank"><img src="img/instagram.png" alt="Instagram"></a><a href="http://www.facebook.com" target="_blank"><img src="img/facebook.png" alt="Facebook"></a></div>
					</div>
				</div>
			</div>
			<div class="ul_menu">
				<nav class="menu_p">
					<div id="menuGrande">
						<ul>
							<li ><a href="index.php" id="menu_inicio">INICIO</a></li>
							<li ><a href="quienes-somos.php" id="menu_quienes">QUIÉNES SOMOS</a></li>
							<li ><a href="nuestros-productos.php" id="menu_prod">NUESTROS PRODUCTOS</a></li>
							<li ><a href="contacto.php" 	id="menu_cont">CONTACTO</a></li>
							<li ><a href="condiciones.php" id="menu_cond">CONDICIONES DE COMPRA</a></li>
							<li ><a href="politicas.php" id="menu_pol">POLÍTICAS DE PRIVACIDAD Y TÉRMINOS DE USO</a></li>
						</ul>
					</div>
					<div id="menuChico">
						<input id="check1" type="checkbox" />
						<label for="check1">
							<img src="img/menu.png" alt="icono">
						</label>
						<div class="menu">
							<ul>
								<li ><a href="index.php" >INICIO</a></li>
								<li ><a href="quienes-somos.php" >QUIÉNES SOMOS</a></li>
								<li ><a href="nuestros-productos.php" >NUESTROS PRODUCTOS</a></li>
								<li ><a href="contacto.php" 	>CONTACTO</a></li>
								<li ><a href="condiciones.php" >CONDICIONES DE COMPRA</a></li>
								<li ><a href="politicas.php" >POLÍTICAS DE PRIVACIDAD Y TÉRMINOS DE USO</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<div class="cont_sesion_top">
				<div class="sesion">
					<a href="registro.php" id="menu_registro">REGISTRO</a>
					<a href="cuenta.php" id="menu_cuenta">MI CUENTA</a>
					<a href="#" id="img_carro" ><img src="img/carro.png" alt="carro"></a>
					<div id="colorNav">
						<ul>
							<li>
								<a href="">CARRO (<?php echo $carrito->articulos_total()?>)</a>
								<?php
	echo '<ul>';
$carro = $carrito->get_content();
if($carro){
	foreach($carro as $producto){

		echo '<li><a href="#">'.$producto["cantidad"].' x '.$producto["nombre"].'</a></li>';
	}

	echo "<li><a>Valor Total: CLP ".number_format($carrito->precio_total(),0,',','.')."</a></li>";
	echo "<li><a><span onclick=\"delall('si')\">Borrar Todo</span></a></li>";
	echo "<li><a href=\"pedido.php\"><button class=\"comprar\">Comprar</button></a></li>";
}
echo '</ul>';
								?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<section class="section">
			<article class="news">

				<div class="noticia" id="slides">
					<img src="img/noticia.png" alt="">
					<img src="img/noticia.png" alt="">
					<img src="img/noticia.png" alt="">
				</div>

			</article>
			<article class="ult_prod">
				<div class="ult_prods">
					<h2 class="ult_prods">ÚLTIMOS PRODUCTOS</h2>
				</div>
				<div class="item_home_index">
					<div itemscope itemtype="http://schema.org/Product">
						<span itemprop="name"><h3 class="item_home">ACEITE PARA MASAJES DE CANNABIS</h3></span>
						<img itemprop="image" class="item_home_img" src="img/4.png" alt="aceite para masajes de cannabis" title="Aceite para masajes de cannabis">
						<div class="text_home">
							<span itemprop="description">
								<h4 class="text_home">Aceite corporal para Masajes con las propiedades del Aceite de Cannabis Sativa, los cuales regeneran y aumentan la resistencia de la piel, otorgando elasticidad y suavidad al tacto, devo...</h4>
							</span>
							<a href="categoria/cosmetica/aceite-para-masajes-de-cannabis.php" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
							<a href="#" class="btn_vermas" onclick="add(1, 1, 19990, 'Producto destacado 1')"><img src="img/agregar.jpg" alt="Agregar"></a>
						</div>
					</div>
				</div>
				<div class="item_home_index">
					<div itemscope itemtype="http://schema.org/Product">
						<span itemprop="name"><h3 class="item_home">ACEITE DE CÁÑAMO GOURMET</h3></span>
						<img itemprop="image" class="item_home_img" src="img/10.png" alt="aceite de canamo" title="Aceite de cáñamo gourmet">
						<div class="text_home">
							<span itemprop="description">
								<h4 class="text_home">Aceite Gourmet 100% puro Semilla de cáñamo. Rico en Omegas 3 - 6 y 9. Ingredientes Aceite de semilla de cáñamo (cannabis sativa, orgánico), menor al 0.4% de acidez. Contenido Neto: 250 ...</h4>
							</span>
							<a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
							<a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
						</div>
					</div>
				</div>
				<div class="item_home_index">
					<div itemscope itemtype="http://schema.org/Product">
						<span itemprop="name"><h3 class="item_home">ROPA</h3></span>
						<img itemprop="image" class="item_home_img" src="img/prod1.png" alt="" >
						<div class="text_home">
							<span itemprop="description">
								<h4 class="text_home">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor</h4>
							</span>
							<a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
							<a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
						</div>
					</div>
				</div>
				<div class="item_home_index">
					<div itemscope itemtype="http://schema.org/Product">
						<span itemprop="name"><h3 class="item_home">CREAM CARAMEL AUTO</h3></span>
						<img itemprop="image" class="item_home_img" src="img/automaticas/cream caramel auto.png" alt="cream caramel auto" title="Cream caramel auto">
						<div class="text_home">
							<span itemprop="description">
								<h4 class="text_home">Cream Caramel: es una verdadera joya, muchas variedades han surgido posteriormente a esta magistral variedad de Sweet Seeds, pero superarla aún sigue siendo arduo propósito. Es una autof...</h4>
							</span>
							<a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
							<a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
						</div>
					</div>
				</div>
				<div class="item_home_index">
					<div itemscope itemtype="http://schema.org/Product">
						<span itemprop="name"><h3 class="item_home">CRITICAL JACK</h3></span>
						<img itemprop="image" class="item_home_img" src="img/automaticas/critical jack.png" alt="critical jack" title="Critical jack">
						<div class="text_home">
							<span itemprop="description">
								<h4 class="text_home">Critical Jack  Automática: Esta variedad es la versión express de la Critical Jack. Necesita 70 días desde que nace de la semilla para completar su ciclo vital y sorprender con sólidos c...</h4>
							</span>
							<a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
							<a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
						</div>
					</div>
				</div>
				<div class="item_home_index">
					<div itemscope itemtype="http://schema.org/Product">
						<span itemprop="name"><h3 class="item_home">ROPA</h3></span>
						<img itemprop="image" class="item_home_img" src="img/prod1.png" alt="" >
						<div class="text_home">
							<span itemprop="description">
								<h4 class="text_home">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor</h4>
							</span>
							<a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
							<a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
						</div>
					</div>
				</div>
				<div class="item_home_index">
					<div itemscope itemtype="http://schema.org/Product">
						<span itemprop="name"><h3 class="item_home">ROPA</h3></span>
						<img itemprop="image" class="item_home_img" src="img/prod1.png" alt="" >
						<div class="text_home">
							<span itemprop="description">
								<h4 class="text_home">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor</h4>
							</span>
							<a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
							<a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
						</div>
					</div>
				</div>
				<div class="item_home_index">
					<div itemscope itemtype="http://schema.org/Product">
						<span itemprop="name"><h3 class="item_home">ROPA</h3></span>
						<img itemprop="image" class="item_home_img" src="img/prod1.png" alt="" >
						<div class="text_home">
							<span itemprop="description">
								<h4 class="text_home">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor</h4>
							</span>
							<a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
							<a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
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
					<div class="follow_text">Espacio verde natural, el gusto por lo natural.</div>
					<div class="sig_foot">
						SÍGUENOS
					</div>
					<div class="tw_pie"><a href="http://www.twitter.com" target="_blank"><img src="img/twitter.png" alt="Twitter"></a><a href="http://www.instagram.com" target="_blank"><img src="img/instagram.png" alt="Instagram"></a><a href="http://www.facebook.com" target="_blank"><img src="img/facebook.png" alt="Facebook"></a></div>
				</div>
				<div class="soporte">
					<div class="title_sop">SOPORTE</div>
					<div class="cond_sop"><a href="condiciones.php#condiciones" id="link_footer">Condiciones de compra</a></div>
					<div class="cond_sop"><a href="politicas.php#politicas" id="link_footer">Políticas de privacidad</a></div>
					<div class="cond_sop"><a href="politicas.php#politicas" id="link_footer">Términos de uso</a></div>
					<div class="cond_sop_1"><a href="politicas.php#preguntas-frecuentes" id="link_footer">Preguntas frecuentes</a></div>
				</div>
				<div class="contacto">
					<div itemscope itemtype="http://schema.org/LocalBusiness">
						<div class="title_cont">CONTÁCTANOS</div>
						<div class="cont_mail"><img src="img/mail.png" alt="Correo">&nbsp;<a href="mailto:ventas@espacioverdenatural.cl"><span itemprop="email">ventas@espacioverdenatural.cl</span></a></div>
						<div class="cont_mail"><img src="img/telefono.png" alt="Telefono">&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:+56226995942"><span itemprop="telephone">02/26995942</span></a></div>
						<div class="cont_mail"><img src="img/celu.png" alt="Celular">&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:+56961400225"><span itemprop="telephone">6-1400225</span></a>&nbsp;/&nbsp;<a href="tel:+56968358062"><span itemprop="telephone">6-8358062</span></a></div>
						<div class="cont_mail"><span itemprop="streetAddress">Huérfanos 1044</span>, oficina 905, <span itemprop="addressLocality">Santiago Centro.</span></div>                      
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>