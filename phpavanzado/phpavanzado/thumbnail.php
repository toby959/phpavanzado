<?php
                                // ubicacion del archivo-
$src_img = imagecreatefromjpeg("imagenes/instagram.jpg");

//

if(!$src_img){
    die("Error al cargar la imagen");
}

//
$alto = imagesy($src_img)/1.8;
$ancho = imagesx($src_img)/2.4;

// imagen de destino-
$dst_img = imagecreatetruecolor($ancho, $alto);

$imagen = imagecreate($ancho, $alto);

// copiar imagen y modificar su tamaño-
imagecopyresized($dst_img, $src_img, 0, 0, 0, 0, $ancho, $alto, imagesx($src_img), imagesy($src_img));  

// compilamos-
imagejpeg($dst_img, "imagenes/instagram_thumb.jpg");
// cierra-
imagedestroy($dst_img);

?>