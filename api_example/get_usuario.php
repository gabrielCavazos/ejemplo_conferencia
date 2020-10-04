<?php

    include_once("../db_data.php");

    $mysqli = new mysqli($HOST, $USER, $PASS, $DB_NAME);

    if ($mysqli->connect_errno) {

        echo "Lo sentimos, este sitio web está experimentando problemas.";

        echo "Errno: " . $mysqli->connect_errno . "\n";
        echo "Error: " . $mysqli->connect_error . "\n";
        
        exit;
    }


    $id = $_GET["id"];
    $query = "SELECT sucId, nombre, usuario, if(permisoReportes = 1,'Con permiso', 'Sin permiso') as permisoReportes, if (status = 1,'Activo', 'Inactivo') as status, fechaCreacion  FROM pos.usuarioAdmin WHERE id = $id;";
    $usuario = $mysqli->query($query);
    $usuario = $usuario->fetch_assoc();




    print_r (json_encode($usuario)) ;


?>