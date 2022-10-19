<?php

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST ['nombre']) >= 1 && strlen($_POST ['descripcion']) >= 1 && strlen($_POST ['precio']) >= 1) {
        $name = trim($_POST['nombre']);
        $decripcion = trim($_POST['descripcion']);
        $precio = trim($_POST['precio']);
        $consulta = "INSERT INTO servicios(nombre_servicio, descripcion, precio) VALUES ('$name','$decripcion','$precio')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado){
            ?>
            <h3 class="ok">¡Te has inscripto correctamente!</h3>
            
            <?php
        } else {
            ?>
            <h3 class="bad">¡Ha ocurrido un error!</h3>
            <?php
        }
    }  else{
            ?>
            <h3 class="bad">¡Por favor complete los campos!</h3>
            <?php
    }
}
?>