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
		                 <!-- UNIDAD IV  -->

		<section>
			<h2>Imágenes con PHP</h2>
			<h3 class="unidad4">Formato de Imágenes</h3> 
			               <!-- PHP -->
			<?php

			if (imagetypes() & IMG_GIF) {
				echo "<p class='respuesta'>El tipo GIF es soportado</p>";
			} else {
				echo "<p>El tipo GIF NO es soportado</p>";
			}
			if (imagetypes() & IMG_PNG) {
				echo "<p class='respuesta'>El tipo PNG es soportado</p>";
			} else {
				echo "<p>El tipo PNG NO es soportado</p>";
			}
			if (imagetypes() & IMG_JPEG) {
				echo "<p class='respuesta'>El tipo JPEG es soportado</p>";
			} else {
				echo "<p>El tipo JPEG NO es soportado</p>";
			}

			?>
			<h3 class="unidad4">Marca de Agua</h3>
			<div id="m_a">
			<img class="agua" src="marca_agua.php" />
            </div> 
			<h3 class="unidad4">Thumbnail</h3>
			<?php
			include("thumbnail.php");?>
			<div id="m_a">
			<img src="imagenes/instagram.jpg">
			</div> 
            <div id="m_a">
			<img src="imagenes/instagram_thumb.jpg">
            </div>  
			<?php
			
			include("thumbnail2.php");?>
			<div id="m_a">
			<img class="img_u4" src="imagenes/unidad4.jpg">
			</div> 
            <div id="m_a">
			<img src="imagenes/unidad4_thumb.jpg">
            </div>  
            
			<h3 class="unidad4">Imágenes Dinámicas</h3>
			 <div id="m_a">
			 <img src="imagen_dinamica.php" />
			 </div> 
             <div id="m_a">
			 <img src="imagen_dinamica2.php" />
			 </div> 
             <div id="m_a">
			 <img class="img_texto" src="imagen_texto.php" />
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