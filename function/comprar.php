<?php
	include 'conexion.php';
	include 'carrito.php';
	$pedido = (mysql_num_rows(mysql_query('SELECT * FROM pedido')))+1;
	echo 'su numero de pedido: '.$pedido;
	echo '<br>';
	echo 'su id: '.$_SESSION['usuario'];

	$id = $_SESSION['usuario'];

	$sql1 = 'INSERT INTO pedido (ped_id, usu_id, ped_valor, ped_estado, ped_fecha) VALUES ('.$pedido.', '.$id.', '.$carrito->precio_total().', \'pendiente\', \''.date("y-m-d").'\')';
	$con1 = mysql_query($sql1);

	$carro = $carrito->get_content();
		if($carro){
			foreach($carro as $producto){	
				$sql = 'INSERT INTO detalle (pro_id, ped_id, det_cantidad) VALUES ('.$producto['id'].', '.$pedido.', '.$producto['cantidad'].')';
				$con = mysql_query($sql);
			}
	}

	// agregar funcion mail cliente y admin
?>