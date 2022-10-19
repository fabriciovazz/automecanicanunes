<?php

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST ['nombre']) >= 1 && strlen($_POST ['email']) >= 1 && strlen($_POST ['password']) >= 1) {
        $name = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $consulta = "INSERT INTO usuarios(email, nombre, password) VALUES ('$email','$name','$password')";
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