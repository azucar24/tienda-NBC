<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NBC Bicicletas El Salvador</title>
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
                            <img src="images/logonbc.png" width="350" alt="logo">
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
                                    <p>503 26 975 658.</p>
                                </div> <!-- End of /.media-body -->
                            </div> <!-- End of /.media -->
                        </div> <!-- End of /.block -->
                    </div> <!-- End of /.col-md-4 -->
                </div> <!-- End of /.row -->
            </div> <!-- End of /.container -->
        </section> <!-- End of section -->

        <!-- CATAGORIas Start
         ================================================== -->

        <?php
        include_once('cate_index.php');
        ?>

        <!-- PRODUCTosS Start
     ================================================== -->


        <?php
        include_once('prod_index.php');
        ?>

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
