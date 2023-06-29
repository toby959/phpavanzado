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

                                   <!-- UNIDAD VII  -->

    <section id="pdo">
      <h2>Compras</h2>

                   <!-- Formulario para ingresar los datos del producto  -->
      <h2>Ingresar un nuevo producto</h2>
      <form method="POST" action="altas_prod.php">
        <label class="etiqueta" for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo"><br><br>

        <label class="etiqueta" for="producto">Producto:</label>
        <input type="text" id="producto" name="producto"><br><br>

        <label class="etiqueta" for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion"><br><br>

        <label class="etiqueta" for="precio">Precio:</label>
        <input type="text" id="precio" name="precio"><br><br>

        <button class="btn_3 unida_5 u_7" type="submit">Cargar Producto </button>

        <?php
        if (isset($_GET['ok_prod'])) {
          echo "<h4>Producto cargado!</h4>"; // metodo _GET
        }
        ?>



                    <!--Tabla para mostrar los productos ingresados-->
        <h2>Productos ingresados</h2>

                                      <!-- NEW -->
        <?php
        include("basededatos.php");
        include("producto.php");
        include("constantes.php");
        include("carrito.php");


        $base = new Basededatos(SERVIDOR, USUARIO, PASS, BASE);

        $producto = new Producto($base);  //

        $mostrar_productos = $producto->listar_productos($codigo, $producto, $descripcion, $precio);

        ?>



        <table>

          <tr>
            <th>Código</th>
            <th>Producto</th>
            <th>Descripción</th>
            <th>Precio</th>
          </tr>

                                       <!-- DINAMICA -->
          <?php
          for ($i = 0; $i < count($mostrar_productos); $i++) {
          ?> <!--nuetro array-->
            <tr>

              <td><?php echo $mostrar_productos[$i]['codigo']; ?></td>
              <td><?php echo $mostrar_productos[$i]['producto']; ?></td>
              <td><?php echo $mostrar_productos[$i]['descripcion']; ?></td>
              <td><?php echo $mostrar_productos[$i]['precio']; ?></td>
              <td><a href="listar_compra.php?id=<?php echo $mostrar_productos[$i]['codigo']; ?>">Comprar</td>
              <td><a href="eliminar_compra.php?id= <?php echo $mostrar_productos[$i]['codigo']; ?>">Eliminar</td>

            </tr>
          <?php } ?>
        </table>
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





<!--



<h1>Lista de Productos</h1>
<table>
  <thead>
    <tr>
      <th>Código</th>
      <th>Producto</th>
      <th>Descripción</th>
      <th>Precio</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php //foreach ($productos as $indice => $producto) { 
    ?>
      <tr>
        <td><//?php echo $producto['codigo']; ?></td>
        <td><//?php echo $producto['producto']; ?></td>
        <td><//?php echo $producto['descripcion']; ?></td>
        <td><//?php echo $producto['precio']; ?></td>
        <td>
          <form method="post">
            <input type="hidden" name="indice" value="<//?php echo $indice; ?>">
            <button type="submit" name="comprar">Comprar</button>
          </form>
        </td>
      </tr>
    <?php //} 
    ?>
  </tbody>
</table>

<h1>Carrito de Compras</h1>
<table>
  <thead>
    <tr>
      <th>Código</th>
      <th>Producto</th>
      <th>Descripción</th>
      <th>Precio</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php //foreach ($compras as $indice => $compra) { 
    ?>
      <tr>
        <td><//?php echo $compra['codigo']; ?></td>
        <td><//?php echo $compra['producto']; ?></td>
        <td><//?php echo $compra['descripcion']; ?></td>
        <td><//?php echo $compra['precio']; ?></td>
        <td>
          <form method="post">
            <input type="hidden" name="indice" value="<//?php echo $indice; ?>">
            <button type="submit" name="eliminar">Eliminar</button>
          </form>
        </td>
      </tr>
    <?php //} 
    ?>
  </tbody>
</table>   -->




<!--  PHP   -->
<?php
// Incluir los archivos que contienen las clases
//include('producto.php');
//include('carrito.php');
//include('basededatos.php');

// Crear una instancia de la clase Producto
//$producto = new Producto($codigo, $producto, $descripcion, $precio);

// Mostrar la lista de productos ofrecidos
//$producto->listar_productos();

// Crear una instancia de la clase Carrito
//$carrito = new Carrito();

// Introducir una compra en el carrito
//$carrito->introducir_compra($producto);

// Mostrar el contenido del carrito
//$carrito->listar_compra();

// Eliminar una compra del carrito
//$carrito->eliminar_compra($id_compra);
?>



<!--                                       
<?php
//require_once('conexion.php');
//require_once('producto.php');
//require_once('carrito.php');

//$bd = new Conexion();
//$producto = new Producto($bd);
//$carrito = new Carrito();

//if (isset($_POST['comprar'])) {
//  $indice = $_POST['indice'];
//  $producto_seleccionado = $producto->listar_productos()[$indice];
//  $carrito->introducir_compra($producto_seleccionado);
//}

//if (isset($_POST['eliminar'])) {
//  $indice = $_POST['indice'];
//  $carrito->eliminar_compra($indice);
//}

//$productos = $producto->listar_productos();
//$compras = $carrito->listar_compra();
?>
//