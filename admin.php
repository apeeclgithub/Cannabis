<?php
session_start();
include 'function/conexion.php';

if(isset($_SESSION['admin'])){
    $sql = "SELECT user FROM admin WHERE user = '".$_SESSION['admin']."'";
    $dato = mysql_num_rows(mysql_query($sql));
    if($dato > 0){

    }else{
        echo "<script>location.href='login_admin.php';</script>";
    }
}
if(empty($_SESSION['admin'])){
    echo "<script>location.href='login_admin.php';</script>";
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
    <link href="img/favicon.ico" rel="icon" type="image/x-icon" />
    <link href="/favicon.ico" type="image/x-icon" rel="shortcut icon" />
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cannabis - Admin</title>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/script.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script>
        $(document).ready(function(){
                                
        var consulta;
                                                                          
         //hacemos focus al campo de búsqueda
        $("#busqueda").focus();
                                                                                                    
        //comprobamos si se pulsa una tecla
        $("#busqueda").keyup(function(e){
                                     
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#busqueda").val();
                                                                           
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "function/buscar.php",
                    data: "b="+consulta,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#resultado").html("<p align='center'><img src='ajax-loader.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#resultado").empty();
                          $("#resultado").append(data);
                                                             
                    }
              });
                                                                                  
                                                                           
        });
                                                                   
});

    </script>
    <!--[if lt IE 9 ]>
    <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/html5shiv-printshiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<input type="text" id="busqueda" />
             
<div id="resultado"></div>


    <a href="function/logout.php">salir</a>
        <fieldset> 
        <legend class="widgettitulo">Listado de Clientes con todos los datos</legend> 
        
            <table border="1">
            <thead><tr><th>ID usuario</th><th>Nombre</th><th>Fono</th><th>Mail</th><th>Edad</th><th>Dirección</th><th>Comuna</th><th>Región</th><th>Fecha Ingreso</th></tr></thead>
            <tbody>
                <?php
                    include 'function/conexion.php';
                    $consulta = mysql_query("SELECT usuario.usu_id, usu_nombre, usu_fecha, usu_fono, usu_mail, usu_edad, dir_direccion, com_nombre, reg_nombre FROM usuario INNER JOIN direccion ON usuario.usu_id = direccion.usu_id INNER JOIN comuna ON direccion.com_id = comuna.com_id INNER JOIN region ON comuna.reg_id = region.reg_id where usuario.usu_id = direccion.usu_id");
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
                    echo "<td>".$fila['usu_fecha']."</td>";

                    echo '<td><a onClick="return confirmar();" href="function/deleteuser.php?id='.trim($fila['usu_id']).'" >Eliminar</a></td>';
                    echo "</tr>";
                        }
                ?>
            </tbody>
            </table>
        </fieldset> 


        <fieldset>
            <legend>Pedidos Pendientes</legend>

            <?php

            $sql = "SELECT ped_id, usu_nombre, ped_valor,ped_fecha FROM pedido INNER JOIN usuario ON usuario.usu_id = pedido.usu_id WHERE ped_estado = 'pendiente'";
            $con = mysql_query($sql);
            while($dato = mysql_fetch_array($con)){
                echo "id:".$dato['ped_id'];
                echo " ".$dato['usu_nombre'];
                echo " $".$dato['ped_valor'];
                echo " Fecha:".$dato['ped_fecha']."<br>";

            }

        




            ?>
        </fieldset>

</body>
</html>