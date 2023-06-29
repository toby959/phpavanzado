<?php
   
   include("basededatos.php");
   include("producto.php");
   include("constantes.php");
   include("carrito.php");


   $base = new Basededatos(SERVIDOR, USUARIO, PASS, BASE);

   $producto = new Producto($base);  //
        

   $producto->listar_productos($_POST['codigo'], $_POST['producto'], $_POST['descripcion'], $_POST['precio']); 
        
   header("Location: unidad7.php#pdo");
?>