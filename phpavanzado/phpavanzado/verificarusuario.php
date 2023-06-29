<?php

include('conexion.php');
include('ver_clases.php');
$password = $_POST['password']; 
$email = $_POST['email'];

$consulta = mysqli_query($datos_bd, "SELECT password FROM registro WHERE email = '$email'");

$codificado = mysqli_fetch_assoc($consulta);

$verificar = password_verify($password, $codificado['password']);
                     // clave - dato encriptado

if ($verificar) {
    header("Location: unidad8.php?pass_ok");
} else {
    header("Location: unidad8.php?pass_error"); 
}
?>