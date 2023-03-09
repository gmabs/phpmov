<?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        require_once 'conection.php';
        $nombre= $_POST["nombre"];
        $descripcion=$_POST["descripcion"];
        $my_query = "insert into facultad(nombre, descripcion) values ('".$nombre."', '".$descripcion."')";
        $result = $mysql->query($my_query);
        if ($result == true) {
            echo "Realizado con exito";
        }else{
            echo "error";
        }
    }
?>