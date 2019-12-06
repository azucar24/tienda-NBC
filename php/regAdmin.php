<?php

session_start();
include '../sql/conexionsql.php';
    include '../sql/consulSQL.php';

sleep(5);
$nameAdmin = $_POST['admin-name'];
$passAdmin = md5($_POST['admin-pass']);

if (!$nameAdmin == "" && !$passAdmin == "") {
    $verificar = ejecutarSQL::consultar("select * from administrador where Nombre='" . $nameAdmin . "'");
    $verificaltotal = mysql_num_rows($verificar);
    if ($verificaltotal <= 0) {
        if (consultasSQL::InsertSQL("administrador", "Nombre, Clave", "'$nameAdmin','$passAdmin'")) {
            echo ' <br><p class="lead text-center">Administrador añadido éxitosamente</p><script> location.href="../addusuarios.php"; </script>';
        } else {
            echo '<br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p><script> location.href="../addusuarios.php"; </script>';
        }
    } else {
        echo ' <br><p class="lead text-center">El nombre que ha ingresado ya existe.<br>Por favor ingrese otro nombre</p><script> location.href="../addusuarios.php"; </script>';
    }
} else {
    echo ' <br><p class="lead text-center">Error los campos no deben de estar vacíos</p><script> location.href="../addusuarios.php"; </script>';
}