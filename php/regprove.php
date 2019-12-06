<?php

session_start();
include '../sql/conexionsql.php';
    include '../sql/consulSQL.php'; 

sleep(5);
$nitProve = $_POST['prove-nit'];
$nameProve = $_POST['prove-name'];
$dirProve = $_POST['prove-dir'];
$telProve = $_POST['prove-tel'];
$webProve = $_POST['prove-web'];

if (!$nitProve == "" && !$nameProve == "" && !$dirProve == "" && !$telProve == "" && !$webProve == "") {
    $verificar = ejecutarSQL::consultar("select * from proveedor where NITProveedor='" . $nitProve . "'");
    $verificaltotal = mysql_num_rows($verificar);
    if ($verificaltotal <= 0) {
        if (consultasSQL::InsertSQL("proveedor", "NITProveedor, NombreProveedor, Direccion, Telefono, PaginaWeb", "'$nitProve','$nameProve','$dirProve','$telProve','$webProve'")) {
            echo '<br><p class="lead text-center">Proveedor añadido éxitosamente</p>
   <script> location.href="../regprove.php"; </script>

            ';
        } else {
            echo '<br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>
               <script> location.href="../regprove.php"; </script>
';
        }
    } else {
        echo '<br><p class="lead text-center">El número de NIT que ha ingresado ya existe.<br>Por favor ingrese otro número de NIT</p>
           <script> location.href="../regprove.php"; </script>
';
    }
} else {
    echo '<br><p class="lead text-center">Error los campos no deben de estar vacíos</p>
       <script> location.href="../regprove.php"; </script>
';
}
