<!DOCTYPE html>

<html>
    <head>
        <title>Registrar ususario</title>
        <meta charset="uft-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php
        $inc = include("index.php");
        ?>
        <div>
        <h2><?php echo $nombre; ?></h2>
        </div>
        <div>
            <p>
                <b>nombre: </b><?php echo $nombre; ?><br>
            </p>
        </div>

    </body>
</html>