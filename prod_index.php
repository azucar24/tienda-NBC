<section id="products">
    <div class="container">
        <div class="row">
            <div class="col-md-14">
                <div class="products-heading">
                    <h2>NUEVOS PRODUCTOS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="products">
                    <?php
                    include 'sql/conexionsql.php';
                    include 'sql/consulSQL.php';
                    $consulta = ejecutarSQL::consultar("select * from producto where Stock > 0 limit 3");
                    $totalproductos = mysql_num_rows($consulta);
                    if ($totalproductos > 0) {
                        while ($fila = mysql_fetch_array($consulta)) {
                            echo '
                        <div class="col-xs-10 col-sm-4 col-md-4">
                             <div class="thumbnail">
                               <img src="assets/img-products/' . $fila['Imagen'] . '">
                               <div class="caption">
                                 <h3>' . $fila['Marca'] . '</h3>
                                 <p>' . $fila['NombreProd'] . '</p>
                                 <p>$' . $fila['Precio'] . '</p>
                                 <p class="text-center">
                                     <a href="infoProd.php?CodigoProd=' . $fila['CodigoProd'] . '" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                     <button value="' . $fila['CodigoProd'] . '" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                 </p>

                               </div>
                             </div>
                         </div>     
                         ';
                        }
                    } else {
                        echo '<h2>No hay productos registrados en la tienda</h2>';
                    }
                    ?>
                </div> <!-- End of /.products -->
            </div> <!-- End of /.col-md-3 -->

        </div> <!-- End of /.row -->
    </div> <!-- End of /.container -->
</section> <!-- End of Section -->
