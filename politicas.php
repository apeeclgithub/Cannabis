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
    <title>Políticas de privacidad - EVN</title>
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
            <article >
                <div class="title_condic"><h2>POLÍTICAS DE PRIVACIDAD Y TÉRMINOS DE USO</h2></div>
                <div class="texto_condic">
                    Espacio verde natural es un sitio dedicado a la venta de productos cosméticos de cannabis libres de THC, semillas de colección, productos de jardinería  y variedades de artículos de colección. La comercialización de semillas de cannabis tiene como único fin la colección de estas.
                    <br><br>
                    <div class="condic_thx">PREGUNTAS FRECUENTES</div>
                    <br><br>
                    <div class="condic_thx">¿Por qué ESPACIO VERDE NATURAL?</div><br><br>
                    Porque somos una empresa emergente y la calidad es nuestra principal prioridad, si quieres algo excelente debes comprar en espacio verde natural. 
                    <br><br>
                    <div class="condic_thx">¿Cómo puedo comprar en Espacio Verde Natural?</div>
                    <br><br>
                    Hay múltiples opciones, puedes agregarnos a facebook, twitter o whatsapp y contactarte allí con un vendedor, también puedes acceder a nuestra página, donde tendrás el sistema de “carrito virtual”, podrás agregar cuantos productos quieras a tu carrito virtual, una ves terminado pinchas en pagar y tendrás la opción de pagar con tarjeta, deposito bancario o dirigirte a una de nuestras tiendas.
                    <br><br>
                    <div class="condic_thx">Aviso legal</div>
                    <br><br>
                    Para poder visitar y comprar en nuestra página web se requiere ser mayor de edad, es decir, tener más de 18 años. Quienes compren o visiten desde el extranjero deben tener mayoría de edad legal en su país de origen.
                    <br><br>
                    Espacio Verde Natural es un sitio dedicado a la venta de productos cosméticos de cannabis libres de THC, semillas de colección, productos de jardinería y variedades de artículos y accesorios derivados del cáñamo.
                    <br><br>
                    La legislación vigente en Chile No sanciona la posesión, venta y transporte de semillas de cannabis.Espacio Verde Natural se NEGARÁ a la venta de semillas de esta variedad a quienes nos den razones para creer que las germinarán y cultivarán, por tanto exigimos que conozca la regulación legal vigente.
                    <br><br>
                    La Convención Única de 1961 de las Naciones Unidas sobre Estupefacientes, ratificada en Chile por el Decreto N° 35, publicado en el Diario Oficial de Chile el 16 enero 1968, excluye a las semillas de cáñamo o cannabis de su regulación y señala como concepto de cannabis en el Art. 1 n° 1 letra b) lo siguiente:
                    <br><br>
                    “Por “cannabis” se entiende las sumidades, floridas o con fruto, de la planta de la cannabis (a excepción de las semillas y las hojas no unidas a las sumidades) de las cuales no se ha extraído la resina, cualquiera que sea el nombre con que se las designe.”
                    <br><br>
                    Dicha Convención, en su Art.28, establece que:
                    <br><br>
                    “La presente Convención no se aplicará al cultivo de la planta de cannabis destinado exclusivamente a fines industriales (fibra y semillas) u hortícolas”.
                    <br><br>
                    Espacio Verde Natural no desea inducir a nadie a actuar en contra de la ley 20.000 y bajo ninguna circunstancia promoverá o incitará el cultivo de Cannabis y tampoco nos haremos responsables por el mal uso que se les dé a las semillas.Todas las personas que adquieran semillas en este sitio, son responsables de sus acciones. Espacio Verde Natural no se hace responsable por el uso que el cliente le dé a los productos comprados en este sitio web. 
                    <br><br>
                    No podemos dar garantía sobre la germinación o sexo de las semillas de cáñamo, debido a que son objetos únicamente de colección genética y su cultivo está regulado y en determinados casos sancionado por la ley.
                    <br><br>
                    Toda la información contenida en esta página y cualquier material proporcionado por este sitio son para fines únicamente educativos y de conservación, y no para promover o incitar el uso o cultivo de sustancias ilegales.
                    <br><br>
                    Asimismo las imágenes expuestas en nuestra página web son de uso exclusivo de Espacio Verde Natural con el fin de publicitar y dar información sobre un determinado producto. 
                    <br><br>
                    Espacio Verde Natural solo hace envíos al extranjero en países donde sea legal la colección de semillas de cannabis y los productos provenientes del cáñamo. De no cumplir con lo anterior, Espacio Verde Natural, no realizará él envió de los productos requeridos.
                    <br><br>
                    Por lo tanto y de acuerdo a todo lo anterior expuesto, se sugiere a nuestra distinguida clientela informarse sobre la legislación vigente antes de comprar en nuestro sitio.
                    <div class="condic_thx"><br><br>STAFF ESPACIO VERDE NATURAL<br><br></div>
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
                <div class="sig_foot">
                    SÍGUENOS
                </div>
                <div class="tw_pie"><a href="http://www.twitter.com" target="_blank"><img src="img/twitter.png" alt="Twitter"></a><a href="http://www.instagram.com" target="_blank"><img src="img/instagram.png" alt="Instagram"></a><a href="http://www.facebook.com" target="_blank"><img src="img/facebook.png" alt="Facebook"></a></div>
            </div>
            <div class="soporte">
                <div class="title_sop">SOPORTE</div>
                <div class="cond_sop">Condiciones de compra</div>
                <div class="cond_sop">Políticas de privacidad</div>
                <div class="cond_sop">Términos de uso</div>
                <div class="cond_sop_1">Preguntas frecuentes</div>

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
