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

		                                   <!-- UNIDAD VI -->

		<section>
			<h2 class="unidad6" >Usuarios</h2>
            			<?php
			include("caract_usuarios.php");
            
                                           /* SEGUNDO EJERCICIO */
							    	   /* autos.php => asientos.php */ 
			include("autos.php");
			include("asientos.php");
			$SV4 = new Auto('Toyota', '4x4 DIAMOND II 6 AT 7A', 'rojo', 'AG959AG', 23276000); 
             
            $asientos  = new Asientos('Toyota', '4x4 DIAMOND II 6 AT 7A', 'rojo', 'AG959AG', 23276000, 5, 7);
			$asientos-> imprimirAsientos();
            $SV4 -> precioDolar(); 
			
			
            
			
			$HILUX_CONQUEST = new Auto('Toyota', '4X4 DC 2.8 TDI 6 AT', 'blanco', 'AG969AG', 19364000); 
            $HILUX_CONQUEST-> imprimirProducto(); 
			$HILUX_CONQUEST-> precioDolar();
                       

			
			?>

		</section>
		<aside>

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>