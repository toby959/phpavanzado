<?php

include("ver_clases.php");

// Clase para verificar los datos del formulario de ingreso
class VerificarUsuario {
  private $email;
  private $password;

  public function __construct($email, $password) {
    $this->email = $email;
    $this->password = $password;
  }

  public function verificar() {
                  // Conectar a la base de datos
    $datos_bd = new mysqli("localhost", "root", "", "phpavanzado");

   
    // Obtener la contraseña encriptada de la tabla "registro" para el email dado
    $stmt = $datos_bd->prepare("SELECT password FROM registro WHERE email = ?");
    $stmt->bind_param("s", $this->email);
    $stmt->execute();
    $stmt->bind_result($contrasenaEncriptada);
    $stmt->fetch();

  ///  // Verificar la contraseña
    if (password_verify($this->password, $contrasenaEncriptada)) {
      // La contraseña es correcta
      header('Location: unidad8.php?pass_ok');  
      //echo "Ingreso exitoso";
    } else {
      // La contraseña es incorrecta
      header('Location: unidad8.php?pass_error');//echo "Email o contraseña incorrectos";
    }   

    // Cerrar la conexión
    $stmt->close();
    $datos_bd->close();
  }
}

// Obtener los datos del formulario de ingreso
$email = $_POST["email"];
$password = $_POST["password"];

// Crear un objeto de la clase VerificarUsuario y verificar los datos en la tabla "registro"
$verificarUsuario = new VerificarUsuario($email, $password);
$verificarUsuario->verificar();


?>  


<!--

------------------------------------------------------
include("ver_clases.php");

//$usuario = $_POST['usuario'];
$mail = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT, array('cost'=>4));
$verificar = $mail->VerificarEmail($mail);

  if(!empty($verificar)){
     header("Location: unidad8.php?error");
 } else {
     $mail->InsertarUsuario($mail, $password);
     header("Location: unidad.8.php?ok_pass");
}
-------------------------------------------------------

-->