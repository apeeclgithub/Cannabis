                <div class="sesion">
                    <a href="../../registro.php" id="menu_registro">REGISTRO</a>
                    <a href="../../cuenta.php" id="menu_cuenta">MI CUENTA</a>
                    <a href="#" id="img_carro" ><img src="../../img/carro.png" alt="carro"></a>
                    <div id="colorNav">
                        <ul>
                            <li>
                                <a class="carro" href="">CARRO (<?php echo $carrito->articulos_total()?>)</a>
                                <?php
                                    echo '<ul>';
                                    $carro = $carrito->get_content();
                                    if($carro){
                                        foreach($carro as $producto){
                                            
                                            echo '<li><a href="#">'.$producto["cantidad"].' x '.$producto["nombre"].'</a></li>';
                                        }
                                        
                                        echo "<li><a>Valor Total: CLP ".number_format($carrito->precio_total(),0,',','.')."</a></li>";
                                        echo "<li><a><span onclick=\"delall('si')\">Borrar Todo</span></a></li>";
                                        echo "<li><a href=\"../../pedido.php\"><button class=\"comprar\">Comprar</button></a></li>";
                                    }
                                    echo '</ul>';
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
