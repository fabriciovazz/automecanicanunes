<?php

$conex = mysqli_connect("localhost","root","","automecanicanunes");
$link = 'mysql:host=localhost;dbname=automecanicanunes';
$usuario= 'root';
$pass = '';


try{
    $pdo = new PDO ($link, $usuario, $pass);
}catch (PDOException $e){
    print "Error" . $e->getMessage(). "<br>";
}
?>