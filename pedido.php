<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>NBC Bicicletas El Salvador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Registro</title>
    <meta charset="utf-8">
    <?php include './inc/links.php'; ?>
</head>

<body>
    <!-- TOP HEADER Start
        ================================================== -->
    <?php include './inc/header.php'; ?>
    <section id="container-carrito-compras">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div id="carrito-compras-tienda"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <p class="text-center" style="font-size: 80px;">
                        <i class="fa fa-shopping-cart"></i>
                    </p>
                    <p class="text-center">
                        <a href="pedido.php" class="btn btn-success btn-block"><i class="fa fa-dollar"></i> Confirmar pedido</a>
                        <a href="php/vaciarcarrito.php" class="btn btn-danger btn-block"><i class="fa fa-trash"></i> Vaciar carrito</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="topic-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>Tienda</h1>
                    <p>Pedidos de productos</p>
                </div> <!-- End of /.col-md-4 -->
                <div class="col-md-8 hidden-xs">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Inicio</a></li>
                        <li class="active">Pedidos</li>
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
                <div class="col-md-8">
                    <div class="products-heading">
                        <h2>Pedido de productos</h2>
                    </div> <!-- End of /.Products-heading -->

                    <div class="product-grid">
                        <form action="php/confirmcompra.php" method="post" role="form" class="Form" data-form="save">
                            <?php
                                if (!$_SESSION['nombreUser'] == "" && !$_SESSION['claveUser'] == "") {
                                    echo '
                                        <h2 class="text-center">¿Confirmar pedido?</h2>
                                        <p class="text-center">Para confirmar tu pedido presiona el botón confirmar</p>
                                        <br>
                                     
                                          <input type="hidden" name="clien-name" value="' . $_SESSION['nombreUser'] . '">
                                          <input type="hidden" name="clien-pass" value="' . $_SESSION['claveUser'] . '">
                                          <input type="hidden"  name="clien-number" value="log">
                                        <br>
                                        <p class="text-center"><button class="btn btn-success" type="submit">Confirmar</button></p>
                                    ';
                                } else {
                                    echo '
                                        <h3 class="text-center">¿Confirmar el pedido?</h3>
                                        <p>
                                            Para confirmar tu compra debes haber iniciar sesión o introducir tu nombre de usuario
                                            y contraseña con la cual te registraste en <span class="tittles-pages-logo">NBC</span>.
                                        </p>
                                        <br>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                          <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese su nombre" required name="clien-name" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre" pattern="[a-zA-Z]{1,9}" maxlength="9">
                                        </div>
                                      </div>
                                      <br>
                                      <div class="form-group">
                                        <div class="input-group">
                                          <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                          <input class="form-control all-elements-tooltip" type="password" placeholder="Introdusca su contraseña" required name="clien-pass" data-toggle="tooltip" data-placement="top" title="Introdusca su contraseña">
                                        </div>
                                      </div>
                                      <input type="hidden"  name="clien-number" value="notlog">
                                      <br>
                                      <p class="text-center"><button class="btn btn-success" type="submit">Confirmar</button></p>
                                    ';
                                }
                                ?>
                            <div class="ResForm" style="width: 100%; text-align: center; margin: 0;"></div>
                        </form>
                    </div> <!-- End of /.products -->

                </div> <!-- End of /.products-grid -->

                <?php
                    include_once('catego.php');
                    ?>
            </div> <!-- End of /.col-md-9 -->



        </div> <!-- End of /.container -->
    </section> <!-- End of Section -->

    <!-- CALL TO ACTION Start
   ================================================== -->

    <section id="call-to-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="block-heading">
                            <h2>NUESTRAS MARCAS</h2>
                        </div>
                    </div> <!-- End of /.block -->
                    <div id="owl-example" class="owl-carousel">
                        <div> <img src="images/marca1.jpg" alt=""></div>
                        <div> <img src="images/marca2.png" alt=""></div>
                        <div> <img src="images/marca3.jpg" alt=""></div>
                        <div> <img src="images/marca4.png" alt=""></div>
                        <div> <img src="images/marca5.png" alt=""></div>
                        <div> <img src="images/marca6.jpg" alt=""></div>
                        <div> <img src="images/marca7.png" alt=""></div>
                        <div> <img src="images/marca8.png" alt=""></div>
                        <div> <img src="images/marca9.png" alt=""></div>
                    </div>
                </div> <!-- End of /.col-md-12 -->
            </div> <!-- End Of /.Row -->
        </div> <!-- End Of /.Container -->
    </section> <!-- End of Section -->
    <?php include './inc/footer.php'; ?>
</body>

</html>
