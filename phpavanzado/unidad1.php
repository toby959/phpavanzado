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
	<section id="clases">
		<h2>Agenda de clases</h2>
                      <!-- UNIDAD I -->

<form action="insertar_clases.php" method="POST">
 <input type="number" name="clase" placeholder="Numero de Clase" required>
  <input type="text" name="unidad" placeholder="Unidad" required>
   <input type="date" name="fecha" placeholder="Fecha" required> 
    <input type="submit" value="Enviar"> 
</form>			

<?php
if(isset($_GET['ok'])) {
	echo "<h4>Clase cargada!</h4>";
}
?>

<div id="ver_clases">
	<h3>Agenda de Clases</h3>
	<?php 
	include("ver_clases.php");
	$consulta = mysqli_query($datos_bd, "SELECT * FROM clases ORDER BY fecha");
     
    while($listar_clas = mysqli_fetch_assoc($consulta))  {
          
	?>
     <div class="agenda">
	   <p>Numero de Clase: <?php echo $listar_clas['id_clase']; ?></p>
	    <p>Unidad: <?php echo $listar_clas['unidad']; ?></p>
		 <p>Fecha: <?php echo $listar_clas['fecha']; ?></p>
		  <nav id="btn_agenda2">
            <ul class="uni1">
			  <li class="uni2"><a class="btn" href="eliminar.php?clases=<?php echo $listar_clas['id_clase'];?>">Eliminar</a></li>	
			</ul>
    	  </nav> 
     </div>	
  	<?php } ?> 
</div>
                        <!-- END -->
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>