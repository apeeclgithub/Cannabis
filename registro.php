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
    <title>Cannabis - Registro</title>
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
    <fieldset id="contact_form1">
        <legend>Registro</legend>
        <div id="result1"></div>
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
           <!-- <textarea name="date1" id="date1" ></textarea> -->
            <select name="day" id="day">
                <option value="-">-</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>

            <select name="month" id="mont">
                <option value="Enero">Enero</option>
                <option value="Febrero">Febrero</option>
                <option value="Marzo">Marzo</option>
                <option value="Abril">Abril</option>
                <option value="Mayo">Mayo</option>
                <option value="Junio">Junio</option>
                <option value="Julio">Julio</option>
                <option value="Agosto">Agosto</option>
                <option value="Septiembre">Septiembre</option>
                <option value="Octubre">Octubre</option>
                <option value="Noviembre">Noviembre</option>
                <option value="Diciembre">Diciembre</option>
            </select>
        </label>
        <select name="nataliciodia">
                  <option value="0">Día</option> <?php  for($i=1;$i<=31;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                </select>
                <select name="nataliciomes">
                  <option value="0">Mes</option> <?php  for($i=1;$i<=12;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                </select>
                <select name="natalicioano">
                  <option value="0">Año</option>
                  <?php  for($i=1990;$i<=2020;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                </select>
        <label><span>&nbsp;</span>
            <button class="submit_btn1" id="submit_btn1">Submit</button>
        </label>
    </fieldset>
</body>
</html>
