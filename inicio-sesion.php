<?php
include 'function/carrito.php';

include 'function/conexion.php';

if(isset($_SESSION['usuario'])){
	echo "<script>location.href='cuenta.php';</script>";
}

?>
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
    <title>Iniciar sesión - EVN</title>
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
        <section>
        <article>
    	   <fieldset id="login_cliente">
            <div id="data1"></div>
            <legend>Iniciar sesión</legend>
    		<form id="logincliente" name="logincliente" method="post" action="function/logincliente.php">
    			<label id="mail_label" for="mail"><span>E-mail</span>
                    <input id="mail" class="text-input" name="mail" type="text" />
                </label> 	 
    	      	<label id="pass_label" for="pass"><span>Contraseña</span>
                    <input id="pass" class="text-input" name="pass" type="password" />
                </label>
    	     	<input id="submit_cliente" class="button" name="submit" type="submit" value="Ingresar" />
    		</form>			
    	   </fieldset>
        </article> 
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
                <div class="tw_pie"><a href="http://www.twitter.com" target="_blank"><img src="img/twitter.png" alt="Twitter"></a><a href="http://www.instagram.com" target="_blank"><img src="img/instagram.png" alt="Instagram"></a><a href="http://www.facebook.com" target="_blank"><img src="img/facebook.png" alt="Facebook"></a></div>
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