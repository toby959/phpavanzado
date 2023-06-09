<?php
session_start();


$name = $_POST['name'];           
$lastname = $_POST['lastname']; 
$email = $_POST['email'];
$consulta = $_POST['consulta'];


$bd_data = mysqli_connect("localhost", "root", "", "phpavanzado") or exit ("No se puede conectar con la base de datos");
mysqli_query($bd_data, "INSERT INTO consultas VALUES ('$id', '$name', '$lastname', '$email', '$consulta')");





$captcha = $_POST['codigo'];         

if($captcha == $_SESSION['captcha']) {
  header("Location: unidad5.php?ok#black");          
} else {
  header("Location: unidad5.php?error_codigo");
}
?>



