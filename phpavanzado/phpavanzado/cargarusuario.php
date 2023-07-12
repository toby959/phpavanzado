<?php
include("ver_clases.php");

class CargarUsuario {
    private $email;
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function cargar() {
        $datos_bd = new mysqli("localhost", "root", "", "phpavanzado");

        if ($datos_bd->connect_error) {
            die("La conexión fallo: " . $datos_bd->connect_error);
        }

        $stmt = $datos_bd->prepare("SELECT email FROM registro WHERE email = ?");
        $stmt->bind_param("s", $this->email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            header('Location: unidad8.php?usuario_nuevo');
        } else {                         //mensaje= 
            $stmt->close();

            $stmt = $datos_bd->prepare("INSERT INTO registro (email, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $this->email, $this->password);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                header('Location: unidad8.php?reg_ok');
            } else {                         //mensaje=
                header('Location: unidad8.php?error');
            }                                //mensaje=
        }

        $stmt->close();
        $datos_bd->close();
    }
}

$email = $_POST["email"];
$password = $_POST["password"];

$cargarUsuario = new CargarUsuario($email, $password);
$cargarUsuario->cargar();

  ?>


<!-- 
El código anterior es un ejemplo de un script PHP que carga un usuario en una base de datos. A continuación, se explica el funcionamiento y los nombres de las variables y funciones paso a paso: 
 
1. Variables: 
- $email: Almacena el valor del campo "email" enviado a través de un formulario HTML. 
- $password: Almacena el valor del campo "password" enviado a través de un formulario HTML. 
 
2. Funciones: 
- include("ver_clases.php"): Esta función incluye el archivo "ver_clases.php" en el script actual. Esto permite utilizar las clases definidas en ese archivo. 
- class CargarUsuario: Esta es una clase que define la funcionalidad para cargar un usuario en la base de datos. Tiene dos variables privadas: $email y $password. 
- public function __construct($email, $password): Este es el constructor de la clase CargarUsuario. Recibe el email y la contraseña como argumentos y los asigna a las variables correspondientes. 
- public function cargar(): Esta es una función pública de la clase CargarUsuario. Realiza la carga del usuario en la base de datos. 
- $datos_bd = new mysqli("localhost", "root", "", "phpavanzado"): Esta línea crea una nueva instancia de la clase mysqli para establecer una conexión con la base de datos "phpavanzado" en el servidor local. 
- $stmt = $datos_bd->prepare("SELECT email FROM registro WHERE email = ?"): Esta línea prepara una consulta SQL para seleccionar el email de la tabla "registro" donde el email sea igual al valor proporcionado. 
- $stmt->bind_param("s", $this->email): Esta línea vincula el valor del email proporcionado al parámetro de la consulta SQL. 
- $stmt->execute(): Esta línea ejecuta la consulta SQL preparada. 
- $stmt->store_result(): Esta línea almacena el resultado de la consulta en el objeto $stmt. 
- if ($stmt->num_rows > 0): Esta línea verifica si la consulta devolvió algún resultado. Si es así, significa que el email ya existe en la base de datos y se redirige al usuario a una página con un mensaje de "usuario nuevo". 
- else: Si la consulta no devuelve ningún resultado, significa que el email no existe en la base de datos y se procede a insertar el nuevo usuario. 
- $stmt->close(): Esta línea cierra el objeto $stmt. 
- $stmt = $datos_bd->prepare("INSERT INTO registro (email, password) VALUES (?, ?)"): Esta línea prepara una consulta SQL para insertar el email y la contraseña en la tabla "registro". 
- $stmt->bind_param("ss", $this->email, $this->password): Esta línea vincula los valores del email y la contraseña proporcionados a los parámetros de la consulta SQL. 
- $stmt->execute(): Esta línea ejecuta la consulta SQL preparada. 
- if ($stmt->affected_rows > 0): Esta línea verifica si la consulta tuvo un impacto en alguna fila de la base de datos. Si es así, significa que el usuario se insertó correctamente y se redirige al usuario a una página con un mensaje de "registro exitoso". 
- else: Si la consulta no tuvo ningún impacto en las filas de la base de datos, significa que hubo un error y se redirige al usuario a una página con un mensaje de "error". 
- $stmt->close(): Esta línea cierra el objeto $stmt. 
- $datos_bd->close(): Esta línea cierra la conexión con la base de datos. 
 
