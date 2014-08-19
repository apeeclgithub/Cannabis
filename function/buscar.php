<?php
 include 'conexion.php';
      $buscar = $_POST['b'];
       
      if(!empty($buscar)) {
            buscar($buscar);
      }
       
      function buscar($b) {

            $sql = mysql_query("SELECT usu_nombre FROM usuario WHERE usu_nombre LIKE '%".$b."%'");
            $contar = mysql_num_rows($sql);
            if($contar == 0){
                  echo "No se han encontrado resultados para '<b>".$b."</b>'.";
            }else{
                  while($row=mysql_fetch_array($sql)){
                        $nombre = $row['usu_nombre'];
                      //  $id = $row['ped_valor'];
                         
                        echo $nombre."<br /><br />";    
                  }
            }
      }
       
?>