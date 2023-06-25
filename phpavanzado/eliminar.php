<?php
include("ver_clases.php"); //se vincula a la base de datos----

$clase_form = $_GET['clases']; //hay que definir el nombre de la matriz!!!!!!

                                                 
mysqli_query($datos_bd, "DELETE FROM clases WHERE id_clase = $clase_form");

header("Location: unidad1.php"); 
?>