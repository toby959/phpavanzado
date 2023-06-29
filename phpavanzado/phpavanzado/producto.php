<?php
class Producto {
     private $bd;
     private $codigo;
     private $descripcion;
     private $precio;
    
public function __construct($base) { 
   $this->bd = $base;
   
}

  public function __toString() {
    return "Producto: " . $this->codigo . ", " . $this->descripcion . ", " . $this->precio;
  }



public function listar_productos($codigo, $producto, $descripcion, $precio){    //insertar productos
   $respuesta = $this->bd->enviarConsulta("INSERT INTO productos VALUES ('$codigo', '$producto', '$descripcion', '$precio')");   
//variable         //misma que funcion bd
  return  $respuesta;
 }

}

// Crear una instancia de la clase Producto
$producto = new Producto($base);

// Llamar al método listar_productos
$resultado = $producto->listar_productos($codigo, $producto, $descripcion, $precio);

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