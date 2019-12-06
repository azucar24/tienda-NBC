<?php
include 'sql/conexionsql.php';
include 'sql/consulSQL.php';
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
                            Productos <small> listado de productos .</small>
                        </h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7 col-sm-10 col-xs-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="text-primary text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar un productos</h2>
                            </div>


                            <div class="panel-body">
                                <div class="list-group">
                                    <form role="form" action="php/regproduct.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Código de producto</label>
                                            <input type="text" class="form-control" placeholder="Código" required maxlength="30" name="prod-codigo">
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre de producto</label>
                                            <input type="text" class="form-control" placeholder="Nombre" required maxlength="30" name="prod-name">
                                        </div>
                                        <div class="form-group">
                                            <label>Categoría</label>
                                            <select class="form-control" name="prod-categoria">
                                                <?php
                                                    $categoriac = ejecutarSQL::consultar("select * from categoria");
                                                    while ($catec = mysql_fetch_array($categoriac)) {
                                                        echo '<option value="' . $catec['CodigoCat'] . '">' . $catec['Nombre'] . '</option>';
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Precio</label>
                                            <input type="text" class="form-control" placeholder="Precio" required maxlength="20" pattern="[0-9]{1,20}" name="prod-price">
                                        </div>
                                        <div class="form-group">
                                            <label>Modelo</label>
                                            <input type="text" class="form-control" placeholder="Modelo" required maxlength="30" name="prod-model">
                                        </div>
                                        <div class="form-group">
                                            <label>Marca</label>
                                            <input type="text" class="form-control" placeholder="Marca" required maxlength="30" name="prod-marca">
                                        </div>
                                        <div class="form-group">
                                            <label>Unidades disponibles</label>
                                            <input type="text" class="form-control" placeholder="Unidades" required maxlength="20" pattern="[0-9]{1,20}" name="prod-stock">
                                        </div>
                                        <div class="form-group">
                                            <label>Descripcion</label>
                                            <textarea type="text" class="form-control" placeholder="Descripcion" required maxlength="100" name="prod-descri"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Proveedor</label>
                                            <select class="form-control" name="prod-codigoP">
                                                <?php
                                                    $proveedoresc = ejecutarSQL::consultar("select * from proveedor");
                                                    while ($provc = mysql_fetch_array($proveedoresc)) {
                                                        echo '<option value="' . $provc['NITProveedor'] . '">' . $provc['NombreProveedor'] . '</option>';
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Imagen de producto</label>
                                            <input type="file" name="img">
                                            <p class="help-block">Formato de imagenes admitido png, jpg, gif, jpeg</p>
                                        </div>
                                        <input type="hidden" name="admin-name" value="<?php echo $_SESSION['nombreAdmin'] ?>">
                                        <p class="text-center"><button type="submit" class="btn btn-primary">Agregar a la tienda</button></p>
                                        <div id="res-form-add" style="width: 100%; text-align: center; margin: 0;">
                                            
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar un producto</h2>
                            </div>

                            <form action="php/delprod.php" method="post" role="form">
                                <div class="form-group">
                                    <label>Productos</label>
                                    <select class="form-control" name="prod-code">
                                        <?php
                                            $productoc = ejecutarSQL::consultar("select * from producto");
                                            while ($prodc = mysql_fetch_array($productoc)) {
                                                echo '<option value="' . $prodc['CodigoProd'] . '">' . $prodc['Marca'] . '-' . $prodc['NombreProd'] . '-' . $prodc['Modelo'] . '</option>';
                                            }
                                            ?>
                                    </select>
                                </div>
                                <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar</button></p>
                                <br>
                                <div id="res-form-del-prod" style="width: 100%; text-align: center; margin: 0;">
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <br><br>
                        <div class="panel panel-info">
                            <div class="panel-heading text-center"><i class="fa fa-refresh"></i>
                                <h3>Actualizar datos de producto</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="">
                                        <tr>
                                            <th class="text-center">Descripcion</th>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Categoría</th>
                                            <th class="text-center">Precio</th>
                                            <th class="text-center">Modelo</th>
                                            <th class="text-center">Marca</th>
                                            <th class="text-center">Unidades</th>
                                            <th class="text-center">Proveedor</th>
                                            <th class="text-center">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $productos = ejecutarSQL::consultar("select * from producto");
                                            $upr = 1;
                                            while ($prod = mysql_fetch_array($productos)) {
                                                echo '
                                                <div id="update-product">
                                                  <form method="post" action="process/updateProduct.php" id="res-update-product-' . $upr . '">
                                                    <tr>
                                                        <td>
                                                          <input class="form-control" type="hidden" name="code-old-prod" required="" value="' . $prod['descriPro'] . '">
                                                          <input class="form-control" type="text" name="prod-descri" maxlength="100" required="" value="' . $prod['descriPro'] . '">
                                                        </td>
                                                        <td><input class="form-control" type="text" name="prod-name" maxlength="30" required="" value="' . $prod['NombreProd'] . '"></td>
                                                        <td>';
                                                $categoriac3 = ejecutarSQL::consultar("select * from categoria where CodigoCat='" . $prod['CodigoCat'] . "'");
                                                while ($catec3 = mysql_fetch_array($categoriac3)) {
                                                    $codeCat = $catec3['CodigoCat'];
                                                    $nameCat = $catec3['Nombre'];
                                                }
                                                echo '<select class="form-control" name="prod-category">';
                                                echo '<option value="' . $codeCat . '">' . $nameCat . '</option>';
                                                $categoriac2 = ejecutarSQL::consultar("select * from categoria");
                                                while ($catec2 = mysql_fetch_array($categoriac2)) {
                                                    if ($catec2['CodigoCat'] == $codeCat) {
                                                        
                                                    } else {
                                                        echo '<option value="' . $catec2['CodigoCat'] . '">' . $catec2['Nombre'] . '</option>';
                                                    }
                                                }
                                                echo '</select>
                                                        </td>
                                                        <td><input class="form-control" type="text-area" name="price-prod" required="" value="' . $prod['Precio'] . '"></td>
                                                        <td><input class="form-control" type="tel" name="model-prod" required="" maxlength="20" value="' . $prod['Modelo'] . '"></td>
                                                        <td><input class="form-control" type="text-area" name="marc-prod" maxlength="30" required="" value="' . $prod['Marca'] . '"></td>
                                                        <td><input class="form-control" type="text-area" name="stock-prod" maxlength="30" required="" value="' . $prod['Stock'] . '"></td>
                                                        <td>';
                                                $proveedoresc3 = ejecutarSQL::consultar("select * from proveedor where NITProveedor='" . $prod['NITProveedor'] . "'");
                                                while ($provc3 = mysql_fetch_array($proveedoresc3)) {
                                                    $nombreP = $provc3['NombreProveedor'];
                                                    $nitP = $provc3['NITProveedor'];
                                                }
                                                echo '<select class="form-control" name="prod-Prove">';
                                                echo '<option value="' . $nitP . '">' . $nombreP . '</option>';
                                                $proveedoresc2 = ejecutarSQL::consultar("select * from proveedor");
                                                while ($provc2 = mysql_fetch_array($proveedoresc2)) {
                                                    if ($provc2['NITProveedor'] == $nitP) {
                                                        
                                                    } else {
                                                        echo '<option value="' . $provc2['NITProveedor'] . '">' . $provc2['NombreProveedor'] . '</option>';
                                                    }
                                                }
                                                echo '</select>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="submit" class="btn btn-sm btn-primary button-UPR" value="res-update-product-' . $upr . '">Actualizar</button>
                                                            <div id="res-update-product-' . $upr . '" style="width: 100%; margin:0px; padding:0px;"></div>
                                                        </td>
                                                    </tr>
                                                  </form>
                                                </div>
                                                ';
                                                $upr = $upr + 1;
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
