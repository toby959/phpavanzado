<?php session_start(); ?> <!-- siempre se inicia session arriba del HTML -->


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

		                          <!-- UNIDAD V -->
 
		<section id="black">
			<h2 id="consultas">Consultas</h2>
			<h3 id="unidad5">Formulario</h3>
			<form class="unidadV" action="cargar.php" method="POST">
				<label class="etiqueta" for="name">Nombre:</label>
				<input type="text" id="name" name="name" required><br><br>

				<label class="etiqueta" for="lastname">Apellido:</label>
				<input type="text" id="lastname" name="lastname" required><br><br>

				<label class="etiqueta" for="email">Email:</label>
				<input type="email" id="email" name="email" required><br><br>

				<label class="etiqueta" for="consulta">Consulta:</label>
				<textarea id="consulta" name="consulta" required></textarea><br><br>


				<h6>CAPTCHA</h6>
				                <!--  ESTRUCTURA RANDOM -->


				<?php
				function contCaptcha()
				{
					$pattern = "123456789abcdefghijklmnopqrstuvwyzABCDEFGHIJKLMNOPQRSTUVWY#&$%!'?";
					$clave = "";
					for ($i = 0; $i < 5; $i++) {
						$clave .= $pattern[rand(0, 64)]; // .= el punto sirve para concatenar un valor*- 
					}
					return $clave;
				}
				$_SESSION['captcha'] = contCaptcha();
				?>

				<img class="u_5" src="captcha.php">

				<div class="uni_5">
					<input type="text" name="codigo" placeholder="Captcha">
				</div>
				<div class="unida_5">
					<input class="btn_3 unida_5" type="submit" name="Enviar">
				</div>

			</form>

			<?php
			if (isset($_GET['error_codigo'])) {
				echo "<p>El código de seguridad es incorrecto</p>";
			}
			?>

	</div>
	</section>
	<aside>

	</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>

	</div>
</body>

</html>