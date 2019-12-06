<?php

include '../sql/conexionsql.php';
    include '../sql/consulSQL.php';

sleep(4);

$codeProd = $_POST['prod-code'];
$cons = ejecutarSQL::consultar("select * from producto where CodigoProd='$codeProd'");
$totalproductos = mysql_num_rows($cons);
$tmp = mysql_fetch_array($cons);
$imagen = $tmp['Imagen'];
if ($totalproductos > 0) {
    if (consultasSQL::DeleteSQL('producto', "CodigoProd='" . $codeProd . "'")) {
        $carpeta = '../assets/img-products/';
        $directorio = $carpeta . $imagen;
        chmod($directorio, 0777);
        unlink($directorio);
        echo '<br><p class="lead text-center">El producto se elimino de la tienda con éxito</p><script> location.href="../productos.php"; </script>';
    } else {
        echo '<br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p><script> location.href="../productos.php"; </script>';
    }
} else {
    echo '<br><p class="lead text-center">El código del producto no existe</p><script> location.href="../productos.php"; </script>';
}