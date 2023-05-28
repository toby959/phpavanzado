<?php
header("Content-type: image/jpeg");   // crea un archivo de imagen ej. jpeg-
$img = imagecreate(200, 200);         // pide alto y ancho-
$fondo = imagecolorallocate($img, 27, 250, 35); // colores de fondo - tambien contenido en RGB-verde
$blanco = imagecolorallocate($img, 245, 247, 247); // imagen y color RGB-tiza
$fondo_rojo = imagecolorallocate($img, 247, 2, 23); // imagen y color-rojo     
imagerectangle($img, 10, 10, 190, 190, $blanco);  // funcion imagen cuadrado-medidas en px-
imagefilledrectangle($img, 20, 20, 180, 180, $fondo_rojo); // genera un cuadrado completo con relleno-
imagefill($img, 0, 0, $fondo); // llena el espacio de la imagen de color-
imagejpeg($img); // formato de imagen, debe coincidir con la del header-
imagedestroy($img); // el navegador lee la extension PHP pero la toma como un archivo jpeg- 
?>
<!-- sin espacios entre el codigo -->
