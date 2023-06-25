
<?php


$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$fecha_actual = time();
$fecha_ingresada = strtotime("$year-$month-$day");

$diferencia = $fecha_ingresada - $fecha_actual;
$dias_faltantes = round($diferencia / (60 * 60 * 24));


header("Location: unidad2.php?dias_faltantes=$dias_faltantes#fecha");
 


?>



