<?php
session_start();


$name = $_POST['name'];           
$lastname = $_POST['lastname']; 
$email = $_POST['email'];
$consulta = $_POST['consulta'];


$bd_data = mysqli_connect("localhost", "root", "", "phpavanzado") or exit ("No se puede conectar con la base de datos");
mysqli_query($bd_data, "INSERT INTO consultas VALUES ('$name', '$lastname', '$email', '$consulta')");


header("Location: unidad5.php?ok#black");


$captcha = $_POST['captcha'];         

if($captcha == $_SESSION['captcha']) {
include("captcha.php");
} else {
  header("Location: unidad5.php?error_codigo");
}
?>








<!--Es importante usar la sintaxis correcta en el contexto apropiado para evitar errores
y asegurarse de que su código funcione según lo previsto. En general, debe usarlo ->cuando
trabaje con objetos y sus propiedades o métodos, y = cuando asigne valores a las variables.
-->


<!-- // 1 session_start();

header("Content-type: image/jpeg");
$img = imagecreate(120, 40);
$color_fondo = imagecolorallocate($img, 179, 0, 123);
$color_texto = imagecolorallocate($img, 79, 0, 23);
imagestring($img, 5, 20, 10, $_SESSION['captcha'], $color_texto);
      // variable-font-x (como padding)-y-str(traemos la session)-color-*

imagejpeg($img);
-->

<!-- // 2 session_start();

//if ($_POST['captcha'] != $_SESSION['captcha']) {
//  header('Location: unidad5.php?error=captcha');
//  exit();
//}

//$nombre = $_POST['nombre'];
//$apellido = $_POST['apellido'];
//$email = $_POST['email'];
//$consulta = $_POST['consulta'];

//$servername = "localhost";
//$username = "username";
//$password = "password";
//$dbname = "myDB";

//$conn = new mysqli($servername, $username, $password, $dbname);

//if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
//}

//$sql = "INSERT INTO consultas (nombre, apellido, email, consulta) VALUES ('$nombre', '$apellido', '$email', '$consulta')";

//if ($conn->query($sql) === TRUE) {
//  echo "Consulta cargada correctamente";
//} else {
//  echo "Error: " . $sql . "<br>" . $conn->error;
//}

//$conn->close();

-->


<!-- 3 session_start();
header("Content-type: image/jpeg");
$img = imagecreate(120,40);
                   //width-height
$color_fondo = imagecolorallocate($img, 105, 0, 33);                 
                                  //variable-colore RGB
$color_texto = imagecolorallocate($img, 10, 110, 133);
imagestring($img, 5, 20, 10, $_SESSION['captcha'], $color_texto);
         //image-font-x-y-string-color 
imagejpeg($img);
-->


<!-- 4 session_start();

// Connect to MySQL database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Authenticate captcha
if ($_POST['code'] != $_SESSION['captcha']) {
  die("Invalid captcha");
}

// Insert data into table
$stmt = $conn->prepare("INSERT INTO queries (name, lastname, email, query) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['query']);
if ($stmt->execute()) {
  echo "Data inserted successfully";
} else {
  echo "Error inserting data: " . $stmt->error;
}
$stmt->close();
$conn->close();
-->

<!--
//$conn = new mysqli($servername, $username, $password, $dbname);
//$conn = new mysqli('localhost', 'username', 'password', 'database');
//if ($_POST['codigo'] != $_SESSION['captcha']) {  ////
//  die("Captcha inválido");
//}            //'code'

// Insertar datos en la tabla
//$stmt = $datos_bd->prepare("INSERT INTO consulta (name, lastname, email, consulta) VALUES (?, ?, ?, ?)");////
//$stmt->bind_param("ssss", $_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['consulta']);
//if ($stmt->execute()) {
//  echo "Datos insertados con éxito";
//} else {
//  echo "Error al insertar datos: " . $stmt->error;
//}
//$stmt->close();
//$datos_bd->close();
//header("Location: unidad5.php?ok#consultas");




// 7 $servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "phpavanzado";
//$datos_bd = mysqli_connect("localhost", "root", "", "phpavanzado") or exit ("No se puede conectar con la base de datos");
//if ($datos_bd->connect_error) {
//  die("La conexión falló: " . $datos_bd->connect_error);
//}
// Autenticar captcha
//$codigo = $_POST['codigo'];


//$name = $_POST['name'];
//$lastname = $_POST['lastname'];
//$email = $_POST['email'];
//$consulta = $_POST['consulta'];
//$codigo = $_POST['codigo']; 
//$datos_bd = mysqli_connect("localhost", "root", "", "phpavanzado") or exit ("No se puede conectar con la base de datos");
//mysqli_query($datos_bd, "INSERT INTO consultas VALUES ($name, $lastname, $email, $consulta)");
  

//if ($codigo == $_SESSION['captcha']) {
//  echo "Codigo correcto";
//} else {
//  echo "Codigo incorrecto";
//}
//header("Location: unidad5.php?ok#black");


//header("Content-type: image/jpeg");
//$img = imagecreate(120,40);
                   //width-height
//$color_fondo = imagecolorallocate($img, 240, 97, 86);                 
                                  //variable-colores RGB
//$color_texto = imagecolorallocate($img, 0, 0, 33);
//imagestring($img, 5, 20, 10, $_SESSION['captcha'], $color_texto);
         //image-font 1 a 5 -x-y-string-color 
//imagejpeg($img);
//session_start();     
//cargar datos--*

         // Cargar los datos del usuario en la tabla "consultas"
//$name = $_POST['name'];           
//$lastname = $_POST['lastname']; 
//$email = $_POST['email'];
//$consulta = $_POST['consulta'];
//$bd_data = mysqli_connect("localhost", "root", "", "phpavanzado") or exit ("No se puede conectar con la base de datos");
//mysqli_query($bd_data, "INSERT INTO consultas VALUES ('$name', '$lastname', '$email', '$consulta')");
//Redirigir a unidad5 con mensaje de exito--*
//header("Location: unidad5.php?ok#black");
//} else {
  // Redirigir a unidad5 con un mensaje de error
//header("Location: unidad5.php?error#black");    
//}


-->