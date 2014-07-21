<fieldset id="login">
        LOGIN        
        <div id="result3"></div>
        <div class="error_class2" style="color:red; display:none;"></div>
            <form action="login.php" name="logincliente" id="logincliente" method="post" onsubmit="return validarLoginCliente();">
            <label for="usercliente"><span>Nombre</span>
                <input type="text" name="usercliente" id="usercliente"  />
            </label>
            <label for="passcliente"><span>Contraseña</span>
                <input type="password" name="passcliente" id="passcliente"/>
            </label>
            <label><span>&nbsp;</span>
                <input class="submit_btn3" id="submit_btn3" type="submit" value="LOGIN">
            </label>
        </form>
    </fieldset>