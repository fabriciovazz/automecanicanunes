<?php
    $servidor = "localhost";
    $nombreusario = "root";
    $password = "";
    $bd = "automecanicanunes";

    $conexion=mysqli_connect("localhost", "root", "", "automecanicanunes");

    if($conexion->connect_error){
        die("Conexión fallida: ".$conexion->connect_error);  
    }

    $sql = "CREATE DATABASE todolistDB";
   
?>
   