<?php

session_start();
include '../sql/conexionsql.php';
    include '../sql/consulSQL.php';

sleep(5);
$codeCateg = $_POST['categ-code'];
$cons = ejecutarSQL::consultar("select * from categoria where CodigoCat='$codeCateg'");
$totalcateg = mysql_num_rows($cons);

if ($totalcateg > 0) {
    if (consultasSQL::DeleteSQL('categoria', "CodigoCat='" . $codeCateg . "'")) {
        echo ' <br><p class="lead text-center">Categoría eliminada éxitosamente</p><script> location.href="../delcategori.php"; </script>';
    } else {
        echo ' <br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p><script> location.href="../delcategori.php"; </script>';
    }
} else {
    echo ' <br><p class="lead text-center">El código de la categoria no existe</p><script> location.href="../delcategori.php"; </script>';
}
