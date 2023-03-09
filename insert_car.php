<?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        require_once 'conection.php';
        $nombre= $_POST["nombre"];
        $id_fac=$_POST["id_facultad"];
        $my_query = "insert into carrera(nombre, id_facultad) values ('".$nombre."', '".$id_fac."')";
        $result = $mysql->query($my_query);
        if ($result == true) {
            echo "\nRealizado con exito";
        }else{
            echo "error";
        }
    }
?>