<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NBC, Somos lo mejor de lo mejor.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><title>Registro</title>
        <meta charset="utf-8">
        <?php include './inc/links.php'; ?>
    </head>

    <body>
        <!-- TOP HEADER Start
        ================================================== -->
        <?php include './inc/header.php'; ?>
        <!-- logo -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#">
                            <img src="images/logonbc.png" alt="logo">
                        </a>
                    </div> <!-- End of /.col-md-12 -->
                </div> <!-- End of /.row -->
            </div> <!-- End of /.container -->
        </header> <!-- End of /Header -->

        <!-- SLIDER Start
    ================================================== -->
        <section id="slider-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="slider" class="nivoSlider">
                            <img src="images/slider.png" alt="" />
                            <img src="images/slider2.png" alt="" />
                            <img src="images/slider3.png" alt="" />
                        </div> <!-- End of /.nivoslider -->
                    </div> <!-- End of /.col-md-12 -->
                </div> <!-- End of /.row -->
            </div> <!-- End of /.container -->
        </section>

        <!-- FEATURES Start
     ================================================== -->

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

        <!-- Contacto
 ================================================== -->

        <section id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 clearfix">
                        <div class="blog-icon">
                            <i class="fa  fa-contact"></i>
                        </div>
                        <div class="blog-post-body clearfix">

                            <h2>Formulario de contacto. </h2>
                            <form action="envia.php" method="post" class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="inputname" class="col-sm-2 control-label">Nombre completo</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nombre" placeholder="Nombre y apellido" class="form-control" required autofocus>
                                    </div>
                                </div> <!-- End of /.form-group -->
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" placeholder="Email" class="form-control" required>
                                    </div>
                                </div> <!-- End of /.form-group -->

                                <div class="form-group">
                                    <label for="inputmessage" class="col-sm-2 control-label">Mensaje</label>
                                    <div class="col-sm-9">
                                        <textarea name="consulta" class="form-control"></textarea>
                                    </div>
                                </div> <!-- End of /.form-group -->                                    <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-9">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div> <!-- End of /.form-group -->
                            </form> <!-- End of /.form-horizontal -->


                        </div> <!-- End of /.comments-box -->

                    </div> <!-- End of /.Sidebar -->
                    <?php
                    include_once('catego.php');
                    ?>
                </div> <!-- End of /.col-md-3 -->
            </div> <!-- End of /.row -->
        </section> <!-- End of /.Section -->

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

