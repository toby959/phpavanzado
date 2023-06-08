<?php
session_start();
header("Content-type: image/jpeg");
$imgCaptcha = imagecreate(70,30); // ancho-alto
imagecolorallocate($imgCaptcha, 240, 97, 86);     //color RGB fondo
$colorTxt = imagecolorallocate($imgCaptcha, 0, 0, 33); 
imagestring($imgCaptcha, 5, 10, 5, $_SESSION['captcha'], $colorTxt);
             //image-font 1 a 5 -x-y-string-color 
imagejpeg($imgCaptcha);
?>