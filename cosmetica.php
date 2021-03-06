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
		<title>Cosmética - EVN</title>
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
							<li ><a href="contacto.php"     id="menu_cont">CONTACTO</a></li>
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
								<li ><a href="contacto.php"     >CONTACTO</a></li>
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
		<div class="wrapcenter">

			<div id="menuChicoC">
				<input id="check2" type="checkbox" />
				<label for="check2">
					MENÚ CATEGORÍAS
				</label>
				<div class="menu_1">
					<ul>
						<li><a href="semillas-feminizadas.php" ><h2 class="seo">SEMILLAS FEMINIZADAS</h2></a></li>
						<li><a href="semillas-automaticas.php" ><h2 class="seo">SEMILLAS AUTOMÁTICAS</h2></a></li>
						<li><a href="fertilizantes.php" ><h2 class="seo">FERTILIZANTES</h2></a></li>
						<li><a href="vestuario.php"     ><h2 class="seo">VESTUARIO Y ACCESORIOS</h2></a></li>
						<li><a href="parafernalia.php"><h2 class="seo">&#43;&nbsp;PARAFERNALIA</h2></a></li>
						<li><a href="cosmetica.php"><h2 class="seo">COSMÉTICA</h2></a></li>
					</ul>
				</div>
			</div>
			<div class="cont_aside">
				<aside class="cat">
					<nav class="cat_1">
						<ul id="cat-nav">
							<li class="title_cat">&nbsp;CATEGORÍAS</li>
							<li><a href="semillas-feminizadas.php"><h2 class="seo">&#43;&nbsp;SEMILLAS FEMINIZADAS</h2></a></li>
							<li><a href="semillas-automaticas.php"><h2 class="seo">&#43;&nbsp;SEMILLAS AUTOMÁTICAS</h2></a></li>
							<li><a href="fertilizantes.php"><h2 class="seo">&#43;&nbsp;FERTILIZANTES</h2></a></li>
							<li><a href="vestuario.php"><h2 class="seo">&#43;&nbsp;VESTUARIO Y ACCESORIOS</h2></a></li>
							<li><a href="parafernalia.php"><h2 class="seo">&#43;&nbsp;PARAFERNALIA</h2></a></li>
							<li class="li_cos"><a href="cosmetica.php"><h2 class="seo">&#43;&nbsp;COSMÉTICA</h2></a></li>
						</ul>
					</nav>
				</aside>
			</div>
			<div class="cont_prod">
				<section class="productos">
					<div class="title_seccion"><strong class="seo">COSMÉTICA</strong></div>
					<div class="item_home">
						<div itemscope itemtype="http://schema.org/Product">
							<h3 class="item_home_cat"><span itemprop="name">CREMA FACIAL DE CANNABIS</span></h3>
							<img itemprop="image" class="img_productos" src="img/cosmeticaV2/crema-facial.JPG" alt="crema de cannabis" title="Crema facial de cannabis">
							<div class="text_home">
								<h4 class="text_home">
									<span itemprop="description">
										Crema Facial Hidratante y Nutritiva , con Aceite de Cannabis Sativa 100 % puro, rico en Ácidos Grasos esenciales, Omega 3, Omega 6 y Acido Linoleico que previenen el envejecimiento prema...
									</span>
								</h4>
								<a href="categoria/cosmetica/crema-facial-de-cannabis.php" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
								<a href="#" class="btn_vermas" onclick="add(1, 1, 12900, 'CREMA FACIAL DE CANNABIS')"><img src="img/agregar.jpg" alt="Agregar"></a>
							</div>
						</div>
					</div>
					<div class="item_home">
						<div itemscope itemtype="http://schema.org/Product">
							<h3 class="item_home_cat"><span itemprop="name">SERUM CONTORNO DE OJOS</span></h3>
							<img itemprop="image" class="img_productos" src="img/cosmeticaV2/contorno-de-ojos.JPG" alt="serum contorno de ojos" title="Serum contorno de ojos">
							<div class="text_home">
								<h4 class="text_home">
									<span itemprop="description">
										Actúa en forma Antiedematosa, restaurando los signos propios del envejecimiento y micro agresiones del área del ojo, ayudando a la flacidez, descongestionando bolsas y ojeras, reforzando...
									</span>
								</h4>
								<a href="categoria/cosmetica/serum-contorno-de-ojos.php" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
								<a href="#" class="btn_vermas" onclick="add(2, 1, 12500, 'SERUM CONTORNO DE OJOS')"><img src="img/agregar.jpg" alt="Agregar"></a>
							</div>
						</div>
					</div>
					<div class="item_home">
						<div itemscope itemtype="http://schema.org/Product">
							<h3 class="item_home_cat"><span itemprop="name">CREMA MANOS Y CUERPO DE CANNABIS</span></h3>
							<img itemprop="image" class="img_productos" src="img/3.png" alt="crema manos y cuerpo de cannabis" title="Crema manos y cuerpo de cannabis">
							<div class="text_home">
								<h4 class="text_home">
									<span itemprop="description">
										Especialmente formulada para proteger su piel otorgando suavidad, humectación e hidratación dada la presencia de Ácidos Grasos esenciales contenidos en el Aceite de Cannabis Sativa OMEGA...
									</span>    
								</h4>
								<a href="categoria/cosmetica/crema-manos-y-cuerpo-de-cannabis.php" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
								<a href="#" class="btn_vermas" onclick="add(3, 1, 8500, 'CREMA MANOS Y CUERPO DE CANNABIS')"><img src="img/agregar.jpg" alt="Agregar"></a>
							</div>
						</div>
					</div>
					<div class="item_home">
						<div itemscope itemtype="http://schema.org/Product">
							<h3 class="item_home_cat"><span itemprop="name">ACEITE PARA MASAJES DE CANNABIS</span></h3>
							<img itemprop="image" class="img_productos" src="img/cosmeticaV2/aceite-corporal.JPG" alt="aceite para masajes de cannabis" title="Aceite para masajes de cannabis">
							<div class="text_home">
								<h4 class="text_home">
									<span itemprop="description">
										Aceite corporal para Masajes con las propiedades del Aceite de Cannabis Sativa, los cuales regeneran y aumentan la resistencia de la piel, otorgando elasticidad y suavidad al tacto, devo...
									</span> 
								</h4>   
								<a href="categoria/cosmetica/aceite-para-masajes-de-cannabis.php" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
								<a href="#" class="btn_vermas" onclick="add(4, 1, 8500, 'ACEITE PARA MASAJES DE CANNABIS')"><img src="img/agregar.jpg" alt="Agregar"></a>
							</div>
						</div>
					</div>
					<div class="item_home">
						<div itemscope itemtype="http://schema.org/Product">
							<h3 class="item_home_cat"><span itemprop="name">ACEITE DE CANNABIS</span></h3>
							<img itemprop="image" class="img_productos" src="img/5.png" alt="aceite de cannabis" title="Aceite de cannabis">
							<div class="text_home">
								<h4 class="text_home">
									<span itemprop="description">    
										Aceite de cáñamo especialmente indicado para pieles secas y/o agrietadas, mantiene hidratada la piel de cutis, manos y cuerpo, restaura los aceites naturales de la piel, rico en aceites ...
									</span>    
								</h4>
								<a href="categoria/cosmetica/aceite-de-cannabis.php" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
								<a href="#" class="btn_vermas" onclick="add(5, 1, 9900, 'ACEITE DE CANNABIS')"><img src="img/agregar.jpg" alt="Agregar"></a>
							</div>
						</div>
					</div>
					<div class="item_home">
						<div itemscope itemtype="http://schema.org/Product">
							<h3 class="item_home_cat"><span itemprop="name">SHAMPOO Y ACONDICIONADOR</span></h3>
							<img itemprop="image" class="img_productos" src="img/6.png" alt=" shampoo y acondicionador de cannabis" title="Shampoo y acondicionador de cannabis">
							<div class="text_home">
								<h4 class="text_home">
									<span itemprop="description">
										Shampoo Hidratante del cabello, con Aceite de Cannabis Sativa 100% puro, rico en Omega 3 y 6, previene el resecamiento del cuero cabelludo, ayuda a prevenir la caspa. Por su PH neutro es...
									</span>
								</h4>
								<a href="categoria/cosmetica/shampoo-y-acondicionador.php" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
								<a href="#" class="btn_vermas" onclick="add(6, 1, 4500, 'SHAMPOO Y ACONDICIONADOR')"><img src="img/agregar.jpg" alt="Agregar"></a>
							</div>
						</div>
					</div>
					<div class="item_home">
						<div itemscope itemtype="http://schema.org/Product">
							<h3 class="item_home_cat"><span itemprop="name">GEL DE BAÑO DE CANNABIS</span></h3>
							<img itemprop="image" class="img_productos" src="img/cosmeticaV2/gel-de-ba%C3%B1o.JPG" alt="gel de bano" title="Gel de baño de cannabis">
							<div class="text_home">
								<h4 class="text_home">
									<span itemprop="description">
										Producto enriquecido con Aceite 100% puro de Cannabis Sativa, el cual provoca en su piel hidratación y nutrición dejándola suave y confortable durante todo el día. PH neutro para uso fam...
									</span>
								</h4>
								<a href="categoria/cosmetica/gel-de-bano-de-cannabis.php" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
								<a href="#" class="btn_vermas" onclick="add(7, 1, 4500, 'GEL DE BAÑO DE CANNABIS')"><img src="img/agregar.jpg" alt="Agregar"></a>
							</div>
						</div>
					</div>
					<div class="item_home">
						<div itemscope itemtype="http://schema.org/Product">
							<h3 class="item_home_cat"><span itemprop="name">JABÓN DE CANNABIS</span></h3>
							<img itemprop="image" class="img_productos" src="img/cosmeticaV2/jabon-barra.JPG" alt="jabon de cannabis" title="Jabón de cannabis">
							<div class="text_home">
								<h4 class="text_home">
									<span itemprop="description">
										Jabón de Cannabis elaborado a base de aceite de semilla de cáñamo 100% puro, cuyos componentes naturales como Omega 3 y Omega 6 regeneran y aumentan la resistencia y elasticidad de la pi...
									</span>
								</h4>
								<a href="categoria/cosmetica/jabon-de-cannabis.php" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
								<a href="#" class="btn_vermas" onclick="add(8, 1, 3500, 'JABÓN DE CANNABIS')"><img src="img/agregar.jpg" alt="Agregar"></a>
							</div>
						</div>
					</div>
					<div class="item_home">
						<div itemscope itemtype="http://schema.org/Product">
							<h3 class="item_home_cat"><span itemprop="name">EXFOLIANTE DE CANNABIS</span></h3>
							<img itemprop="image" class="img_productos" src="img/9.png" alt="exfoliante de cannabis" title="Exfoliante de cannabis">
							<div class="text_home">
								<h4 class="text_home">
									<span itemprop="description">
										Exfoliante de cáñamo limpia y suaviza profundamente la piel, impidiendo la acomulación de toxinas, acelera la circulación sanguínea, aumenta la oxigenación de la piel, mejora la absorció...
									</span>
								</h4>
								<a href="categoria/cosmetica/exfoliante-de-cannabis.php" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
								<a href="#" class="btn_vermas" onclick="add(9, 1, 3900, 'EXFOLIANTE DE CANNABIS')"><img src="img/agregar.jpg" alt="Agregar"></a>
							</div>
						</div>
					</div>
					<div class="item_home">
						<div itemscope itemtype="http://schema.org/Product">
							<h3 class="item_home_cat"><span itemprop="name">ACEITE DE CÁÑAMO GOURMET</span></h3>
							<img itemprop="image" class="img_productos" src="img/cosmeticaV2/aceite-gourmet.JPG" alt="aceite de canamo" title="Aceite de cáñamo gourmet">
							<div class="text_home">
								<h4 class="text_home">
									<span itemprop="description">
										Aceite Gourmet 100% puro Semilla de cáñamo. Rico en Omegas 3 - 6 y 9. Ingredientes Aceite de semilla de cáñamo (cannabis sativa, orgánico), menor al 0.4% de acidez. Contenido Neto: 250 ...
									</span>
								</h4>
								<a href="categoria/cosmetica/aceite-de-canamo-gourmet.php" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
								<a href="#" class="btn_vermas" onclick="add(10, 1, 12900, 'ACEITE DE CÁÑAMO GOURMET')"><img src="img/agregar.jpg" alt="Agregar"></a>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
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
