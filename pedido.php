<?php
    include 'function/carrito.php';
    include 'function/conexion.php';
?>
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
        <section class="condic">
			<?php
				$carro = $carrito->get_content();
						if($carro){
							echo "<div class=\"title_condic\"><h3>LISTA DE PRODUCTOS</h3></div>";
							echo "<div id='tabla' class=\"texto_ped\">";
									echo "<div id='cont_pedido'>";
										echo "<div id='img_ped'>foto</div>";#td espacio vacio
										echo "<div id='nombre_ped'>Nombre</div>";
										echo "<div id='cant_ped'>Cantidad</div>";
										echo "<div id='valor_ped'>Precio</div>";
										echo "<div id='total_ped'>Total</div>";
										echo "<div id='borrar_ped'>Borrar</div>";
										echo "</div>";#tr
                                        echo "<br><br>";
						    foreach($carro as $producto)
						    {
						        echo "<div id='cont_ped_det'>";
							        echo '<div id="img_ped"><img width="70px" height="70px" src="img/'.$producto["id"].'.png"></div>';
							        echo '<div id="nombre_ped" class="nombre_ped">'.$producto["nombre"].'</div>';
							        echo '<div id="cant_ped" class="nombre_ped">'.$producto["cantidad"].'<br>';
							       if($producto["cantidad"]>1){
                                        echo '<a href="#"><span onclick="add('.$producto["id"].', -1, -'.$producto["precio"].', \''.$producto["nombre"].'\')")"><img src="img/rest_icon.png" alt=""> </span></a>';
                                   }
                                    echo '<a href="#" ><span onclick="add('.$producto["id"].', 1, '.$producto["precio"].', \''.$producto["nombre"].'\')"> <img src="img/pluss_icon.png" alt=""></span></a>';
							        echo '</div>';
							        echo '<div id="valor_ped" class="nombre_ped">'.number_format($producto["precio"],0,',','.').'</div>';
							        echo '<div id="total_ped" class="nombre_ped">'.number_format($producto["cantidad"]*$producto["precio"],0,',','.').'</div>';
							        echo '<div id="borrar_ped" class="nombre_ped"><a href="#"><span onclick="del(\''.$producto["unique_id"].'\')"><img src="img/x_icon.png" alt=""></span></a></div><br><br>';
						        echo '</div>';#tr
						    }
                echo "<div id='total_pedido'>";
    				echo "<div id='total_pedido_1'>";
    				echo "<div>Total  ".number_format($carrito->precio_total(),0,',','.')."</div>";
    				echo "</div>";#tr
    				echo "</div>";#tabla
                echo "</div>";
						}else{
							echo "<h2><div class=\"title_condic\">No tiene productos en su carro.<br><br></div></h2>";
						}	
			?>
		<div class="btn_mod"><br><a href="nuestros-productos.php">Ver Catálogo</a><br><br></div>
	    <?php 
		    if(@$_SESSION["usuario"]){
		    	echo "<div class=\"title_condic\">Sus Datos</div>";
                echo "<div class=\"btn_mod\">";
				echo '<a href="function/logout.php">SALIR</a>';
                echo "</div>";
				echo '<br>';
				$sql1 = "SELECT usuario.usu_id, usu_nombre, usu_fono, usu_mail, usu_edad FROM usuario WHERE usuario.usu_id = ".$_SESSION["usuario"];
				$consulta1 = mysql_query($sql1);
				$dato1 = mysql_fetch_array($consulta1);
                echo "<div class=\"btn_mod\">";
				echo '<a href="tus-datos.php">Modifica tus datos</a>';
                echo "</div>";
				echo '<br>';
                echo "<div class=\"title_condic_1\">";
				echo 'Nombre: '.$dato1["usu_nombre"];
				echo '<br>';
				echo 'Telefono: '.$dato1["usu_fono"];
				echo '<br>';
				echo 'E-mail: '.$dato1["usu_mail"];
				echo '<br>';
				echo 'Edad: '.$dato1["usu_edad"];
				echo '<br>';
                echo "</div>";
				$dato2 = mysql_fetch_array(mysql_query("SELECT dir_id, usu_id, dir_direccion, com_id FROM direccion WHERE usu_id = ".$dato1["usu_id"]));
				if ($dato2['dir_direccion']=='Sin definir'){
					echo 'Debe registrar su dirección antes de comprar<br>';
					echo '<a href="agregar-direccion.php">Agregar dirección</a>';
					echo "<script>if (window.confirm('Necesita Agregar una dirección para continuar con la compra')) {window.location.href='agregar-direccion.php';}</script>";
				}else{
                    echo "<div class=\"btn_mod\">";
					echo '<a href="function/comprar.php">Confirma tu compra</a>';
                    echo "</div><br><br>";
				}
		    }else{
		    	echo '<div class="btn_mod"><br><a href="inicio-sesion.php">Login</a></div><br><br><br><br>';
		    }
	    ?>
        </section>
        <footer class="pie">
                <div class="cont_pie">
                    <div class="logo_pie">
                        <img src="img/logo-footer.png" alt="Espacio verde natural">
                    </div>
                    <div class="follow_pie">
                        <div class="follow_text">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias</div>
                        <div class="sig_foot">
                            SÍGUENOS
                        </div>
                        <div class="tw_pie"><a href=""><img src="img/twitter.png" alt="Twitter"></a><a href=""><img src="img/instagram.png" alt="Instagram"></a><a href=""><img src="img/facebook.png" alt="Facebook"></a></div>
                    </div>
                    <div class="soporte">
                        <div class="title_sop">SOPORTE</div>
                        <div class="cond_sop"><a href="condiciones.php" id="link_footer">Condiciones de compra</a></div>
                        <div class="cond_sop"><a href="politicas.php" id="link_footer">Políticas de privacidad</a></div>
                        <div class="cond_sop"><a href="politicas.php" id="link_footer">Términos de uso</a></div>
                        <div class="cond_sop_1"><a href="politicas.php" id="link_footer">Preguntas frecuentes</a></div>
                    </div>
                    <div class="contacto">
                        <div itemscope itemtype="http://schema.org/LocalBusiness">
                            <div class="title_cont">CONTÁCTANOS</div>
                            <div class="cont_mail"><img src="img/mail.png" alt="Correo">&nbsp;<span itemprop="email">ventas@espacioverdenatural.cl</span></div>
                            <div class="cont_mail"><img src="img/telefono.png" alt="Telefono">&nbsp;&nbsp;&nbsp;&nbsp;<span itemprop="telephone">02/26995942</span></div>
                            <div class="cont_mail"><img src="img/celu.png" alt="Celular">&nbsp;&nbsp;&nbsp;&nbsp;<span itemprop="telephone">6-1400225 / 6-8358062</span></div>                      
                            <div class="cont_mail"><span itemprop="streetAddress">Huérfanos 1044</span>, oficina 905, <span itemprop="addressLocality">Santiago Centro.</span></div>                      
                        </div>
                    </div>
                </div>
        </footer>  


	</body>	

</html>