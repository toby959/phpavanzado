<?php
include('ver_clases.php');
$password = password_hash($_POST['password'], PASSWORD_DEFAULT, array('cost' =>4)); 
                                                                //level encriptación  

$email = $_POST['email'];                                                                 

include('conexion.php');

mysqli_query($datos_bd, "INSERT INTO registro (email, password) VALUES ('$email', '$password')");
       //ver_clases.php

header("Location: unidad8.php?reg_ok");
?> 