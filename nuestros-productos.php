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
    <title>Nuestros Productos - EVN</title>
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
            <div class="logo">
                <h1><img src="img/evn-gif.gif" alt="Espacio verde natural"></h1>
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
                        <li ><a href="semillas-feminizadas.php" >SEMILLAS FEMINIZADAS</a></li>
                        <li ><a href="semillas-automaticas.php" >SEMILLAS AUTOMÁTICAS</a></li>
                        <li ><a href="fertilizantez.php" >FERTILIZANTES</a></li>
                        <li ><a href="vestuario.php"     >VESTUARIO Y ACCESORIOS</a></li>
                        <li ><a href="cosmetica.php">COSMÉTICA</a></li>
                    </ul>
                </div>
            </div>




            <div class="cont_aside">
                <aside class="cat">
                    <nav class="cat_1">
                        <ul id="cat-nav">
                            <li class="title_cat">&nbsp;CATEGORÍAS</li>
                            <li><a href="semillas-feminizadas.php">+&nbsp;SEMILLAS FEMINIZADAS</a></li>
                            <li><a href="semillas-automaticas.php">+&nbsp;SEMILLAS AUTOMÁTICAS</a></li>
                            <li><a href="fertilizantes">+&nbsp;FERTILIZANTES</a></li>
                            <li><a href="vestuario.php">+&nbsp;VESTUARIO Y ACCESORIOS</a></li>
                            <li class="li_cos"><a href="cosmetica.php">+&nbsp;COSMÉTICA</a></li>
                        </ul>
                    </nav>
                </aside>
            </div>
            <div class="cont_prod">
                <section class="productos">
                    <div class="title_seccion">PRODUCTOS</div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <span itemprop="name"><h3 class="item_home_cat">CREMA FACIAL DE CANNABIS</h3></span>
                            <img itemprop="image" class="img_productos" src="img/cosmetica/crema de cannabis.png" alt="crema de cannabis">
                            <div class="text_home">
                            <span itemprop="description">
                                <h4 class="text_home">Crema Facial Hidratante y Nutritiva , con Aceite de Cannabis Sativa 100 % puro, rico en Ácidos Grasos esenciales, Omega 3, Omega 6 y Acido Linoleico que previenen el envejecimiento prema...</h4>
                            </span>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <span itemprop="name"><h3 class="item_home_cat">SERUM CONTORNO DE OJOS</h3></span>
                            <img itemprop="image" class="img_productos" src="img/cosmetica/serum contorno de ojos.png" alt="serum contorno de ojos">
                            <div class="text_home">
                                <span itemprop="description">
                                    <h4 class="text_home">Actúa en forma Antiedematosa, restaurando los signos propios del envejecimiento y micro agresiones del área del ojo, ayudando a la flacidez, descongestionando bolsas y ojeras, reforzando...</h4>
                                </span>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <span itemprop="name"><h3 class="item_home_cat">CREMA MANOS Y CUERPO DE CANNABIS</h3></span>
                            <img itemprop="image" class="img_productos" src="img/cosmetica/crema manos y cuerpo de cannabis.png" alt="crema manos y cuerpo de cannabis">
                            <div class="text_home">
                                <span itemprop="description">
                                    <h4 class="text_home">Especialmente formulada para proteger su piel otorgando suavidad, humectación e hidratación dada la presencia de Ácidos Grasos esenciales contenidos en el Aceite de Cannabis Sativa OMEGA...</h4>
                                </span>    
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <span itemprop="name"><h3 class="item_home_cat">ACEITE PARA MASAJES DE CANNABIS</h3></span>
                            <img itemprop="image" class="img_productos" src="img/cosmetica/aceite para masajes de cannabis.png" alt="aceite para masajes de cannabis">
                            <div class="text_home">
                            <span itemprop="description">
                                <h4 class="text_home">Aceite corporal para Masajes con las propiedades del Aceite de Cannabis Sativa, los cuales regeneran y aumentan la resistencia de la piel, otorgando elasticidad y suavidad al tacto, devo...</h4>
                            </span>    
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <span itemprop="name"><h3 class="item_home_cat">ACEITE DE CANNABIS</h3></span>
                            <img itemprop="image" class="img_productos" src="img/cosmetica/aceite de cannabis.png" alt="aceite de cannabis">
                            <div class="text_home">
                            <span itemprop="description">    
                                <h4 class="text_home">Aceite de cáñamo especialmente indicado para pieles secas y/o agrietadas, mantiene hidratada la piel de cutis, manos y cuerpo, restaura los aceites naturales de la piel, rico en aceites ...</h4>
                            </span>    
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <span itemprop="name"><h3 class="item_home_cat">SHAMPOO Y ACONDICIONADOR</h3></span>
                            <img itemprop="image" class="img_productos" src="img/cosmetica/shampoo y acondicionador de cannabis.png" alt=" shampoo y acondicionador de cannabis">
                            <div class="text_home">
                            <span itemprop="description">
                                <h4 class="text_home">Shampoo Hidratante del cabello, con Aceite de Cannabis Sativa 100% puro, rico en Omega 3 y 6, previene el resecamiento del cuero cabelludo, ayuda a prevenir la caspa. Por su PH neutro es...</h4>
                            </span>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <span itemprop="name"><h3 class="item_home_cat">GEL DE BAÑO DE CANNABIS</h3></span>
                            <img itemprop="image" class="img_productos" src="img/cosmetica/gel de bano.png" alt="gel de bano">
                            <div class="text_home">
                            <span itemprop="description">
                                <h4 class="text_home">Producto enriquecido con Aceite 100% puro de Cannabis Sativa, el cual provoca en su piel hidratación y nutrición dejándola suave y confortable durante todo el día. PH neutro para uso fam...</h4>
                            </span>    
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <span itemprop="name"><h3 class="item_home_cat">JABÓN DE CANNABIS</h3></span>
                            <img itemprop="image" class="img_productos" src="img/cosmetica/jabon de cannabis.png" alt="jabon de cannabis">
                            <div class="text_home">
                            <span itemprop="description">
                                <h4 class="text_home">Jabón de Cannabis elaborado a base de aceite de semilla de cáñamo 100% puro, cuyos componentes naturales como Omega 3 y Omega 6 regeneran y aumentan la resistencia y elasticidad de la pi...</h4>
                            </span>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <span itemprop="name"><h3 class="item_home_cat">EXFOLIANTE DE CANNABIS</h3></span>
                            <img itemprop="image" class="img_productos" src="img/cosmetica/exfoliante de cannabis.png" alt="exfoliante de cannabis">
                            <div class="text_home">
                            <span itemprop="description">
                                <h4 class="text_home">Exfoliante de cáñamo limpia y suaviza profundamente la piel, impidiendo la acomulación de toxinas, acelera la circulación sanguínea, aumenta la oxigenación de la piel, mejora la absorció...</h4>
                            </span>    
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat">ACEITE DE CÁÑAMO GOURMET</h3>
                            <img itemprop="image" class="img_productos" src="img/cosmetica/aceite de canamo.png" alt="aceite de canamo">
                            <div class="text_home">
                            <span itemprop="description">
                                <h4 class="text_home">Aceite Gourmet 100% puro Semilla de cáñamo. Rico en Omegas 3 - 6 y 9. Ingredientes Aceite de semilla de cáñamo (cannabis sativa, orgánico), menor al 0.4% de acidez. Contenido Neto: 250 ...</h4>
                            </span>    
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#"><img src="img/agregar.jpg" alt="Agregar"></a>
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
                    <div class="cont_mail"><img src="img/mail.png" alt="Correo">&nbsp;&nbsp;<span itemprop="email">alo@espacioverdenatural.cl</span></div>
                    <div class="cont_mail"><img src="img/telefono.png" alt="Telefono">&nbsp;&nbsp;&nbsp;&nbsp;<span itemprop="telephone">800 800 800</span></div>
                    <div class="cont_mail"><img src="img/celu.png" alt="Celular">&nbsp;&nbsp;&nbsp;&nbsp;<span itemprop="telephone">+9 999 9999</span></div>                      
                </div>
            </div>
        </div>
    </footer>  
</body>
</html>
