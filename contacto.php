    <fieldset id="contact_form1">
        <legend>Registro</legend>        
        <div id="result1"></div>
        <div class="error_class" style="color:red; display:none;"></div>
            <form action="function/registro.php" name="regform" id="regform" method="post" onsubmit="return validarReg();"><br>
            <label for="name1"><span>Nombre</span>
                <input type="text" name="name1" id="name1"  />
            </label>
            
            <label for="email1"><span>E-mail</span>
                <input type="email" name="email1" id="email1" />
            </label>
            
            <label for="pass1"><span>Contraseña</span>
                <input type="password" name="pass1" id="pass1"/>
            </label>
            
            <label for="date1"><span>Fecha de nacimiento</span>
                <select name="day" id="day">
                    <option value="">Día&nbsp;</option> <?php  for($i=1;$i<=31;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                </select>
                <select name="month" id="month">
                      <option value="">Mes</option> <?php  for($i=1;$i<=12;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                </select>
                <select name="year" id="year">
                      <option value="">Año</option>
                      <?php  for($i=1900;$i<=2014;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                </select>
            </label>


            <label><span>&nbsp;</span>
                <input class="submit_btn1" id="submit_btn1" type="submit" value="Enviar">
            </label>
        </form>
    </fieldset>