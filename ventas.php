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
                                Pedidos <small> listado de pedidos .</small>
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 col-sm-10 col-xs-10">


                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar un pedido</h2>
                                    <form action="php/delPedido.php" method="post" role="form">
                                        <div class="form-group">
                                            <label>Pedidos</label>
                                            <select class="form-control" name="num-pedido">
                                                <?php
                                                $pedidoC = ejecutarSQL::consultar("select * from venta");
                                                while ($pedidoD = mysql_fetch_array($pedidoC)) {
                                                    echo '<option value="' . $pedidoD['NumPedido'] . '">Pedido #' . $pedidoD['NumPedido'] . ' - Estado(' . $pedidoD['Estado'] . ') - Fecha(' . $pedidoD['Fecha'] . ')</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar pedido</button></p>
                                        <br>
                                        <div id="res-form-del-pedido" style="width: 100%; text-align: center; margin: 0;"></div>
                                    </form>

                                </div>
                            </div>
                            <div class="    col-xs-12   ">
                                <br><br>
                                <div class="panel panel-info">
                                    <div class="panel-heading text-center"><i class="fa fa-refresh"></i>
                                        <h3>Administrar pedidos</h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead class="">
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">Fecha</th>
                                                    <th class="text-center">Cliente</th>
                                                    <th class="text-center">Descuento</th>
                                                    <th class="text-center">Total</th>
                                                    <th class="text-center">Estado</th>
                                                    <th class="text-center">Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $pedidoU = ejecutarSQL::consultar("select * from venta");
                                                $upp = 1;
                                                while ($peU = mysql_fetch_array($pedidoU)) {
                                                    echo '
                                                    <div id="update-pedido">
                                                      <form method="post" action="php/updatePedido.php" id="res-update-pedido-' . $upp . '">
                                                        <tr>
                                                            <td>' . $peU['NumPedido'] . '<input type="hidden" name="num-pedido" value="' . $peU['NumPedido'] . '"></td>
                                                            <td>' . $peU['Fecha'] . '</td>
                                                            <td>';
                                                    $conUs = ejecutarSQL::consultar("select * from cliente where Dui='" . $peU['Dui'] . "'");
                                                    while ($UsP = mysql_fetch_array($conUs)) {
                                                        echo $UsP['Nombre'];
                                                    }
                                                    echo '</td>
                                                            <td>' . $peU['Descuento'] . '%</td>
                                                            <td>' . $peU['TotalPagar'] . '</td>
                                                            <td>
                                                                <select class="form-control" name="pedido-status">';
                                                    if ($peU['Estado'] == "Pendiente") {
                                                        echo '<option value="Pendiente">Pendiente</option>';
                                                        echo '<option value="Entregado">Entregado</option>';
                                                    }
                                                    if ($peU['Estado'] == "Entregado") {
                                                        echo '<option value="Entregado">Entregado</option>';
                                                        echo '<option value="Pendiente">Pendiente</option>';
                                                    }
                                                    echo '</select>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="submit" class="btn btn-sm btn-primary button-UPPE" value="res-update-pedido-' . $upp . '">Actualizar</button>
                                                                <div id="res-update-pedido-' . $upp . '" style="width: 100%; margin:0px; padding:0px;"></div>
                                                            </td>
                                                        </tr>
                                                      </form>
                                                    </div>
                                                    ';
                                                    $upp = $upp + 1;
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
