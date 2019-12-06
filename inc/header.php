<?php 
    session_start(); 
    error_reporting(E_PARSE);
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador'] = 0;
    }
?>

<!-- TOP HEADER Start
    ================================================== -->

<section id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <p class="contact-action"><i class="fa fa-phone-square"></i>EN CASO DE CUALQUIER PREGUNTA, LLAME A ESTE NÚMERO: <strong>+503 26 975 658</strong></p>
            </div>

            <div class="col-md-2">
                <div class="search-box">
                    <div class="input-group">
                        <input placeholder="buscar" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default fa fa-search" type="button"></button>
                        </span>
                    </div><!-- /.input-group -->
                </div><!-- /.search-box -->
            </div>
        </div> <!-- End Of /.row -->
    </div> <!-- End Of /.Container -->
</section>



<!-- MENU Start
    ================================================== -->

<nav class="navbar navbar-default " >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div> <!-- End of /.navbar-header -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav nav-main" >
                <li><a href="index.php" class="menu-option "><span class="fa fa-home"></span> Inicio</a></li>
                <li><a href="catalogo.php" class="menu-option "><span class="fa fa-table"></span> Catálogo</a></li>
                <li><a href="blog.php" class="menu-option "><span class="fa fa-info"></span> Quienes Somos</a></li>
                <li><a href="contacto.php"><span class="fa fa-phone-square"></span> Contacto</a></li>

                <?php
                            if(!$_SESSION['nombreAdmin']==""){
                                echo  
                                    '<script> location.href="productos.php"; </script>
                                    
                                  
                                    <li><a href="#" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                                        <i class="fa fa-shopping-cart"> Carrito</i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                                    </a>Carrito</li>
                                    <li><a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-logout" title="Cerrar Sesión">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;'.$_SESSION['nombreAdmin'].'
                                    </a></li>';
                                    
                                 
                            }else if(!$_SESSION['nombreUser']==""){
                                echo ' 
                                    <li><a href="pedido.php" class="table-cell-td">Pedido</a></li   >
                                    <li><a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-carrito1" title="Ver carrito de compras">
                                        <i class="fa fa-shopping-cart"> Carrito</i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                                    </a></li>
                                    <li><a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-logout" title="Cerrar Sesión">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;'.$_SESSION['nombreUser'].'
                                    </a></li>
                                 ';
                            }else{
                                echo ' 
                                   <li> <a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-registro"><i class="fa fa-pencil"></i> Registrarme</a></li>
                                    <li ><a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-carrito1" title="Ver carrito de compras">
                                        <i class="fa fa-shopping-cart"> Carrito</i>&nbsp;&nbsp<i class="fa fa-caret-down"></i>
                                    </a></li>
                                    <li><a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-login" title="Iniciar Sesión">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;Login
                                    </a></li>
                                 ';
                            }
                        ?>
            </ul> <!-- End of /.nav-main -->
        </div> <!-- /.navbar-collapse -->
    </div> <!-- /.container-fluid -->
</nav> <!-- End of /.nav -->



<!-- Modal login -->
<div class="modal fade modal-login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content" id="modal-form-login">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title text-center text-primary" id="myModalLabel">Iniciar sesión en NBC</h4>
                </div>
            <form action="php/login.php" method="post" role="form" style="margin: 20px;" class="FormCatElec" data-form="login">
                  <div class="form-group">
                      <label><span class="glyphicon glyphicon-user"></span>&nbsp;Nombre</label>
                      <input type="text" class="form-control" name="nombre-login" placeholder="Escribe tu nombre" required=""/>
                  </div>
                  <div class="form-group">
                      <label><span class="glyphicon glyphicon-lock"></span>&nbsp;Contraseña</label>
                      <input type="password" class="form-control" name="clave-login" placeholder="Escribe tu contraseña" required=""/>
                  </div>

                  <p>¿Cómo iniciaras sesión?</p>
                  <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" value="option1" checked>
                        Cliente
                    </label>
                 </div>
                 <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" value="option2">
                         Administrador
                    </label>
                 </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Iniciar sesión</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                  </div>
                  <div class="ResFormL" style="width: 100%; text-align: center; margin: 0;"></div>
              </form>
          </div>
      </div>
    </div>
