<?php
class Producto {
   private $bd;
   public $codigo;
   public $producto;
   public $descripcion;
   public $precio;
   
public function __construct($base, $codigo, $producto, $descripcion, $precio) {
   $this->bd = $base;
   $this->codigo = $codigo;
   $this->producto = $producto;
   $this->descripcion = $descripcion;
   $this->precio = $precio;  
}

public function listar_productos($codigo, $producto, $descripcion, $precio){    //insertar productos
   $respuesta = $this->bd->enviarConsulta("INSERT INTO productos VALUES (DEFAULT, '$codigo', '$producto', '$descripcion', '$precio')");   
 //variable         //misma que funcion bd
  return  $respuesta;
 }
}

?>

<!--

class Producto {
   private $bd;
 
   public function __construct($bd) {
     $this->bd = $bd;
   }
 
   public function listar_productos() {
     $consulta = "SELECT * FROM productos";
     $resultados = $this->bd->enviarConsulta($consulta);
     $productos = array();
     while ($fila = mysqli_fetch_assoc($resultados)) {
       $productos[] = $fila;
     }
     return $productos;
   }
 }
-->