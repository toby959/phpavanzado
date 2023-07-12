<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
</head>

<body>

	<div class="container">
		<header>
			<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>


			<nav>
				<?php include("botonera.php"); ?>
			</nav>
		</header>
		<section>
			<h2 class="comentarios">&#128512Comentarios&#128512</h2>
			                <!-- UNIDAD 3 -->

			<form id="cmtr" action="comentario.php" method="POST">
				<label class="etiqueta" for="name">Nombre y Apellido:</label>
				<input class="casillero" type="text" id="name" name="name" required><br><br>
				<label class="etiqueta" for="email">Mail:</label>
				<input class="casillero" type="email" id="email" name="email" required><br><br>
				<label class="etiqueta"  for="comments">Comentario:</label>
				<textarea class="casillero" id="comments" name="comments" rows="4" cols="30" required></textarea><br><br>
				<input class="btn_3 unidad3" type="submit" name="enviar" value="Enviar">
			</form>
 
                              <!-- PHP -->
	
<div class="container">
		<h2 class="comentarios">Lista de Comentarios</h2>
<ul id="coment">     
   
  <?php
 
 // Leer todos los comentarios de comentarios.txt
  $lines = file('comentarios.txt');


 // Recorra las líneas y muestre cada una como un elemento de la lista
  foreach ($lines as $line) {
  echo "<li class='datos'>$line</li>";
}

?>
</ul>      
</div> 

</section>
		<aside>

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>

 







<?php
// Read and display all comments from comentarios.txt
//$file1 = fopen('ejemplo1.txt', 'r');
//while (!feof($file1)) {
//  echo fgets($file1) . "<br>";
//}
//fclose($file1);
	?>



<?php 
//	 if (isset($_POST['enviar'])) { // = al name del input(submit)-
//		$informacion = "<p>Nombre: ".$_POST['name']. "</p><p>Apellido: ".$_POST['lastname']. "</p><p>Mail: ".$_POST['email']. "</p><p>Comentario: ".$_POST['comments']."</p><hr/>";
	 

		//verificar si el archivo existe antes de abrirlo-

//		if (!file_exists('ejemplo1.txt')) {
//			$file1 = fopen('ejemplo1.txt', 'w');
//			fclose($file1);
//		  }
		  
	

//	 $file1 = fopen("ejemplo1.txt", "a+"); //crear archivo e ir acumulando comentarios- 
//	 fwrite($file1, $informacion); // cargar contenido al archivo txt- tiene 3 parametros, el ultimo longitud opcional- 
//   fpassthru($file1); // para imprimir los datos-
//	 fclose($file1); // cierra archivo de txt-

//	}
	?>


<!--<ul id="comentarios">
  <?php
  // Leer todos los comentarios de comentarios.txt
//  $lines = file('comentarios.txt');

  // Recorra las líneas y muestre cada una como un elemento de la lista
//  foreach ($lines as $line) {
//    echo "<li>$line</li>";
//  }
  ?>
</ul>
-->


<!-- if (file_exists('comments.txt')) {
	$lineas = file('comments.txt');
	var_dump($lineas); //depuracion
	foreach ($lineas as $linea) {
	  list($nombre, $mail, $fecha, $comentario) = explode("\t", $linea);
    echo "<p><strong>$nombre ($mail) - $fecha:</strong> $comentario</p>";
  }
}  
-->
<!--
<div class="container">
		<h2 class="comentarios">Lista de Comentarios</h2>
<ul id="comentarios">
  
  <?php
 
  // Leer todos los comentarios de comentarios.txt
//  $lines = file('comentarios.txt');

  // Recorra las líneas y muestre cada una como un elemento de la lista
//  foreach ($lines as $line) {
//    echo "<li>$line</li>";
//  }


 
  ?>
</ul>
</div> -->


<!--
<div class="container">
  <h2 class="comments">Lista de Comentarios</h2>
  
  <?php
    // Leer todos los comentarios del archivo "comments.txt"
//    $lines = file('comments.txt');
    
    // Loop through the lines, displaying each one as a list item
//    foreach($lines as $line) {
      // Separar los datos del comentario
//      list($nombre, $mail, $fecha, $comentario) = explode("\t", $line);
      
      // Mostrar el comentario con formato
//      echo "<div class='comment'>";
//      echo "<div class='name'>$nombre ($mail)</div>";
//      echo "<div class='date'>$fecha</div>";
//      echo "<div class='text'>$comentario</div>";
//      echo "</div>";
//    }
    
    // Si no hay comentarios, mostrar un mensaje
//    if (count($lines) == 0) {
//      echo "<p>No hay comentarios aún.</p>";
//    }
  ?>
</div>
-->