<!-- Fin Modal login -->
<!-- Modal login -->
<div class="modal fade modal-registro" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="modal-form-login">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center text-primary" id="myModalLabel">Registrarse en NBC </h4>
            </div>
            <div id="container-form">
                <form class="form-horizontal FormCatElec" action="php/regclien.php" role="form" style="margin: 20px;" class="FormCatElec" method="post" data-form="save">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                            <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese su número de DUI" required name="clien-nit" data-toggle="tooltip" data-placement="top" title="Ingrese su número de DUI. Solamente números " maxlength="30" pattern="[0-9]{9,10}" autofocus>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese su nombre de usuario" required name="clien-name" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre. Máximo 9 caracteres (solamente letras)" pattern="[a-zA-Z]{1,9}" maxlength="9">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese sus nombres" required name="clien-fullname" data-toggle="tooltip" data-placement="top" title="Ingrese sus nombres.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese sus apellidos" required name="clien-lastname" data-toggle="tooltip" data-placement="top" title="Ingrese sus apellido(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                            <input class="form-control all-elements-tooltip" type="password" placeholder="Introdusca una contraseña" required name="clien-pass" data-toggle="tooltip" data-placement="top" title="Defina una contraseña para iniciar sesión">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-home"></i></div>
                            <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese su dirección" required name="clien-dir" data-toggle="tooltip" data-placement="top" title="Ingrese la direción en la reside actualmente" maxlength="100">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-mobile"></i></div>
                            <input class="form-control all-elements-tooltip" type="tel" placeholder="Ingrese su número telefónico" required name="clien-phone" maxlength="11" pattern="[0-9]{8,11}" data-toggle="tooltip" data-placement="top" title="Ingrese su número telefónico. Mínimo 8 digitos máximo 11">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-mail"></i></div>
                            <input class="form-control all-elements-tooltip" type="email" placeholder="Ingrese su Email" required name="clien-email" data-toggle="tooltip" data-placement="top" title="Ingrese la dirección de su Email" maxlength="50">
                        </div>
                    </div>
                    <br>
                    <p><button type="submit" class="btn btn-success btn-block"><i class="fa fa-pencil"></i>&nbsp; Registrarse</button></p>
                    <div class="ResForm" style="width: 100%; color: #fff; text-align: center; margin: 0;"></div>
                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal login -->
<!-- Modal carrito -->
<div class="modal fade modal-carrito" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <br>
            <p class="text-center"><i class="fa fa-shopping-cart fa-5x"></i></p>
            <p class="text-center">El producto se añadio al carrito</p>
            <p class="text-center"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Aceptar</button></p>
        </div>
    </div>
</div>
<!-- Fin Modal carrito -->

<!-- Modal carrito -->
<div class="modal fade modal-carrito1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
                 <div class="container">
        <div class="row">
           
            <div class="col-xs-12 col-sm-6">
                <H5>Productos Agregados al Carrito</H5>
                <div id="carrito-compras-tienda"></div>
               
            </div>
            <div class="col-xs-12 col-sm-6">
                <p class="text-center" style="font-size: 80px;">
                    <i class="fa fa-shopping-cart"></i>
                </p>
                <p class="text-center">
                    <a href="pedido.php" class="btn btn-success btn-block"><i class="fa fa-dollar"></i>   Confirmar pedido</a>
                    <a href="php/vaciarcarrito.php" class="btn btn-danger btn-block"><i class="fa fa-trash"></i>   Vaciar carrito</a> 
                </p>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>
</div>
<!-- Fin Modal carrito -->
<!-- Modal logout -->
<div class="modal fade modal-logout" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <br>
            <p class="text-center">¿Quieres cerrar la sesión?</p>
            <p class="text-center"><i class="fa fa-exclamation-triangle fa-5x"></i></p>
            <p class="text-center">
                <a href="php/logout.php" class="btn btn-primary btn-sm">Cerrar la sesión</a>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
            </p>
        </div>
    </div>
</div>
<!-- Fin Modal logout -->
