<?php

include("con_db.php");

if (isset($_POST['reserva'])) {
    $name = trim($_POST['nombre']);
    if (strlen($_POST ['nombre']) >= 1 && strlen($_POST ['email']) >= 1 && strlen($_POST ['servicio']) >= 1 && strlen($_POST ['telefono']) >=1 && strlen($_POST ['fecha']) >=1) {
        $email = trim($_POST['email']);
        $id_servicio = trim($_POST['servicio']);
        $fecha = trim($_POST['fecha']);
        $telefono = trim($_POST['telefono']);
        $consulta = "INSERT INTO reservas(email, id_servicio, fecha, telefono) VALUES ('$email','$id_servicio','$fecha','$telefono')";
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


    