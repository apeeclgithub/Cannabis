<table>
<thead><tr><th>usu_nombre</th><th>usu_fono</th><th>usu_mail</th><th>usu_edad</th><th>usu_pass</th></tr></thead>
<tbody>
<?php
  include 'conexion.php';
$consulta = mysql_query("SELECT * FROM usuario order by usu_nombre ASC");
while($row = mysql_fetch_array($consulta, MYSQL_ASSOC))
{
  echo "<tr>";
    echo "<td>".$row['USU_NOMBRE']."</td>";
    echo "<td>".$row['USU_FONO']."</td>";
    echo "<td>".$row['USU_MAIL']."</td>";
    echo "<td>".$row['USU_EDAD']."</td>";
    echo "<td>".$row['USU_PASS']."</td>";
    echo "</tr>";
}
?>
</tbody>
</table>
