<?php

include '../sql/conexionsql.php';
    include '../sql/consulSQL.php';
sleep(5);

$numPediUp = $_POST['num-pedido'];
$estadPediUp = $_POST['pedido-status'];


if (consultasSQL::UpdateSQL("venta", "Estado='$estadPediUp'", "NumPedido='$numPediUp'")) {
    echo '
      <script> location.href="../ventas.php"; </script>
 ';
} else {
    echo '
   <script> location.href="../ventas.php"; </script>
 ';
}