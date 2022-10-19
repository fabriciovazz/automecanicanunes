<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="descripcion" content="Taller Automecanica Nunes">
        <title>Automecánica Nunes</title>
        <link rel="shortcut icon" href="img\logo sin fondo.png" type="image/x-icon">
        <link rel="stylesheet" href="stylesregister.css">
        <link rel="https://www.hostingparaguay.com.py/afiliados.php?cliente=3872">
    </head>
    <header>
        <nav>
            <a href="index.html">Inicio</a>
            <a href="nosotros.html">Nosotros</a>
            <a href="servicios.php">Servicios</a>
            <a href="contactos.html">Contacto</a>
            <a href="registrodeususario.php">Usuario</a>

        </nav>
    </header>
    <body>
    <form method="post">
        <form class="formulario">
            <h1>Registrate</h1>
            <div class="contenedor">
                <div class="input-contenedor">
                    <input type="text" name="nombre" placeholder="Nombre Completo">
                </div>
                <div class="input-contenedor">
                    <input type="text" name="email" placeholder="Correo Electronico">
                </div>
                <div class="input-contenedor">
                    <input type="password" name="password" placeholder="Contraseña">
                </div>
                <input type="submit" name="register" value="Registrate" class="button">
                <p>¿Ya tienes una cuenta?<a class="link" href="loginusuario.html">Iniciar Sesión</a></p>
            </div>
        </form>
        <?php
        include("registrar.php");
        ?>
    </form> 
    </body>

