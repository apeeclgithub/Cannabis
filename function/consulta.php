<?php
require("conexion.php");
$prove = $_POST["reg_id"];
$query = "SELECT com_id, com_nombre FROM comuna WHERE reg_id = ".$prove; 
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
    echo '<option value="' .$row['com_id']. '">' .$row['com_nombre']. '</option>'; 
}
?>