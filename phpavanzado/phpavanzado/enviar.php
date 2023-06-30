<?php

use PHPMailer\PHPMailer\PHPMailer;

require("librerias/PHPMailer.php");
require("librerias/SMTP.php");

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];
$destinatario = "christiangaraw8@gmail.com";

// datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "christiangaraw8@gmail.com";//"contactovirtual.com.ar"; // Mi cuenta de correo
$smtpClave = ""; //Mi contraseña

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->isHTML(true);
$mail->CharSet = "utf-8";

// Valores a Modificar
$mail->Host = $smtpHost;
$mail->Username = $smtpUsuario;
$mail->Password = $smtpClave;


$mail->From = $email; // Email desde donde envío el correo
$mail->FromName = $nombre; 
$mail->AddAddress($destinatario); //Esta es la dirección donde enviamos los datos del formulario  


// Titulo del email
$mensajeHtml = nl2br($mensaje);
$mail->Body = "
<html>

<body>

<h1>Recibiste un nuevo mensaje desde el formulario de contacto</h1>

<p>Información enviada por el Usuario de la Web:<p>

<p>Nombre: {$nombre}</p>

<p>Email: {$email}</p>

<p>Teléfono: {$telefono}</p>

<p>Asunto: {$asunto}</p>

<p>Mensaje: {$mensaje}</p>

</body>

</html>

";
header("Location: unidad8.php?ok");

?>