<?php
include 'sql/conexionsql.php';
include 'sql/consulSQL.php';
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>NBC, Somos lo mejor de lo mejor.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Registro</title>
        <meta charset="utf-8">
        <?php include './inc/links.php'; ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .social .fa {
                padding: 15px;
                font-size: 12px;
                width: 35px;

                text-align: center;
                text-decoration: none;
                margin: 5px 2px;
            }

            .fa:hover {
                opacity: 0.7;
            }

            .fa-facebook {
                background: #3B5998;
                color: white;
            }

            .fa-twitter {
                background: #55ACEE;
                color: white;
            }

            .fa-google {
                background: #dd4b39;
                color: white;
            }



            .fa-instagram {
                background: #125688;
                color: white;
            }


            .fa-snapchat-ghost {
                background: #fffc00;
                color: white;
                text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
            }



            .fa-tumblr {
                background: #2c4762;
                color: white;
            }

        </style>
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
                        <p>Descripcion de productos</p>
                    </div> <!-- End of /.col-md-4 -->
                    <div class="col-md-8 hidden-xs">
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Tienda</a></li>
                            <li class="active">Detalles</li>
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

        <section id="infoproduct">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="products-heading">
                            <h2>Informacion de productos</h2>
                        </div> <!-- End of /.Products-heading -->
                        <div class="product-grid">
                            <?php
                            $CodigoProducto = $_GET['CodigoProd'];
                            $productoinfo = ejecutarSQL::consultar("select * from producto where CodigoProd='" . $CodigoProducto . "'");
                            while ($fila = mysql_fetch_array($productoinfo)) {
                                echo '
                            <div class="col-xs-12 col-sm-6">
                              
                                <br><br>
                                <h6><strong>Nombre: </strong>' . $fila['NombreProd'] . '</h4><br>
                                <h6><strong>Modelo: </strong>' . $fila['Modelo'] . '</h4><br>
                                <h6><strong>Marca: </strong>' . $fila['Marca'] . '</h4><br>
                                <h6><strong>Descripcion: </strong>' . $fila['descriPro'] . '</h4><br>
                                <h6><strong>Precio: </strong>$' . $fila['Precio'] . '</h4>

                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <br><br><br>
                                <img class="img-responsive" src="assets/img-products/' . $fila['Imagen'] . '">
                            </div>
                            <br><br><br>
                            <div class="col-xs-12 text-center">
                                <li> <a href="catalogo.php" class="btn  btn-primary"><i class="fa fa-mail-reply"></i>&nbsp;&nbsp;Regresar a la tienda</a> &nbsp;&nbsp;&nbsp; 
                                <button value="' . $fila['CodigoProd'] . '" class="btn  btn-success botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp; Añadir al carrito</button>
                                <br> <br> <br>
                                <div class="social">
                    

                    <!-- Add font awesome icons -->
                    <a title="Compartir el Producto con tus amigos" href="#" class="fa fa-facebook"></a>
                    <a title="Compartir el Producto con tus amigos" href="#" class="fa fa-twitter"></a>
                    <a title="Compartir el Producto con tus amigos" href="#" class="fa fa-google"></a>
                    <a title="Compartir el Producto con tus amigos" href="#" class="fa fa-instagram"></a>
                    <a title="Compartir el Producto con tus amigos" href="#" class="fa fa-snapchat-ghost"></a>
                    <a title="Compartir el Producto con tus amigos" href="#" class="fa fa-tumblr"></a>
                    <h5>Compartir en redes sociales.
                    </h5>
                     </div>
                    
                            </div>
                        ';
                            }
                            ?>
                            <br>
                            <br>


                        </div> <!-- End of /.products -->


                    </div> <!-- End of /.products-grid -->

                    <?php
                    include_once('catego.php');
                    ?>
                </div> <!-- End of /.col-md-9 -->
            </div> <!-- End of /.container -->
        </section> <!-- End of Section -->
        <?php include './inc/footer.php'; ?>
    </body>

</html>
