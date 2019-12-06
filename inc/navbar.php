<?php 
    session_start(); 
    error_reporting(E_PARSE);
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador'] = 0;
    }
?>

<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="configAdmin.php">Admin</a>
        </div>

        <ul class="nav navbar-top-links navbar-right">

            <!-- /.dropdown -->

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>

                <ul class="dropdown-menu dropdown-user">

                    <li class="divider">

                    </li>
                    <li>
                        <?php' 
                          <i class="fa fa-user"></i>&nbsp;&nbsp;'.$_SESSION['nombreAdmin'].'
                                '?>
                    </li>



                    <li><a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-logout" title="Cerrar Sesión"><i class="fa fa-sign-out fa-fw">

                            </i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </nav>
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li> <a class="active-menu" href="configAdmin.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>

                <li> <a href="productos.php"><i class="fa fa-shopping-cart"></i> Productos</a> </li>
                <li> <a href="categorias.php"><i class="fa fa-table"></i> Categorias</a> </li>
                <li> <a href="addproveedor.php"><i class="fa fa-truck "></i> Proveedores</a> </li>

                <li>
                    <a href="#"><i class="fa fa-sitemap"></i> Mas opciones<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="addusuarios.php"><i class="fa fa-users"></i> Usuarios</a> </li>
                        <li> <a href="ventas.php"><i class="fa fa-money"></i> Pedidos</a> </li>

                    </ul>
                </li>
                <li>
                </li>
            </ul>

        </div>

    </nav>


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
