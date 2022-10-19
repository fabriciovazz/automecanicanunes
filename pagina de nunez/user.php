<?php
include_once('con_db.php');

$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$email;
$conexion=mysqli_connect("localhost", "root", "", "");

$consulta="SELECT*FROM usuarios where email='$email' AND password='contrseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['email']=="fabriciovaquez97@gmail.com"){
    header("location:index.php");
}
