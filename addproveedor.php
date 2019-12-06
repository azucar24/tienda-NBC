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
                                Proveedores <small> listado de proveedores .</small>
                            </h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-sm-10 col-xs-10">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2 class="text-primary text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar un proveedor</h2>
                                </div>


                                <div class="panel-body">
                                    <div class="list-group">
                                        <form action="php/regprove.php" method="post" role="form">
                                            <div class="form-group">
                                                <label>NIT</label>
                                                <input class="form-control" type="text" name="prove-nit" placeholder="NIT proveedor" maxlength="30" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input class="form-control" type="text" name="prove-name" placeholder="Nombre proveedor" maxlength="30" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Dirección</label>
                                                <input class="form-control" type="text" name="prove-dir" placeholder="Dirección proveedor" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Teléfono</label>
                                                <input class="form-control" type="tel" name="prove-tel" placeholder="Número telefónico" pattern="[0-9]{1,20}" maxlength="20" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Página web</label>
                                                <input class="form-control" type="text" name="prove-web" placeholder="Página web proveedor" required="">
                                            </div>
                                            <p class="text-center"><button type="submit" class="btn btn-primary">Añadir proveedor</button></p>
                                            <br>
                                            <div id="res-form-add-prove" style="width: 100%; text-align: center; margin: 0;"></div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar un proveedor</h2>
                                </div>
                                <form action="php/delprove.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Proveedores</label>
                                        <select class="form-control" name="nit-prove">
                                            <?php
                                            $proveNIT = ejecutarSQL::consultar("select * from proveedor");
                                            while ($PN = mysql_fetch_array($proveNIT)) {
                                                echo '<option value="' . $PN['NITProveedor'] . '">' . $PN['NITProveedor'] . ' - ' . $PN['NombreProveedor'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar proveedor</button></p>
                                    <br>
                                    <div id="res-form-del-prove" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                                </form>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <br><br>
                            <div class="panel panel-info">
                                <div class="panel-heading text-center"><i class="fa fa-refresh"></i>
                                    <h3>Actualizar datos de proveedor</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="">
                                            <tr>
                                                <th class="text-center">NIT</th>
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Dirección</th>
                                                <th class="text-center">Telefono</th>
                                                <th class="text-center">Página web</th>
                                                <th class="text-center">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $proveedores = ejecutarSQL::consultar("select * from proveedor");
                                            $up = 1;
                                            while ($prov = mysql_fetch_array($proveedores)) {
                                                echo '
                                                      <div id="update-proveedor">
                                                        <form method="post" action="php/updateProveedor.php" id="res-update-prove-' . $up . '">
                                                          <tr>
                                                              <td>
                                                                <input class="form-control" type="hidden" name="nit-prove-old" required="" value="' . $prov['NITProveedor'] . '">
                                                                <input class="form-control" type="text" name="nit-prove" maxlength="30" required="" value="' . $prov['NITProveedor'] . '">
                                                              </td>
                                                              <td><input class="form-control" type="text" name="prove-name" maxlength="30" required="" value="' . $prov['NombreProveedor'] . '"></td>
                                                              <td><input class="form-control" type="text-area" name="prove-dir" required="" value="' . $prov['Direccion'] . '"></td>
                                                               <td><input class="form-control" type="tel" name="prove-tel" required="" maxlength="20" value="' . $prov['Telefono'] . '"></td>
                                                              <td><input class="form-control" type="text-area" name="prove-web" maxlength="30" required="" value="' . $prov['PaginaWeb'] . '"></td>
                                                              <td class="text-center">
                                                                  <button type="submit" class="btn btn-sm btn-primary button-UP" value="res-update-prove-' . $up . '">Actualizar</button>
                                                                  <div id="res-update-prove-' . $up . '" style="width: 100%; margin:0px; padding:0px;"></div>
                                                              </td>
                                                          </tr>
                                                        </form>
                                                      </div>
                                                      ';
                                                $up = $up + 1;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer>
                    <p class="back-link">Salvador Azuca, Melissa Campos, Dayana Claros, Mario Marquez. <a href=""> Web y Comercio Electronico I</a></p>
                </footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>


</body>

</html>
