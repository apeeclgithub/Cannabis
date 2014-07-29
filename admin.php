<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
<html lang="es">
<head>
    <link href="img/favicon.ico" rel="icon" type="image/x-icon" />
    <link href="/favicon.ico" type="image/x-icon" rel="shortcut icon" />
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cannabis - Admin</title>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/script.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9 ]>
    <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/html5shiv-printshiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <fieldset id="login">
        LOGIN        
        <div id="result2"></div>
        <div class="error_class2" style="color:red; display:none;"></div>
            <form action="login.php" name="loginadmin" id="loginadmin" method="post" onsubmit="return validarLogin();">
            <label for="useradmin"><span>Nombre</span>
                <input type="text" name="useradmin" id="useradmin"  />
            </label>
            <label for="passadmin"><span>Contraseña</span>
                <input type="password" name="passadmin" id="passadmin"/>
            </label>
            <label><span>&nbsp;</span>
                <input class="submit_btn2" id="submit_btn2" type="submit" value="LOGIN">
            </label>
        </form>
    </fieldset>
<!--
si inicia sesion q los muestre
<div id="">logout</div>
<div id="">Usuarios</div>
<div id="">Pedidos</div>
-->
    <button id="carga" name="carga" onclick="adminCargar();">CARGAR</button>
        <h4 class="widgettitulo">Listado de Clientes con todos los datos</h4> 
        <div class="datagrid" id="datagrid"> 
            <table>
            <thead><tr><th>ID usuario</th><th>Nombre</th><th>Fono</th><th>Mail</th><th>Edad</th><th>Dirección</th><th>Comuna</th><th>Región</th></tr></thead>
            <tbody>
                <?php
                    include 'function/conexion.php';
                    $consulta = mysql_query("SELECT usuario.usu_id, usu_nombre, usu_fono, usu_mail, usu_edad, dir_direccion, com_nombre, reg_nombre FROM usuario INNER JOIN direccion ON usuario.usu_id = direccion.usu_id INNER JOIN comuna ON direccion.com_id = comuna.com_id INNER JOIN region ON comuna.reg_id = region.reg_id where usuario.usu_id = direccion.usu_id");
                    while ($fila = mysql_fetch_array($consulta)) { 
                    echo "<tr>";
                    echo "<td>".$fila['usu_id']."</td>";
                    echo "<td>".$fila['usu_nombre']."</td>";
                    echo "<td>".$fila['usu_fono']."</td>";
                    echo "<td>".$fila['usu_mail']."</td>";
                    echo "<td>".$fila['usu_edad']."</td>";
                    //echo "<td>".$row['USU_PASS']."</td>";
                    echo "<td>".$fila['dir_direccion']."</td>";
                    echo "<td>".$fila['com_nombre']."</td>";
                    echo "<td>".$fila['reg_nombre']."</td>";

                    echo '<td><a onClick="return confirmar();" href="function/deleteuser.php?id='.trim($fila['usu_id']).'" >Eliminar</a></td>';
                    echo "</tr>";
                        }
                ?>
            </tbody>
            </table>
        </div> 

</body>
</html>