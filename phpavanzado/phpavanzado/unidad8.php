

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

		<!--         UNIDAD VIII         -->

		<section>
			<h2 class="ejerccicio1" >Registro de Usuarios</h2>
			<!-- 1er  Formulario  -->

			<form action="cargarusuario.php" method="post">
				<label class="etiqueta" for="email">Email:</label>
				<input type="email" id="email" name="email" required>
				<br><br>
				<label class="etiqueta" for="password">Password:</label>
				<input type="password" id="password" name="password" required>
				<br><br>
				<input class="btn_3" type="submit" value="Registrar">
			</form>

			<p><?php if (isset($_GET['reg_ok'])) {
					echo "Usuario Registrado";
				} ?></p>


			<h2 class="ejerccicio_1">Ingreso de Usuarios</h2>
			<!-- 2do  Formulario  -->

			<form action="verificarusuario.php" method="post">
				<label  class="etiqueta" for="email">Email:</label>
				<input type="email" id="email" name="email" required>
				<br><br>
				<label class="etiqueta" for="password">Password:</label>
				<input type="password" id="password" name="password" required>
				<br><br>
				<input class="btn_3" type="submit" value="Ingresar">
			</form>

			<p><?php if (isset($_GET['pass_ok'])) {
					echo "Usuario y Contraseña verificados";
				} ?></p>

			<p><?php if (isset($_GET['pass_error'])) {
					echo "Datos ingresados incorrectos";
				} ?></p>

			<!--     segundo ejercicio     -->

			<h2>Paginador</h2>
			<?php
			//include('librerias/pagination_class.php');
			//include("conexion.php");
			//include('basededatos.php');   
			?>
			<!-- <script type="text/javascript">
              function pagination(page) {
                window.location = "unidad8.php?search_text="+document.form1.search_text.value+"&starting="+page;
			  }
            </script>  -->   
			<!-- INFORMACION QUE VAMOS A LISTAR -->
			<?php
			//$qry = "SELECT * FROM  alumnos";
			//tabla
			//if(isset($_POST['search_text'])) {
			//  $search_text = $_POST['search_text'];
			// $qry .= "WHERE apellido LIKE '$search_text%' OR nombre LIKE '$search_text%'";
			//} else {
			//  $search_text = ''; 
			//}

			// OPCIONES PARA EL PAGINATION 

			//if(isset($_GET['starting']) && !isset($_POST['submit'])) {
			//	$staring = $_GET['starting'];
			//} else {
			//	$starting = 0;
			//}

			// cantidad de registros x pag. 

			//$recpage = 10;

			//$obj = new Pagination_class($qry, $datos_bd, $starting, $recpage);
			//$result = $obj->result;

			?>

			<form name="form1" action="unidad8.php" method="POST">
				<input type="text" name="search_text" placeholder="Buscar por Nombre o Apellido">
				<input type="submit" value="Search">
				<table border="1" width="40%">
					<tr>
						<td>Nro.</td>
						<td>Nombre</td>
						<td>Apellido</td>
					</tr>
					<?php //if(mysqli_num_rows($result)!=0) {
					//$counter = $starting +1;
					//while($datos = mysqli_fetch_assoc($result)) {  
					?>
					<tr>
						<td><?php //echo $counter; 
							?></td>
						<td><?php //echo $datos['nombre']; 
							?></td>
						<td><?php //echo $datos['apellido']; 
							?></td>
					</tr>

					<?php
					// $counter++;		
					//}
					?>
					<tr>
						<td align="center" colspan="3"><?php //echo $obj->anchors; 
														?></td>
					</tr>
					<tr>
						<td align="center" colspan="3"><?php //echo $obj->total; 
														?></td>
					</tr>

					<?php // } else { echo "<p>No hay datos para mostrar</p>"; } 
					?>

					</tr>
				</table>

			</form>

			<!-- tercer ejercicio    -->
			<h2 class="ejercicio3">FPDF</h2>

			<p><a href="ejemplo1.php" target="new"><img class="pdf" src="imagenes/pdf.png" alt="imagen pdf"><PDF</a></p>   
			<a class="unidad8" href="https://www.flaticon.es/iconos-gratis/pdf" title="pdf iconos">Pdf iconos creados por Smashicons - Flaticon</a>
         
			<!-- cuarto ejercicio    -->

			<h2 class="ejercicio4" >PHPMailer</h2>
			<!--
		<form action="enviar.php" method="POST"> 
          <input type="text" name="nombre" placeholder="Nombre"><br><br>
		  <input type="text" name="apellido" placeholder="Apellido"><br><br>
		  <input type="email" name="correo" placeholder="Correo Electrónico"><br><br>
		  <input type="number" name="telefono" placeholder="Teléfono"><br><br>
		  <input type="text" name="asunto" placeholder="Asunto"><br><br>
		  <textarea name="mensaje" placeholder="Mensaje"></textarea><br><br>
		  <input type="submit" value="Enviar Mensaje"><br><br><br><br>
		</form>

					-->

			<form method="post" action="enviar.php">
				<label class="etiqueta" for="nombre">Nombre:</label>
				<input type="text" name="nombre" id="nombre" required><br><br>

				<label class="etiqueta" for="apellido">Apellido:</label>
				<input type="text" name="apellido" id="apellido" required><br><br>

				<label class="etiqueta" for="email">Email:</label>
				<input type="email" name="email" id="email" required><br><br>

				<label class="etiqueta" for="telefono">Teléfono:</label>
				<input type="tel" name="telefono" id="telefono" required><br><br>

				<label class="etiqueta" for="asunto">Asunto:</label>
				<input type="text" name="asunto" id="asunto" required><br><br>

				<label class="etiqueta" for="mensaje">Mensaje:</label>
				<textarea name="mensaje" id="mensaje" required></textarea><br><br>

				<button class="btn_3 ejercicio_4" type="submit">Enviar</button><br><br><br><br>
			</form>
			<?php
        if (isset($_GET['email'])) {
          echo "<h4>Correo Enviado!</h4>"; // metodo _GET
        } else {
		 // echo "<h4>Direccion de Correo no encontrada!</h4>";
		}
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