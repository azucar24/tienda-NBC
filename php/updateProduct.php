<?php

include '../sql/conexionsql.php';
    include '../sql/consulSQL.php';

sleep(5);

$codeOldProdUp = $_POST['code-old-prod'];
$codeProdUp = $_POST['code-prod'];
$nameProdUp = $_POST['prod-name'];
$catProdUp = $_POST['prod-category'];
$priceProdUp = $_POST['price-prod'];
$modelProdUp = $_POST['model-prod'];
$marcaProdUp = $_POST['marc-prod'];
$stockProdUp = $_POST['stock-prod'];
$desPro = $_POST['prod-descri'];
$proveProdUp = $_POST['prod-Prove'];

if (consultasSQL::UpdateSQL("producto", "CodigoProd='$codeProdUp',NombreProd='$nameProdUp',CodigoCat='$catProdUp',Precio='$priceProdUp',Modelo='$modelProdUp',Marca='$marcaProdUp',Stock='$stockProdUp',descriPro='$desPro',NITProveedor='$proveProdUp'", "CodigoProd='$codeOldProdUp'")) {
    echo '
   <script> location.href="../productos.php"; </script>
 ';
} else {
    echo '
     <script> location.href="../productos.php"; </script>
 ';
}