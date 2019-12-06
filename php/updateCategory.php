<?php

include '../sql/conexionsql.php';
    include '../sql/consulSQL.php';

sleep(5);

$codeOldCatUp = $_POST['categ-code-old'];
$codeCatUp = $_POST['categ-code'];
$nameCatUp = $_POST['categ-name'];
$descCatUp = $_POST['categ-descrip'];

if (consultasSQL::UpdateSQL("categoria", "CodigoCat='$codeCatUp',Nombre='$nameCatUp',Descripcion='$descCatUp'", "CodigoCat='$codeOldCatUp'")) {
    echo '
    <script> location.href="../categorias.php"; </script>
 ';
} else {
    echo '
    <script> location.href="../categorias.php"; </script>
 ';
}

