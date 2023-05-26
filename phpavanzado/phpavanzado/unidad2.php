<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
</head>

<body>

	<div class="container">
		<header>
			<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>


			<nav>
				<?php include("botonera.php"); ?>
			</nav>
		</header>
		                         <!-- UNIDAD II -->


		<section class="fecha">
			<h2>Eventos</h2>
			<h3>Función Fechas</h3>
			<form action="calculo_fecha.php#fecha" method="POST">
				<input type="number" name="day" min="1" max="31" placeholder="Día" required>
				<input type="number" name="month" min="1" max="12" placeholder="Mes" required>
				<input type="number" name="year" min="<?php echo date('Y'); ?>" max="2099" placeholder="Año" required>
				<input type="submit" name="calcular_fecha" value="Calcular">
			</form>  <!--La letra 'Y' - Representa un año (en cuatro dígitos) dentro de la función "date". -->

			<div id="fechas">
				<h3>Calcular Fechas</h3>

				<?php
				if (isset($_GET['dias_faltantes'])) {
					$dias_faltantes = $_GET['dias_faltantes'];
					if ($dias_faltantes > 0) {
						echo "<h6>Faltan $dias_faltantes días para la fecha ingresada.</h6>";
					} else {
						echo "<h6>La fecha ingresada ya ha pasado hace " . abs($dias_faltantes) . " días.</h6>";
					}      //        -*La función abs() devuelve el valor absoluto (positivo) de un número*-
				}
				?>

                                   <!-- END PHP -->

			</div>

		</section>
		                             <!-- END -->
		<aside>

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>

<!-- REFERENCIAS abs() PHP de W3SCHOOL -->
<!-- PHP AVANZADO date() PHP de W3SCHOOL -->




<?php

//	$fecha = date("Y/m/d");
//	echo "<h4>Hoy es: $fecha</h4>";
//	if($fecha<"2023/05/15") {
//		echo "<p>Sitio en mantenimiento</p>";
//	} else {
//		echo "<h4>Bienvenidos al sitio !!</h4>";
//		}
?>



<?php //{ 
?>

<!--<div class="fecha">
  <p>Día: <?php //echo $day['day']; 
			?></p>
   <p>Mes: <?php //echo $month['month']; 
			?></p>
	<p>Año: <?php //echo $year['year']; 
			?></p>
	
</div>	           -->
<?php //} 
?>


<?php
//		  $day = $_POST['day'];
//         $month = $_POST['month'];
//       $year = $_POST['year'];


//  if (checkdate($day,$month,$year)) {
//	 if (isset($_POST['Calcular'])) {
//        include("calculo_fecha.php");
//		$fecha_final = date("$year-$month-$day"); 
//		echo "<p>Los días restantes a la fecha son $fecha_final: ".dias_restantes($fecha_final); 						
//		 } 
//	} else {
//		   echo "<p>La fecha es incorrecta:</p>";
//	}

?>


<?php
//if(isset($_GET['ok'])) {
//	echo "<h4>Fecha cargada!</h4>";
//}
?>


<?php
// if (isset($_GET['dias_faltantes'])) { 
//	$dias_faltantes = $_GET['dias_faltantes'];
//	echo "<h6>Faltan $dias_faltantes días para la fecha ingresada.</h6>"; 
//	}	
?>