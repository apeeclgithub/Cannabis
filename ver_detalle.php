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



                        $sql = "SELECT ped_id, ped_valor, ped_estado FROM pedido WHERE ped_id = ".$id;
                        $con = mysql_query($sql);
                        $dato = mysql_fetch_array($con);
                        if(empty($dato)){
                            echo "<div class=\"cont_dato_nocompra\">No ha realizado compras</div>";
                        }else{
                        do  {
                            echo "<ul><br>";
                            echo "<li class=\"dropdown\">Número de pedido: ".$dato['ped_id']."<br> Valor: ".$dato['ped_valor']."<br> Estado Actual: ".$dato['ped_estado']."<br>";
                            $sql2 = "SELECT pro_nombre, det_cantidad, pro_valor FROM detalle INNER JOIN producto ON detalle.pro_id = producto.pro_id WHERE ped_id = ".$dato['ped_id'];
                            $con2 = mysql_query($sql2);
                            $dato2 = mysql_fetch_array($con2);
                            do {
                                echo "<ul>";
                                echo "<li><br>".$dato2['pro_nombre']."<br>";
                                echo "Cantidad: ".$dato2['det_cantidad']."<br>";
                                echo "Valor: ".$dato2['pro_valor']."<br></li>";
                                echo "</ul>";

                            } while ($dato2 = mysql_fetch_array($con2));
                            echo "</li>";
                            echo "</ul>";
                            } while ($dato = mysql_fetch_array($con));
                            echo "<a href='function/aprobar.php?id=".$id."'>APROBAR</a> / <a href='function/rechazar.php?id=".$id."'>RECHAZAR</a><br><br>";
                        }

	?>
    
    <input type="button" value="VOLVER ATRÁS" name="Back2" onclick="history.back()" />
	
</body>
</html>