<?php

 $clase_form = $_POST ['clase'];
 $unidad_form = $_POST['unidad'];
 $fecha_form = $_POST['fecha'];


include("ver_clases.php");
                                            //todo dato que sea numero (int) va sin  ""
mysqli_query($datos_bd, "INSERT INTO clases VALUES ($clase_form, '$unidad_form', '$fecha_form')");


header("Location: index.php?ok#clases"); 

?>