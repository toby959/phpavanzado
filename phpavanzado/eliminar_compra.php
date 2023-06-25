<?php
include("basededatos.php");
include("producto.php");
include("constantes.php");
include("carrito.php");

$base = new Basededatos(SERVIDOR, USUARIO, PASS, BASE); 
$producto = new Producto($base); 

$prod->eliminar_compra($_GET['id']);

header("Location: unidad7.php#pdo");

?>