<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="descripcion" content="Taller Automecanica Nunes">
        <title>Automecánica Nunes</title>
        <link rel="shortcut icon" href="img\logo sin fondo.png" type="image/x-icon">
        <link rel="stylesheet" href="stylesreservas.css">
    </head>
    <?php include("reservaciones.php") ?>
    <body>
        <header>
            <nav>
                <a href="index.html">Inicio</a>
                <a href="nosotros.html">Nosotros</a>
                <a href="servicios.php">Servicios</a>
                <a href="contactos.html">Contacto</a>
                <a href="registrodeususario.php">Usuario</a>

            </nav>
            <section class="textos-header">
                <h1>Automecanica Nunes</h1>
        </header>
        
        <section class="form-contacto">
            <h4>Contactanos</h4>
            <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre y apellido">
            <input class="controls" type="email" name="email" id="email" placeholder="Ingrese su apellido">
            <input class="controls" type="text" name="mensaje" id="mensaje" placeholder="">
            <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre y apellido">
            <input class="botons" type="submit" value="Enviar">

        </section>
    </body>