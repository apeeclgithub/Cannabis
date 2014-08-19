<?php
    include 'function/conexion.php';
    session_start();
    $id = $_SESSION['usuario'];

    if(isset($_SESSION['usuario'])){
    $sql = "SELECT usu_id FROM usuario WHERE usu_id = ".$_SESSION['usuario'];
    $dato = mysql_num_rows(mysql_query($sql));
    if($dato > 0){

    }else{
        echo "<script>location.href='login_cliente.php';</script>";
    }
}
if(empty($_SESSION['usuario'])){
    echo "<script>location.href='login_cliente.php';</script>";
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
    <title>Condiciones de compra - EVN</title>
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
                            <li ><a href="quienessomos.php" id="menu_quienes">QUIENES SOMOS</a></li>
                            <li ><a href="nuestrosproductos.php" id="menu_prod">NUESTROS PRODUCTOS</a></li>
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
                            <li ><a href="quienessomos.php" >QUIENES SOMOS</a></li>
                            <li ><a href="nuestrosproductos.php" >NUESTROS PRODUCTOS</a></li>
                            <li ><a href="contacto.php"     >CONTACTO</a></li>
                            <li ><a href="condiciones.php" >CONDICIONES DE COMPRA</a></li>
                            <li ><a href="politicas.php" >POLÍTICAS DE PRIVACIDAD Y TÉRMINOS DE USO</a></li>
                        </ul>
                    </div>
                    </div>
                </nav>
            </div>
    
            
                <div class="logo">
                    <h1><img src="img/evn-gif.gif" alt="Espacio verde natural"></h1>
                </div>
            <div class="sesion">
                <a href="registro.php" id="menu_registro">REGISTRO</a>
                <a href="cuenta.php" id="menu_cuenta">MI CUENTA</a>
                <a href="#" id="img_carro" ><img src="img/carro.png" alt="carro"></a>
                <a href="#" id="menu_carro">CARRO (2)</a>
            </div>
        </header>

<div class="tabs">
       <div class="tab">
           <input type="radio" id="tab-1" name="tab-group-1" checked>
           <label for="tab-1">General</label>
           <div class="content">
            <?php
            $sql1 = "SELECT usu_nombre FROM usuario WHERE usu_id = $id";
            $con1 = mysql_query($sql1);
            $dato1 = mysql_fetch_array($con1);
            echo "Bienvenido ".$dato1["usu_nombre"];
            echo "<br>";
            $sql2 = "SELECT * FROM pedido WHERE usu_id = $id AND ped_estado = 'pendiente'";
            $con2 = mysql_query($sql2);
            $dato2 = mysql_num_rows($con2);
            if($dato2>0){
                echo "Actualmente tienes ".$dato2." compras pendientes de aprobación ";
            }else{
                echo "No tienes compras pendientes";
            }
            echo "<br>";
            $sql3 = "SELECT * FROM pedido WHERE usu_id = $id AND ped_estado = 'finalizado'";
            $con3 = mysql_query($sql3);
            $dato3 = mysql_num_rows($con3);
            echo "Compras finalizadas hasta la fecha: ".$dato3;
            ?>
            </div>
       </div>
       <div class="tab">
           <input type="radio" id="tab-2" name="tab-group-1">
           <label for="tab-2">Modifique sus datos</label>
           <div class="content">
            
    <?php
        
        include 'function/conexion.php';
        $sql1 = "SELECT usuario.usu_id, usu_nombre, usu_fono, usu_mail, usu_edad, usu_pass, dir_direccion, comuna.com_id, com_nombre, region.reg_id, reg_nombre FROM usuario INNER JOIN direccion ON usuario.usu_id = direccion.usu_id INNER JOIN comuna ON direccion.com_id = comuna.com_id INNER JOIN region ON comuna.reg_id = region.reg_id WHERE usuario.usu_id = $id";
        $consulta1 = mysql_query($sql1);
        $dato1 = mysql_fetch_array($consulta1);
    ?>
    <fieldset>
        <form id="modifica" name="modifica" method="post" action="function/modifica.php">
            <input id="id" class="text-input" name="id" type="hidden" value="<?php echo $dato1["usu_id"]?>">
            <label id="nombre_label" for="nombre">Nombre</label>
            <input id="nombre" class="text-input" name="nombre" type="text" value="<?php echo $dato1["usu_nombre"]?>" />
            <label id="fono_label" for="fono">Fono</label>
            <input id="fono" class="text-input" name="fono" type="text" value="<?php echo $dato1["usu_fono"]?>" />
            <label id="mail_label" for="mail">E-mail</label>
            <input id="mail" class="text-input" name="mail" type="text" value="<?php echo $dato1["usu_mail"]?>" />
            <label id="dir_label" for="dir">Direccion</label>
            <input id="dir" class="text-input" name="dir" type="text" value="<?php echo $dato1["dir_direccion"]?>" />
            <label id="region_label" for="region">Region</label>
            <select id="reg" name="reg">
            <option value="<?php echo $dato1["reg_id"]?>"><?php echo $dato1["reg_nombre"]?></option>
            <!--- - - - - - - - - - - - - - - - - - -----------------------------------------------------------------------------------------------AGREGAR REGIONES BBDD-->
            
            </select>
            <label id="comuna_label" for="comuna">Comuna</label>
            
            <select id="com" name="com">
            <option value="<?php echo $dato1["com_id"]?>"><?php echo $dato1["com_nombre"]?></option>
            <!-------------------------------------------------------------------------------------------------------------------AGREGAR COMUNAS BBDD-->
            </select>
     
            <label id="pass_label" for="pass">Pass</label>
            <input id="pass" class="text-input" name="pass" type="password" value="<?php echo $dato1["usu_pass"]?>"/>
            <input id="submit_login" class="button" name="submit" type="submit" value="Send" />
        </form>         
    </fieldset>
           </div>
       </div>
        <div class="tab">
           <input type="radio" id="tab-3" name="tab-group-1">
           <label for="tab-3">Sus Compras</label>
           <div class="content"> 
        <h2>tus compras</h2>
            <?php
                $sql = "SELECT ped_id, ped_valor, ped_estado FROM pedido WHERE usu_id = $id";
                $con = mysql_query($sql);
                $dato = mysql_fetch_array($con);
                if(empty($dato)){
                    echo "Usted no cuenta con ninguna compra realizada.";
                }else{
                do {
                    echo "<ul>";
                    echo "<li class=\"dropdown\">Número de pedido: ".$dato['ped_id']." Valor: ".$dato['ped_valor']." Estado Actual: ".$dato['ped_estado']."<br>";
                    $sql2 = "SELECT pro_nombre, det_cantidad, pro_valor FROM detalle INNER JOIN producto ON detalle.pro_id = producto.pro_id WHERE ped_id = ".$dato['ped_id'];
                    $con2 = mysql_query($sql2);
                    $dato2 = mysql_fetch_array($con2);
                    do {
                        echo "<ul>";
                        echo "<li>".$dato2['pro_nombre'];
                        echo $dato2['det_cantidad'];
                        echo $dato2['pro_valor']."</li>";
                        echo "</ul>";
                    } while ($dato2 = mysql_fetch_array($con2));
                    echo "</li>";
                    echo "</ul>";
                } while ($dato = mysql_fetch_array($con));
            }
            ?>
            </div>
       </div>
    </div>
    
    <a href="venta.php">Volver</a>


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
