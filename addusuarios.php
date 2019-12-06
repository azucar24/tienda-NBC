<?php
include './sql/conexionsql.php';
include './sql/consulSQL.php';
include './php/securityPanel.php';
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Admin</title>
        <?php include './inc/link.php'; ?>
        <script type="text/javascript" src="js/admin.js"></script>
    </head>

    <body>
        <div id="wrapper">
            <?php include './inc/navbar.php'; ?>
            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-header">
                                Administradores <small> listado de administradores .</small>
                            </h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-sm-10 col-xs-10">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2 class="text-primary text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar un administrador</h2>
                                </div>


                                <div class="panel-body">
                                    <div class="list-group">
                                        <form action="php/regAdmin.php" method="post" role="form">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input class="form-control" type="text" name="admin-name" placeholder="Nombre" maxlength="9" pattern="[a-zA-Z]{4,9}" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Contraseña</label>
                                                <input class="form-control" type="password" name="admin-pass" placeholder="Contraseña" required="">
                                            </div>
                                            <p class="text-center"><button type="submit" class="btn btn-primary">Agregar administrador</button></p>
                                            <br>
                                            <div id="res-form-add-admin" style="width: 100%; text-align: center; margin: 0;"></div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar un administrador</h2>
                                </div>
                                <form action="php/deladmin.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Administradores</label>
                                        <select class="form-control" name="name-admin">
                                            <?php
                                            $adminCon = ejecutarSQL::consultar("select * from administrador");
                                            while ($AdminD = mysql_fetch_array($adminCon)) {
                                                echo '<option value="' . $AdminD['Nombre'] . '">' . $AdminD['Nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar administrador</button></p>
                                    <br>
                                    <div id="res-form-del-admin" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>

                            </div>
                        </div>


                        <!--/////opcion a poder actualizar admin
                           
                             <div class="col-xs-12">
                            <br><br>
                            <div class="panel panel-info">
                                <div class="panel-heading text-center"><i class="fa fa-refresh"></i>
                                    <h3>Actualizar categoría</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="">
                                            <tr>
                                                <th class="text-center">Código</th>
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Descripción</th>
                                                <th class="text-center">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php
                        $categorias = ejecutarSQL::consultar("select * from categoria");
                        $ui = 1;
                        while ($cate = mysql_fetch_array($categorias)) {
                            echo '
                                                      <div id="update-category">
                                                        <form method="post" action="php/updateCategory.php" id="res-update-category-' . $ui . '">
                                                          <tr>
                                                              <td>
                                                                <input class="form-control" type="hidden" name="categ-code-old" maxlength="9" required="" value="' . $cate['CodigoCat'] . '">
                                                                <input class="form-control" type="text" name="categ-code" maxlength="9" required="" value="' . $cate['CodigoCat'] . '">
                                                              </td>
                                                              <td><input class="form-control" type="text" name="categ-name" maxlength="30" required="" value="' . $cate['Nombre'] . '"></td>
                                                              <td><input class="form-control" type="text-area" name="categ-descrip" required="" value="' . $cate['Descripcion'] . '"></td>
                                                              <td class="text-center">
                                                                  <button type="submit" class="btn btn-sm btn-primary button-UC" value="res-update-category-' . $ui . '">Actualizar</button>
                                                                  <div id="res-update-category-' . $ui . '" style="width: 100%; margin:0px; padding:0px;"></div>
                                                              </td>
                                                          </tr>
                                                        </form>
                                                      </div>
                                                      ';
                            $ui = $ui + 1;
                        }
                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>-->


                    </div>
                </div>
                <footer>
                   <p class="back-link">Salvador Azuca, Melissa Campos, Dayana Claros, Mario Marquez. <a href=""> Web y Comercio Electronico I</a></p>
                </footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->


    </body>

</html>
