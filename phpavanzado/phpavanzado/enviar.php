<?php

// Tercera Opción //


require_once 'librerias/class.phpmailer.php';
require_once 'librerias/class.smtp.php'; 		

$mail = new PHPMailer();

	
	
		$mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;   
		$mail->Username= "christiangarayw8@gmail.com";
		$mail->Password = "************"; 
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587; 
		
		$mail->setFrom($_POST['email'], 'Nombre Remitente');//establecer direccion remitente  
        $mail->AddAddress($_POST['email']); // correo destinatario
		$mail->Subject = "Asunto del correo Electrónico";
		$mail->Body = "<p>".$_POST['nombre'].$_POST['apellido'].$_POST['email']." ha enviado un mail por el siguiente motivo: ".$_POST['asunto']."</p><p>Con los siguientes comentarios: ".$_POST['mensaje']."</p><p>Su telefono es: ".$_POST['telefono']."</p>";
	    
        
                                                                                                                                                 
	
 		if ($mail->send()){	 
			echo ("<h2>Gracias por contactarnos.  </h2>");
 		}
 		else{
 			echo ("<h2>Error al enviar el mensaje. Por favor intentelo nuevamente.</h2>"). $mail->ErrorInfo;
 		}
		

?>     


<!--
	
/*		
//HOTMAIL	
$mail->SMTPSecure = "tls"; // sets the prefix to the servier
$mail->Host = "smtp.live.com"; // sets HOTMAIL as the SMTP server
$mail->Port = 25; // alternate is "26" - set the SMTP port for the HOTMAIL server
$mail->Username = "usuario@hotmail.com"; // HOTMAIL username
$mail->Password = "password"; // HOTMAIL password		
*/
/*		
//GMAIL	
$mail->SMTPSecure = "tls"; 
$mail->Host = "smtp.gmail.com"; 
$mail->Port = 587; // si seteamos SMTPSecure = "ssl"; tenemos que setear Port = 465;
$mail->Username = "usuario@gmail.com"; // GMAIL username
$mail->Password = "password"; // GMAIL password		
*/



    -->








<!--


/*     Primera Opción  

use PHPMailer\PHPMailer\PHPMailer;

require("librerias/class.phpmailer.php");

require("librerias/class.smtp.php");


$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];
$destinatario = "christiangaraw8@gmail.com";

// datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "smtp.gmail.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "christiangaraw8@gmail.com";//"contactovirtual.com.ar"; // Mi cuenta de correo
$smtpClave = "Sofia442"; //Mi contraseña

$mail = new PHPMailer(); 
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->isHTML(true);
$mail->CharSet = "utf-8";

// Valores a Modificar
$mail->Host = "smtp.gmail.com";                    //$smtpHost;
$mail->Username = "christiangarayw8@gmail.com";                                  //$smtpUsuario;
$mail->Password = "Sofia442";


$mail->From = ("christiangarayw8@gmail.com");                //$email; // Email desde donde envío el correo
$mail->FromName = $nombre; 
$mail->AddAddress("christiangarayw8@gmail.com"); //Esta es la dirección donde enviamos los datos del formulario  


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



*/ 



//   segunda opción   //

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

//require 'vendor/autoload.php';

//$mail = new PHPMailer(true);

//try {
    // Configuración del servidor SMTP
//    $mail->isSMTP();
//    $mail->Host = 'smtp.example.com';
//    $mail->SMTPAuth = true;
//    $mail->Username = 'user@example.com';
//    $mail->Password = 'password';
//    $mail->SMTPSecure = 'tls';
//    $mail->Port = 587;

    // Configuración del correo electrónico
//    $mail->setFrom('from@example.com', 'From Name');
//    $mail->addAddress('to@example.com', 'To Name');
//    $mail->Subject = 'Subject';
//    $mail->Body = 'Body';

//    $mail->send();
//    echo 'El correo electrónico ha sido enviado.';
//} catch (Exception $e) {
//    echo 'El correo electrónico no pudo ser enviado. Error: ', $mail->ErrorInfo;
//}

//


-->