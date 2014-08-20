<label for="tab-2">Modifique sus datos</label>
           <div class="content">
            
    <?php
        session_start();
        $id = $_SESSION['usuario'];
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