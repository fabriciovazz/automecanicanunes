<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="descripcion" content="Taller Automecanica Nunes">
        <title>Automecánica Nunes</title>
        <link rel="shortcut icon" href="img\logo sin fondo.png" type="image/x-icon">
        <link rel="stylesheet" href="styles.css">
    </head>
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
                <h2>Reparación al instante</h2>
            </section>
            <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                    style="height: 100%; width: 100%;">
                    <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                        style="stroke: none; fill: #fff;"></path>
                </svg></div>
        </header>
        <main>
            <section class="portafolio">
                <div class="contenedor">
                    <h2 class="titulo">Servicios</h2>
                    <div class="galeria-port">
                        <?php
                        include_once 'con_db.php';

                        $sql_leer = 'SELECT * FROM servicios';
                        $gsent = $pdo->prepare($sql_leer);

                        $gsent->execute();

                        $resultado = $gsent->feTchAll();
                        ?>
                    <div class="services">
                        <?php foreach($resultado as $dato): ?>
                            <div class="alert" role="alert">
                                <h1><?php echo $dato['nombre_servicio']?></h1>
                                
                                <p><?php echo $dato['descripcion']?></p>
                                
                                <h3><?php echo $dato['precio']?></h3>

                            </div>   
                            <?php endforeach ?>
                    </div>                 
                </div>
            </main>
                <footer>
                    <div class="googlemaps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3606.2658728647757!2d-57.577470885063576!3d-25.328857883835084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945da9b87a138eff%3A0x67ed6e805fef5a74!2sAutoMec%C3%A1nica%20Nunes!5e0!3m2!1ses!2spy!4v1662521215231!5m2!1ses!2spy" width="1000" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="contenedor-footer">
                        <div class="content-foo">
                            <h4>Telefono</h4>
                            <p>(0971) 292 537</p>
                        </div>
                        <div class="content-foo">
                            <h4>Email</h4>
                            <p>AutomecanicaNunes@gmail.com</p>
                        </div>
                        <div class="content-foo">
                            <h4>Dirrección</h4>
                            <p>Tte. José Félix esq. Meryrian Pérez</p>
                        </div>
                </section>
                </div>
                <h2 class="titulo-final">&copy; Automecanica Nunes | Fabricio Vazquez</h2>
                </footer>
    </body>
    
</html>