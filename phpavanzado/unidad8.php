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
			<h2>Registro de Usuarios</h2>
			<!-- 1er  Formulario  -->

			<form action="cargarusuario.php" method="post">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
				<br><br>
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" required>
				<br><br>
				<input type="submit" value="Registrar">
			</form>

			<p><?php if (isset($_GET['reg_ok'])) {
					echo "Usuario Registrado";
				} ?></p>


			<h2>Ingreso de Usuarios</h2>
			<!-- 2do  Formulario  -->

			<form action="verificarusuario.php" method="post">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
				<br><br>
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" required>
				<br><br>
				<input type="submit" value="Login">
			</form>
            
			<p><?php if (isset($_GET['pass_ok'])) {
					echo "Usuario y Contraseña verificados";
				} ?></p> 

            <p><?php if (isset($_GET['pass_error'])) {
					echo "Datos ingresados incorrectos";
				} ?></p>

            <h2>Paginador</h2>
			<?php 
			include("librerias/pagination_class.php");
			include("conexion.php");
			?>
			<script type="text/javascript">
              function pagination(page) {
                window.location = "unidad8.php?search_text="+document.form1.search_text.value+"&starting="+page;
			  }
            </script>
                          <!-- INFORMACION QUE VAMOS A LISTAR -->
			<?php
			$qry = "SELECT * FROM  alum";
			                      //falta tabla
			if(isset($_POST['search_text'])) {
              $search_text = $_POST['search_text'];
			  $qry .= "WHERE apellido LIKE '$search_text%' OR nombre LIKE '$search_text%'";
			} else {
			  $search_text = ''; 
			}
			
			if(isset($_GET['starting']) && !isset($_POST['submit'])) {
				$staring = $_GET['starting'];
			} else {
				$starting = 0;
			}

			         // cantidad de registros x pag. 
					 
			$recpage = 10;
			
			$obj = new Pagination_class($qry, $datos_bd, $starting, $recpage);
			$result = $obj->result;

			?>
			
            <form name="form1" action="unidad8.php" method="POST">
            <input type="text" name="search_text" placeholder="Buscar por Nombre y Apellido">
            <input type="submit" value="Buscar">
			<table border="1" width="40%">
				<tr><td>Nro.</td><td>Nombre</td><td>Apellido</td></tr>
				<?php if(mysqli_num_rows($result)!=0) {
					$counter = $starting +1;
					while($datos = mysqli_fetch_assoc($result)) {  ?>
				    <tr>
						<td><?php echo $counter; ?></td>
						<td><?php echo $datos['nombre']; ?></td>
						<td><?php echo $datos['apellido']; ?></td>
					</tr>

			 		<?php 
			        $counter++;		
				}
			 ?>
                <tr><td align="center" colspan="3"><?php echo $obj->anchors; ?></td></tr>  
				<tr><td align="center" colspan="3"><?php echo $obj->total; ?></td></tr>
             
                   <?php } else { echo "<p>No hay datos para mostrar</p>"; } ?> 

            </tr></table>  

			</form>

		</section>
		<aside>

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>