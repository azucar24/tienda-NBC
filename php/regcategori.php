<?php

session_start();
include '../sql/conexionsql.php';
    include '../sql/consulSQL.php';

sleep(5);
$codeCateg = $_POST['categ-code'];
$nameCateg = $_POST['categ-name'];
$descripCateg = $_POST['categ-descrip'];

if (!$codeCateg == "" && !$nameCateg == "" && !$descripCateg == "") {
    $verificar = ejecutarSQL::consultar("select * from categoria where CodigoCat='" . $codeCateg . "'");
    $verificaltotal = mysql_num_rows($verificar);
    if ($verificaltotal <= 0) {
        if (consultasSQL::InsertSQL("categoria", "CodigoCat, Nombre, Descripcion", "'$codeCateg','$nameCateg','$descripCateg'")) {
            echo '<br><p class="lead text-center">Categoría añadida éxitosamente</p>
            <script> location.href="../categorias.php"; </script>';
        } else {
            echo '<br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p><script> location.href="../categorias.php"; </script>';
        }
    } else {
        echo '<br><p class="lead text-center">El código que ha ingresado ya existe.<br>Por favor ingrese otro código</p>';
    }
} else {
    echo '<br><p class="lead text-center">Error los campos no deben de estar vacíos</p><script> location.href="../categorias.php"; </script>';
}

