<?php

include_once("db_data.php");

$mysqli = new mysqli($HOST, $USER, $PASS, $DB_NAME);

if ($mysqli->connect_errno) {

    echo "Lo sentimos, este sitio web está experimentando problemas.";

    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</head>
<body>

    <h2>Usuarios</h2>
    <?php
    $id = $_GET["id"];
    $query = "SELECT sucId, nombre, usuario, if(permisoReportes = 1,'Con permiso', 'Sin permiso') as permisoReportes, if (status = 1,'Activo', 'Inactivo') as status, fechaCreacion  FROM pos.usuarioAdmin WHERE id = $id;";
    $usuario = $mysqli->query($query);
    $usuario = $usuario->fetch_object();
    ?>
        <div class="col-3">
            <div class="row">
                <div class="col-6 text-right font-weight-bold">Nombre:</div>
                <div class="col-6"><?php echo $usuario->nombre; ?></div>
            </div>
            <div class="row">
                <div class="col-6 text-right font-weight-bold">Usuario:</div>
                <div class="col-6"><?php echo $usuario->usuario; ?></div>
            </div>
            <div class="row">
                <div class="col-6 text-right font-weight-bold">Id sucursal:</div>
                <div class="col-6"><?php echo $usuario->sucId; ?></div>
            </div>
            <div class="row">
                <div class="col-6 text-right font-weight-bold">Permiso ver reportes:</div>
                <div class="col-6"><?php echo $usuario->permisoReportes; ?></div>
            </div>
            <div class="row">
                <div class="col-6 text-right font-weight-bold">Estatus:</div>
                <div class="col-6"><?php echo $usuario->status; ?></div>
            </div>
            <div class="row">
                <div class="col-6 text-right font-weight-bold">Fecha Creacion:</div>
                <div class="col-6"><?php echo $usuario->fechaCreacion; ?></div>
            </div>
        </div>
</body>
</html>