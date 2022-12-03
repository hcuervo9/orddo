<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "Andres 2003";
    $db = "orddodev";
    $port = 3307;

    $conexion = mysqli_connect($servidor, $usuario, $password, $db, $port);
    if ($conexion->connect_error){
        die("No hay conexion: ".$conexion->connect_error);
        echo "no hay conexion";
    }
    /*<input type="submit" value="Registrarse" name="btnRegistrar">*/
?>