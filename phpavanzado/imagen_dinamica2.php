<?php
header("Conten-type: image/png");
$img = imagecreate(200, 200);
$fondo = imagecolorallocate($img, 250, 10, 206); //color fucsia-
$negro = imagecolorallocate($img, 0, 0, 0);
$violeta = imagecolorallocate($img, 98, 57, 247);
$verde = imagecolorallocate($img, 0, 255, 0);
$points = array (80, 80, 120, 120, 40, 140); // forma del trinagulo     
//array(20, 100, 100, 180, 180, 100, 100, 20);
//imagepolygon($img, $points, 4, $negro); // nos pide la imagen y cuatro
//aparametros- el array con vertices- la cantidad de puntas-poligono
imagepolygon($img, $points, 3, imagecolorallocate($img, 0, 0, 0)); //insertar triangulo-
imagearc($img, 100, 100, 180, 180, 0, 360, $violeta); // circulo-
imagearc($img, 100, 100, 80, 50, 0, 360, $verde);
imagepng($img);
imagedestroy($img);
?>




<!--
$img es la imagen en la que se dibujará el polígono.
$points es un array que contiene las coordenadas de los puntos del polígono.
$num_points es el número de puntos del polígono.
$color es el color del polígono.
Aquí hay un ejemplo de cómo se puede utilizar la función "imagepolygon" para 
dibujar un triángulo en una imagen:


// Crear una imagen de 400x400 píxeles

$img = imagecreatetruecolor(400, 400);

// Definir los puntos del triángulo

$points = array(
    100, 100, // punto 1
    200, 300, // punto 2
    300, 100, // punto 3
);

// Dibujar el triángulo en la imagen

imagepolygon($img, $points, 3, imagecolorallocate($img, 255, 0, 0));

// Mostrar la imagen

header('Content-Type: image/png');
imagepng($img);
imagedestroy($img);

Este código creará una imagen de 400x400 píxeles y dibujará un triángulo
rojo en ella con los puntos (100, 100), (200, 300) y (300, 100).

-->