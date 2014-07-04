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
            <button class="submit_btn1" id="submit_btn1">Submit</button>
        </label>
    </fieldset>
</body>
</html>
