<?php
include("producto.php");

class Carrito {
    private $compras = array();
    private $bd;  // nombrar variable bd-*

public function __construct($base) {   //constructor-*
    $this->bd = $base;
}


public function introducir_compra($producto) {  //seleccionarProductos
    $respuesta = $this->bd->enviarConsulta("SELECT * FROM productos ORDER BY codigo");
    return $respuesta;
}   

public function eliminar_compra($id) {  //borrarProducto
    $respuesta = $this->bd->enviarConsulta("DELETE FROM productos WHERE codigo = $id");
    return $respuesta;
}

public function listar_compra($id) { //seleccionarProducto
    $respuesta = $this->bd->enviarConsulta("SELECT * FROM productos WHERE codigo = $id");
    return $respuesta;
}

public function actualizarProducto($id, $codigo, $producto, $descripcion, $precio){
    $respuesta = $this->bd->enviarConsulta("UPDATE productos SET codigo = '$codigo', producto = '$producto', descripcion = '$descripcion', precio = $precio WHERE codigo = $id");
    return $respuesta;
}

}
$producto = new Producto($bd, $codigo, $producto, $descripcion, $precio);

?>

<!--


class Carrito {
    private $productos;
  
    public function __construct() {
      $this->productos = array();
    }
  
    public function introducir_compra($producto) {
      $this->productos[] = $producto;
    }
  
    public function eliminar_compra($indice) {
      unset($this->productos[$indice]);
      $this->productos = array_values($this->productos);
    }
  
    public function listar_compra() {
      return $this->productos;
    }
  }



-->