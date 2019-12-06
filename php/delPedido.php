<?php

session_start();
include '../sql/conexionsql.php';
    include '../sql/consulSQL.php'; 

sleep(5);
$NumPedidoDel = $_POST['num-pedido'];
$consP = ejecutarSQL::consultar("select * from venta where NumPedido='$NumPedidoDel'");
$totalP = mysql_num_rows($consP);

if ($totalP > 0) {
    if (consultasSQL::DeleteSQL('venta', "NumPedido='" . $NumPedidoDel . "'")) {
        consultasSQL::DeleteSQL("detalle", "NumPedido='" . $NumPedidoDel . "'");
        echo ' <br><p class="lead text-center">Pedido eliminado éxitosamente</p><script> location.href="../ventas.php"; </script>';
    } else {
        echo ' <br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p><script> location.href="../ventas.php"; </script>';
    }
} else {
    echo ' <br><p class="lead text-center">El pedido no existe</p><script> location.href="../ventas.php"; </script>';
}
