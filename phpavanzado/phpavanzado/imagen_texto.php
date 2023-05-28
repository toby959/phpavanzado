<?php
header("Content-type: image/png");
$img = imagecreate(560, 150);
$t1 = "Trabajo sobre la Evaluacion Integradora IV!!!!"; //texto uno-
$fondo = imagecolorallocate($img, 204, 214, 144);
$texto = imagecolorallocate($img, 3, 79, 99);
    //tamaño fuente- x , y - String- color
imagestring($img, 5, 10, 20, $t1, $texto);
imagepng($img);
imagedestroy($img);
?>


<?php
//header("Content-type: image/png");
//$img = imagecreate(200, 100);
//$background = imagecolorallocate($img, 255, 255, 255);
//$text = "Trabajo Practico Integradora N° 4!";
//$font = "arial.ttf";
//$font_size = 20;
//$font_color = imagecolorallocate($img, 0, 0, 0);

// Renderizar el texto en la imagen
//imagettftext($img, $font_size, 0, 10, 50, $font_color, $font, $text);

// Obtener las coordenadas de la caja delimitadora
//$bbox = imagettfbbox($font_size, 0, $font, $text);

// Ajustar el tamaño del contenedor del texto
//$text_width = $bbox[2] - $bbox[0];
//$text_height = $bbox[1] - $bbox[7];
//imagecrop($img, ['x' => 0, 'y' => 0, 'width' => $text_width + 20, 'height' => $text_height + 20]);

// Mostrar la imagen
//imagepng($img);
//imagedestroy($img);
?>

<!-- FUNCION CONTEXT-BOX--