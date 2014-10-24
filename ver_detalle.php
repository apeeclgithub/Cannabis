<!DOCTYPE html>
<html>
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

	<?php  
		include 'function/conexion.php';

		$id = $_GET["id"];

		$sql = "SELECT pro_nombre, pro_valor FROM detalle INNER JOIN producto ON detalle.pro_id = producto.pro_id WHERE ped_id = ".$id;
		$con = mysql_query($sql);
		//$num = mysql_num_rows($con);
		//$num = mysql_fetch_array($con);
		$arr = mysql_fetch_assoc($con);

		while ($num = mysql_fetch_array($con)) {
			echo $num['pro_nombre'];
		}

	?>
	
</body>
</html>