<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>NBC-Repuestos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <meta charset="utf-8">
        <?php include './inc/links.php'; ?>
    </head>

    <body>
        <!-- TOP HEADER Start
        ================================================== -->
        <?php include './inc/header.php'; ?>

        <section id="topic-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h1>Tienda</h1>
                        <p>todo tipo de Repuestos</p>
                    </div> <!-- End of /.col-md-4 -->
                    <div class="col-md-8 hidden-xs">
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Inicio</a></li>
                            <li class="active">Repuestos</li>
                        </ol>
                    </div> <!-- End of /.col-md-8 -->
                </div> <!-- End of /.row -->
            </div> <!-- End of /.container -->
        </section> <!-- End of /#Topic-header -->

        <section id="features">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-left" href="#">
                                    <i class="fa fa-ambulance"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Envío gratis</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-left" href="#">
                                    <i class=" fa fa-foursquare"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Politicas de la Empresa</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="block">
                            <div class="media">
                                <div class="pull-left" href="#">
                                    <i class=" fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Llamanos</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur.</p>
                                </div> <!-- End of /.media-body -->
                            </div> <!-- End of /.media -->
                        </div> <!-- End of /.block -->
                    </div> <!-- End of /.col-md-4 -->
                </div> <!-- End of /.row -->
            </div> <!-- End of /.container -->
        </section> <!-- End of section -->

        <!-- PRODUCTS Start
        ================================================== -->

        <section id="shop">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="products-heading">
                            <h2>Nuevos Repuestos</h2>
                        </div> <!-- End of /.Products-heading -->
                        <div class="row">
                            <div class="col-md-11">
                                <div class="products">
                                    <?php
                                    include 'sql/conexionsql.php';
                                    include 'sql/consulSQL.php';
                                    $consulta = ejecutarSQL::consultar("select * from producto where Stock > 0 limit 6");
                                    $totalproductos = mysql_num_rows($consulta);
                                    if ($totalproductos > 0) {
                                        while ($fila = mysql_fetch_array($consulta)) {
                                            echo '
                        <div class="col-xs-12 col-sm-6 col-md-4">
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

                        <!-- Pagination -->

                        <div class="pagination-bottom">
                            <ul class="pagination">
                                <li class="disabled"><a href="#">&laquo;</a></li>
                                <li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">»</a></li>
                            </ul> <!-- End of /.pagination -->
                        </div>
                    </div> <!-- End of /.col-md-9 -->

                    <?php
                    include_once('catego.php');
                    ?>

                </div> <!-- End of /.container -->
        </section> <!-- End of Section -->
        <?php include './inc/footer.php'; ?>
    </body>

</html>
