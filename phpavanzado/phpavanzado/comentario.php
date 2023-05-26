<?php

//verifica si los datos del formulario han sido enviados y se almacenan en variables. 
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comments'])) {
 
  $nombre = $_POST['name'];
 
  $mail = $_POST['email'];
 
  $comentario = $_POST['comments'];



  //se obtiene la fecha actual(date) del sevidor!!.
  // $fecha = date('Y-m-d H:i:s');
 

  date_default_timezone_set('America/Argentina/Buenos_Aires');
  $date = date('Y-m-d H:i:s');

                      // SIN HTML //                     

  //línea de texto, que contiene los datos del usuario junto con la fecha y hora en que fueron enviados.

  //$linea = "Nombre completo: $nombre\n Correo: $mail\n Fecha y hora (Buenos Aires): $date\n Comentario: $comentario\n\n";

  //"$nombre\t$mail\t$fecha\t$comentario\n\n";

                     // SIN HTML //


                     // CON HTML // 

$linea = '<h4 class="form_3">Nombre completo: '.$_POST['name']."</h4>"."<p class='form_tres'>Correo: ".$_POST['email']."<p class='form_III'>Fecha y hora (Buenos Aires): ".$date."<p class='form_tree'>Comentario: ".$_POST['comments']."</p>";


                     // CON HTML //



  //se agrega al archivo "comentarios.txt" utilizando la función (file_put_contents).
  file_put_contents('comentarios.txt', $linea, FILE_APPEND);
} //(FILE_APPEND)se utiliza para agregar la línea, al final del archivo sin sobrescribir su contenido anterior.   




header("Location: unidad3.php#comentario");

?>

<!-- La función fopen() con el modo "+" puede ser una mejor opción que la función file_put_contents()
 en situaciones en las que necesite realizar operaciones de archivo más complejas, como leer y
 escribir en el archivo al mismo tiempo. Sin embargo, si solo necesita escribir datos en un archivo,
 la función file_put_contents() es una opción más simple y concisa.       -->
 











<?php


//$nombre = $_POST['name'];
//$apellido = $_POST['lastname'];
//$mail = $_POST['email'];
//$comentario = $_POST['comments'];


// Abrir archivo comentarios.txt
//$file1 = fopen('comentarios.txt', 'a');

//Escriba los datos del formulario para presentar
//fwrite($file1, "$nombre $apellido ($mail) -$comentario\n\n");


//fclose($file1);
////////////////////
// Leer todos los comentarios de comentarios.txt
//$lines = file('comentarios.txt');

// Recorra las líneas y muestre cada una como un comentario
//foreach ($lines as $line) {
// echo "<div class='comment'>$lines</div>";
//}
////////////////////

//header("Location: unidad3.php#comentario");


?>