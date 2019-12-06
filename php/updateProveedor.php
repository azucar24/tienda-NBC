<?php

include '../sql/conexionsql.php';
    include '../sql/consulSQL.php';

sleep(5);

$nitOldProveUp = $_POST['nit-prove-old'];
$nitProveUp = $_POST['nit-prove'];
$nameProveUp = $_POST['prove-name'];
$dirProveUp = $_POST['prove-dir'];
$telProveUp = $_POST['prove-tel'];
$webProveUp = $_POST['prove-web'];

if (consultasSQL::UpdateSQL("proveedor", "NITProveedor='$nitProveUp',NombreProveedor='$nameProveUp',Direccion='$dirProveUp',Telefono='$telProveUp',PaginaWeb='$webProveUp'", "NITProveedor='$nitOldProveUp'")) {
    echo '
   <p>actualizado correctamente.</p>
   <script> location.href="../regprove.php"; </script>
 ';
} else {
    echo '
<p>error</p>   <script> location.href="../regprove.php"; </script>
 ';
}