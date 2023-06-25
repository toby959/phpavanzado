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

