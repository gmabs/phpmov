<?php

    $mysql = new mysqli("localhost", "root", "", "prueba");
    if($mysql->connect_error){
        echo "error: ";
        die("Error de conexion");
    }
    else {
        echo "conexion exitosa";
    }

?>
