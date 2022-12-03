<?php

    $host ="127.0.0.1:3307";
    $Usuario = "root";
    $password = "";
    $base_datos = "usa";

    /*
    $host ="localhost";
    $Usuario = "institut_usa";
    $password = "Usa2022-1";
    $base_datos = "institut_usa";
    */

    $con = new mysqli($host, $Usuario, $password, $base_datos);
    if ($con->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
    }
?>