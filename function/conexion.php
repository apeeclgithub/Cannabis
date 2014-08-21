<?php

//$con= mysql_connect("localhost","root","");
$con= mysql_connect("apeecl_evnprueba","apeecl_evnprueba","n&ZCMz[4Zdp^");
mysql_query("SET NAMES 'utf8'");
if($con) 
{   
	$db = mysql_select_db("apeecl_evnprueba",$con);
	if(!$db)
	{ 
       		echo "Problemas para conectar a la BD";
	}
}
else
{
	echo "Problemas para conectar con el servidor";
}

?>
