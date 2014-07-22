<table>
<thead><tr><th>usu_id</th><th>usu_nombre</th><th>usu_fono</th><th>usu_mail</th><th>usu_edad</th><th>usu_pass</th></tr></thead>
<tbody>
<?php
  include 'conexion.php';
$consulta = mysql_query("SELECT * FROM usuario order by usu_nombre ASC");
while($row = mysql_fetch_array($consulta, MYSQL_ASSOC))
{?>
  <tr>
    <td><?php echo $row['USU_ID']; ?></td>
    <td><?php echo $row['USU_NOMBRE']; ?></td>
    <td><?php echo $row['USU_FONO']; ?> </td>
    <td><?php echo $row['USU_MAIL']; ?></td>
    <td><?php echo $row['USU_EDAD']; ?></td>
    <td><?php echo $row['USU_PASS']; ?></td>
    <td><a href="#" onclick="delEmpresa(<?php echo $row['USU_ID']; ?>);">Eliminar</a></td>
  </tr>
<?php } ?>
</tbody>
</table>
