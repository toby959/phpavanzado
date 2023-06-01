<?php
$image = "imagenes/desierto.jpg";
$marca_agua = "imagenes/marca.png";

// Crea la imagen de marca de agua-*
$img = imagecreatefrompng($marca_agua);


// 2 Asegurarse de que la imagen de marca de agua tenga el tamaño correcto
$img = imagescale($img, 200, 200);



$ext = substr($image, -3);
$ext = strtolower($ext);


switch ($ext) {
       case 'gif':
              $img2 = imagecreatefromgif($image);
              break;
       case 'jpg':
              $img2 = imagecreatefromjpeg($image);
              break;
       case 'png':
              $img2 = imagecreatefrompng($image);
              break;
}

  
// Copia la imagen de la marca de agua en la imagen original-*
// destino- fuente- eje x- eje y - ancho - alto-*          
  
imagecopy($img2, $img, (imagesx($img2)/2.9), (imagesy($img2)/3.9), 0, 0, imagesx($img), imagesy($img));


header("Content-type: image/jpeg");
imagejpeg($img2);

// Liberar memoria

imagedestroy($img);
imagedestroy($img2);

?>



<!--
$image_carpeta = "imagenes/";
$marca_archivo = "marca.png";
$unidad4_archivo = "unidad4.jpg"; 


$marca_img = imagecreatefrompng($image_carpeta . $marca_archivo);
$ext = substr($unidad4_archivo, -3);
$ext = strtolower($ext);

 switch ($ext) {
       case 'gif':
              $unidad4_img = imagecreatefromgif($image_carpeta . $unidad4_archivo);
              break;
       case 'jpg':
              $unidad4_img = imagecreatefromjpeg($image_carpeta . $unidad4_archivo);
              break;
       case 'png':
              $unidad4_img = imagecreatefrompng($image_carpeta . $unidad4_archivo);
              break;
}


imagecopy($unidad4_img, $marca_img, (imagesx($unidad4_img)/2), (imagesy($unidad4_img)/2), (imagesx($unidad4_img)/2), (imagesy($unidad4_img)/2), imagesx($marca_img), imagesy($marca_img));

header("Content-type: image/jpeg");
imagejpeg($unidad4_img);
imagedestroy($marca_img);
imagedestroy($unidad4_img);
--> 