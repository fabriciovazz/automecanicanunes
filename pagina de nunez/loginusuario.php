<!DOCTYPE html>
<?php
include("user.php");
?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="descripcion" content="Taller Automecanica Nunes">
        <title>Automecánica Nunes</title>
        <link rel="shortcut icon" href="img\logo sin fondo.png" type="image/x-icon">
        <link rel="stylesheet" href="stylesregister.css">
    </head>
    <body>
        <form class="formulario">
            <h1>Iniciar Sesión</h1>
            <div class="contenedor">
                <div class="input-contenedor">
                    <input type="text" name=email placeholder="Correo Electronico">
                </div>
                <div class="input-contenedor">
                    <input type="password" name=contraseña placeholder="Contraseña">
                </div>
                <input type="submit" value="Iniciar" class="button">
                <p><a class="link" href="registrodeususario.html">Registrate</a></p>
            </div>
        </form>
    </body>