3. Ejecución del script: 
- $cargarUsuario = new CargarUsuario($email, $password): Esta línea crea una nueva instancia de la clase CargarUsuario, pasando el email y la contraseña proporcionados como argumentos. 
- $cargarUsuario->cargar(): Esta línea llama al método "cargar" de la instancia $cargarUsuario, que realiza la carga del usuario en la base de datos.



-->

<!--
    
/*          ESTRUCTURADO  ---------*
include('ver_clases.php');  // //base datos
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT, array('cost' =>4)); 
                                                                //level encriptación  
                                                     
mysqli_query($datos_bd, "INSERT INTO registro (email, password) VALUES ('$email', '$password')");
       //ver_clases.php

header("Location: unidad8.php?reg_ok");

*/
?> 
-------------------------------------------------------------

/*


    include "ver_clases.php";
    session_start();

    $email = $_POST["email"];
    $password = $_POST["password"];
                 //$mail                    //$mail  
             
    //$verificacion = $password->VerificarPass($password);
    $verificacion = new $datos_bd(); // create an object of the Verificacion class
    //$clave=$verificacion[0]["password"];
    $clave = $verificacion->VerificarPass($password)[0]["password"]; // call the VerificarPass() method on the object
    
    
    $verificar=password_verify($password, $clave);

    if ($verificar){
        $_SESSION['password'] = $verificacion[0]["password"];
        $_SESSION['email'] = $email;      
        header("Location: unidad8.php");

    }else{
        session_destroy();
        header("Location: unidad8.php?noexiste");
    }
----------------------------------------------------------------------

include("ver_clases.php");

// Clase para cargar los datos del formulario de registro
class CargarUsuario {                                                               // Clase -*
       private $email;
       private $password;
     
       public function __construct($email, $password) {                       // Constructor -* 
         $this->email = $email;
         $this->password = password_hash($password, PASSWORD_DEFAULT);        
       }
     
       public function cargar() {  
        // Conectar a la base de datos                                            // Método -*
         $datos_bd = new mysqli("localhost", "root", "", "phpavanzado");
     
        
         // Verificar la conexión 
         if ($datos_bd->connect_error) {
           die("La conexión fallo: " . $datos_bd->connect_error);
         }
         

         //
        // Verificar si el correo electrónico ya existe en la tabla "registro"
        $stmt = $datos_bd->prepare("SELECT email FROM registro WHERE email = ?");
        $stmt->bind_param("s", $this->email);                              
        $stmt->execute();
        $stmt->store_result();
                           
       //-------------------------------------------------
       
       if ($stmt->num_rows > 0) {
        // El correo electrónico ya existe
        header('Location: unidad8.php?mensaje=usuario_nuevo');
    } else {
        // El correo se registra por primera vez
        if ($stmt->affected_rows > 0) {
            header('Location: unidad8.php?mensaje=reg_ok');
        } else {
            header('Location: unidad8.php?mensaje=error');
        }
    }
       
       //--------------------------------------------------- 
       /// if ($stmt->num_rows > 0) {
         // El correo electrónico ya existe-*
       /// header('Location: unidad8.php?usuario_nuevo');
            
        ///} else {
            // El correo se registra por primera vez-*
        ///header('Location: unidad.8php?reg_ok');
                                     //usuario_nuevo
        //--------------------------------------------------
         
         
                                     // Insertar los datos en la tabla "registro"                                   
         $stmt = $datos_bd->prepare("INSERT INTO registro (email, password) VALUES (?, ?)");
         $stmt->bind_param("ss", $this->email, $this->password);
         $stmt->execute();

        
        }
      
         // Cerrar la conexión
         $stmt->close();
         $datos_bd->close();
          }
        }

 
         // Obtener los datos del formulario de registro
         $email = $_POST["email"];
         $password = $_POST["password"];

         // Crear un objeto de la clase CargarUsuario y cargar los datos en la tabla "registro"
         $cargarUsuario = new CargarUsuario($email, $password);
         $cargarUsuario->cargar();

        /// header("Location: unidad8.php");
         //reg_ok-?usuario_nuevo

*/

    -->