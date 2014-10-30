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
    <title>Semillas automáticas - EVN</title>
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
                        <li ><a href="semillas-feminizadas.php" ><em class="seo">SEMILLAS FEMINIZADAS</em></a></li>
                        <li ><a href="semillas-automaticas.php" ><em class="seo">SEMILLAS AUTOMÁTICAS</em></a></li>
                        <li ><a href="fertilizantez.php" ><strong class="seo">FERTILIZANTES</strong></a></li>
                        <li ><a href="vestuario.php"     ><em class="seo">VESTUARIO Y ACCESORIOS</em></a></li>
                        <li ><a href="cosmetica.php"><strong class="seo">COSMÉTICA</strong></a></li>
                    </ul>
                </div>
            </div>
            <div class="cont_aside">
                <aside class="cat">
                    <nav class="cat_1">
                        <ul id="cat-nav">
                            <li class="title_cat">&nbsp;CATEGORÍAS</li>
                            <li><a href="semillas-feminizadas.php">+&nbsp;<em class="seo">SEMILLAS FEMINIZADAS</em></a></li>
                            <li><a href="semillas-automaticas.php">+&nbsp;<em class="seo">SEMILLAS AUTOMÁTICAS</em></a></li>
                            <li><a href="fertilizantes">+&nbsp;<strong class="seo">FERTILIZANTES</strong></a></li>
                            <li><a href="vestuario.php">+&nbsp;<em class="seo">VESTUARIO Y ACCESORIOS</em></a></li>
                            <li class="li_cos"><a href="cosmetica.php">+&nbsp;<strong class="seo">COSMÉTICA</strong></a></li>
                        </ul>
                    </nav>
                </aside>
            </div>
            <div class="cont_prod">
                <section class="productos">
                    <div class="title_seccion_sem"><em class="seo">SEMILLAS AUTOMÁTICAS</em></div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat">
                            <span itemprop="name">AUTO WHITE WUIDOW</span>
                            </h3>
                            <img itemprop="image" class="img_productos" src="img/automaticas/auto white wuidow.png" alt="auto white wuidow" title="Auto white Wuidow">
                            <div class="text_home">
                            <h4 class="text_home_sem">
                                <span itemprop="description">
                                    AutoWhite Widow pertenece al banco Dutch Passion. Es una planta de <strong class="seo">cannabis</strong> potente y robusta que proporciona un increíble subidón. Su genética ha ganado incontables premios y ha satisfe...
                                </span>
                            </h4>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat"><span itemprop="name">AUTO BLUEBERRY</span></h3>
                            <img itemprop="image" class="img_productos" src="img/automaticas/auto blueberry.png" alt="auto blueberry" title="Auto blueberry">
                            <div class="text_home">
                                <h4 class="text_home_sem">
                                    <span itemprop="description">
                                        Auto Blueberry pertenece al banco Dutch Passion. Esta variedad es mundialmente conocida y reconocida como una de las mejores variedades de la familia Blue. La Autoblueberry reúne estas ...
                                    </span>
                                </h4>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat"><span itemprop="name">BLUE AUTO MAZAR</span></h3>
                            <img itemprop="image" class="img_productos" src="img/automaticas/blue auto mazar.png" alt="blue auto mazar" title="Blue auto mazar">
                            <div class="text_home">
                                <h4 class="text_home_sem">
                                    <span itemprop="description">
                                        Blue Auto Mazar: combina lo mejor de dos legendarias automáticas de Dutch Passion en una nueva y sorprendente híbrida muy potente. Es un cruce entre AutoBlueberry y AutoMazar, dos de nue...
                                    </span>
                                </h4>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat"><span itemprop="name">BIG DEVIL XL</span></h3>
                            <img itemprop="image" class="img_productos" src="img/automaticas/big devil xl.png" alt="big devil xl" title="Big devil XL">
                            <div class="text_home">
                            <h4 class="text_home_sem">
                                <span itemprop="description">
                                    Big Devil XL es una autofloreciente de 3ª generación, híbrido resultante del cruce de nuestra Big Devil #2 con una Jack Herer  autofloreciente del departamento I +D de Sweet Seeds. Produc...
                                </span>
                            </h4>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat"><span itemprop="name">CREAM CARAMEL AUTO</span></h3>
                            <img itemprop="image" class="img_productos" src="img/automaticas/cream caramel auto.png" alt="cream caramel auto" title="Cream caramel auto">
                            <div class="text_home">
                            <h4 class="text_home_sem">
                                <span itemprop="description">    
                                    Cream Caramel: es una verdadera joya, muchas variedades han surgido posteriormente a esta magistral variedad de Sweet Seeds, pero superarla aún sigue siendo arduo propósito. Es una autof...
                                </span>
                            </h4>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat"><span itemprop="name">DARK DEVIL</span></h3>
                            <img itemprop="image" class="img_productos" src="img/automaticas/dark devil.png" alt="dark devil" title="Dark devil">
                            <div class="text_home">
                            <h4 class="text_home_sem">
                                <span itemprop="description">
                                    Dark Devil es una variedad 100% autofloreciente. Resultado de la hibridación entre una de nuestras más apreciadas genéticas autoflorecientes, la Big Devil XL y una exótica genética autof...
                                </span>
                            </h4>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat"><span itemprop="name">JACK 47 AUTO</span></h3>
                            <img itemprop="image" class="img_productos" src="img/automaticas/jack 47 auto.png" alt="jack 47 auto" title="Jack 47 auto">
                            <div class="text_home">
                            <h4 class="text_home_sem">
                                <span itemprop="description">
                                    Jack 47 Auto de Sweet Seeds es un potente híbrido con un sorprendente sabor dulce. El matrimonio entre la Jack Herer Auto y la AK-47 ha creado una cepa épica de productos extraordinarios...
                                </span>
                            </h4>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat"><span itemprop="name">BLUE AMNESIA XXL AUTO</span></h3>
                            <img itemprop="image" class="img_productos" src="img/automaticas/blue amnesia xxl auto.png" alt="blue amnesia xxl auto" title="Blue amnesia xxl auto">
                            <div class="text_home">
                            <h4 class="text_home_sem">
                                <span itemprop="description">
                                    Blue Amnesia XXL Auto de Dinafem Seeds es una variedad de <strong class="seo">semilla</strong> autofloreciente feminizada Sativa/Indica/Ruderalis, fruto de la unión entre una Original Amnesia Autoflowering y una Aut...
                                </span>
                            </h4>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat"><span itemprop="name">CHEESE</span></h3>
                            <img itemprop="image" class="img_productos" src="img/automaticas/cheese.png" alt="cheese" title="Cheese">
                            <div class="text_home">
                            <h4 class="text_home_sem">
                                <span itemprop="description">
                                    Cheese es una variedad con sabor muy intenso, duradero, aromático, índico, a queso fuerte, más bien curado. El efecto es muy equilibrado, completamente mixto, físico y mental. Tiene un c...
                                </span>
                            </h4>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat"><span itemprop="name">CRITICAL CHEESE</span></h3>
                            <img itemprop="image" class="img_productos" src="img/automaticas/critical cheese.png" alt="critical cheese" title="Critical cheese">
                            <div class="text_home">
                            <h4 class="text_home_sem">
                                <span itemprop="description">
                                    Critical Cheese Auto es el cruce de la línea autofloreciente más productiva con la de sabor más fuerte. Tanto la Critical como la Cheese deben su origen a la genética Skunk, que es sinón...
                                </span>    
                            </h4>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat"><span itemprop="name">CRITICAL JACK</span></h3>
                            <img itemprop="image" class="img_productos" src="img/automaticas/critical jack.png" alt="critical jack" title="Critical jack">
                            <div class="text_home">
                            <h4 class="text_home_sem">
                                <span itemprop="description">
                                    Critical Jack  Automática: Esta variedad es la versión express de la Critical Jack. Necesita 70 días desde que nace de la <strong class="seo">semilla</strong> para completar su ciclo vital y sorprender con sólidos c...
                                </span>
                            </h4>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat"><span itemprop="name">HAZE 2.0</span></h3>
                            <img itemprop="image" class="img_productos" src="img/automaticas/haze 2.0.png" alt="haze 2.0" title="Haze 2.0">
                            <div class="text_home">
                            <h4 class="text_home_sem">
                                <span itemprop="description">
                                    Haze 2.0 Autoflowering: es la versión mejorada de la ya famosa Haze Autoflowering de Dinafem. Para desarrollar esta variedad la han cruzado con la excelente Jack Herer consiguiendo una n...
                                </span>
                            </h4>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat"><span itemprop="name">HAZE XXL</span></h3>
                            <img itemprop="image" class="img_productos" src="img/automaticas/haze xxl.png" alt="haze xxl" title="Haze xxl">
                            <div class="text_home">
                            <h4 class="text_home_sem">
                                <span itemprop="description">
                                    Haze XXL Auto de Dinafem son una variedad autofloreciente feminizada con dominancia Sativa fruto de la unión entre una Jack Herer y una Haze 2.0 Autoflowering. Se trata de una <strong class="seo">semilla</strong> de...
                                </span>
                            </h4>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat"><span itemprop="name">BIG BANG</span></h3>
                            <img itemprop="image" class="img_productos" src="img/automaticas/big bang.png" alt="big bang" title="Big bang">
                            <div class="text_home">
                            <h4 class="text_home_sem">
                                <span itemprop="description">
                                    Big bang autofloewering: fuerte, corta y ancha, de alto rendimiento. Es una estupenda opción para cultivadores novatos. Su corto ciclo de vida y su gran resistencia a bajas temperaturas ...
                                </span>
                            </h4>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat"><span itemprop="name">NORTHERN LIGHTS</span></h3>
                            <img itemprop="image" class="img_productos" src="img/automaticas/northern lights.png" alt="northern lights" title="Northern lights">
                            <div class="text_home">
                            <h4 class="text_home_sem">
                                <span itemprop="description">
                                    La Northern Lights Autofloreciente es el remedio perfecto cuando las perspectivas no son buenas y que necesitas una luz en la oscuridad. Esta potente hierba te alegrará el día y aliviará...
                                </span>
                            </h4>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat"><span itemprop="name">SUPER CRITICAL</span></h3>
                            <img itemprop="image" class="img_productos" src="img/automaticas/super critical.png" alt="super critical">
                            <div class="text_home">
                            <h4 class="text_home_sem">
                                <span itemprop="description">
                                    Super Critical: es una extraordinaria variedad, mejor que la suma de sus antepasados. Uniendo los genes de la Big Bud, Skunk y White Widow, se ha creado una variedad increíblemente produ...
                                </span>
                            </h4>
                                <a href="#" class="btn_vermas"><img src="img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                <a href="#" class="btn_vermas"><img src="img/agregar.jpg" alt="Agregar"></a>
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
