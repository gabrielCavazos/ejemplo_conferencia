<?php

    include_once("../db_data.php");

    $mysqli = new mysqli($HOST, $USER, $PASS, $DB_NAME);

    if ($mysqli->connect_errno) {

        echo "Lo sentimos, este sitio web está experimentando problemas.";

        echo "Errno: " . $mysqli->connect_errno . "\n";
        echo "Error: " . $mysqli->connect_error . "\n";
        
        exit;
    }

    $usuarios = $mysqli->query('SELECT * FROM pos.usuarioAdmin;');

    $array_usuarios = [];

    while($row = $usuarios->fetch_assoc())
    {
    $array_usuarios[] = $row;
    }


    print_r (json_encode($array_usuarios)) ;


?>