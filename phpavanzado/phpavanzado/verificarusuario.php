<?php

include('conexion.php');
include('ver_clases.php');
session_start();

$password = $_POST['password']; 
$email = $_POST['email'];

$consulta = mysqli_query($datos_bd, "SELECT password FROM registro WHERE email = '$email'");

$codificado = mysqli_fetch_assoc($consulta);

$verificar = password_verify($password, $codificado['password']);
                     // clave - dato encriptado

if ($verificar) {
    $_SESSION['password'] = $verificar[0]["password"];
    $_SESSION['email'] = $email;
    header("Location: unidad8.php?ok_pass");
} else {
    session_destroy();
    header("Location: unidad8.php?pass_error"); 
}
?>