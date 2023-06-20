<?php

include("basededatos.php");
include("producto.php");
include("constantes.php");
$base = new Basededatos(SERVIDOR, USUARIO, PASS, BASE);

// Definir las variables utilizando el método POST
$codigo = $_POST['codigo'];
$producto = $_POST['producto'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

$prod = new Producto($base, $codigo, $producto, $descripcion, $precio);  

$prod->listar_productos($codigo, $producto, $descripcion, $precio);
header("Location: unidad7.php?ok_prod#pdo");
?>

<!--

------------------------------------

class Conexion {
    private $servidor;
    private $usuario;
    private $clave;
    private $basedatos;
    private $conexion;
  
    public function __construct($servidor, $usuario, $clave, $basedatos) {
      $this->servidor = $servidor;
      $this->usuario = $usuario;
      $this->clave = $clave;
      $this->basedatos = $basedatos;
    }
  
    public function conectar() {
      $this->conexion = mysqli_connect($this->servidor, $this->usuario, $this->clave, $this->basedatos);
      if (!$this->conexion) {
        die("Error de conexión: " . mysqli_connect_error());
      }
    }
  
    public function desconectar() {
      mysqli_close($this->conexion);
    }
  
    public function enviarConsulta($consulta) {
      $this->conectar();
      $resultados = mysqli_query($this->conexion, $consulta);
      $this->desconectar();
      return $resultados;
    }
  }
-->