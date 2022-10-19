<?php

include_once 'index.php';

$sql_leer = 'select *from servicios';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

var_dump($resultado);

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div class="contain mt-5">
    <div class="row">
    <div class="col-md-6">
        <?php foreach($resultado as $dato): ?>
        <div class="alert alert-dark" role="alert">
        <?php echo $dato['nombre_servicio'];?>
        -
        <?php echo $dato['descricion'];?>
        </div>

<?php endforeach?>
</div>
</div>
</div>
  </body>
</html>