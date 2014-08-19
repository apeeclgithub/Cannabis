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
                    echo "<li>Número de pedido: ".$dato['ped_id']." Valor: ".$dato['ped_valor']." Estado Actual: ".$dato['ped_estado']."<br>";
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