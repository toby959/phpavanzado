<?php
class Basededatos {

	private $conexion;
	public $error;
	
	public function __construct($servidor, $usuario, $password, $base) {
		if (!$this->_connect($servidor, $usuario, $password, $base)) {
			$this->error = $this->conexion->connect_error;
		}
	} 

	public function __destruct() {        //no sale...
		$this->conexion->close();
	}

	private function _connect($servidor, $usuario, $password, $base) {
		$this->conexion = new mysqli($servidor, $usuario, $password, $base);
		if(!$this->conexion->connect_error) {
			$this->error = $this->conexion->connect_error;
			return false;
		}
	}

	public function enviarConsulta($query) {    //ejecutarConsultas      
		$tipo = strtoupper(substr($query, 0,6)); //SELECT, INSERT, UPDATE, DELETE = 6  
//almacena datos-strmays-substraer-
		switch($tipo) {
			case 'SELECT':
				$resultado = $this->conexion->query($query);
				if(!$resultado) {
					$this->error = $this->conexion->error;
					return false;
					} else {
						while($fila = $resultado->fetch_assoc()){
							$array_resultado[]=$fila;
						}
						return $array_resultado;
					}
				
			break;

			case 'INSERT':
				$resultado = $this->conexion->query($query);
				if(!$resultado){
					$this->error = $this->conexion->error;
					return false;
				} else {
					return $this->conexion->insert_id;
				}
			break;

			case 'UPDATE':
			case 'DELETE':
				$resultado = $this->conexion->query($query);
				if(!$resultado) {
					$this->error = $this->conexion->error;
					return false;
				} else {
					return $this->conexion->affected_rows;
				}
			break;
			default:
			$this->error = "Consulta no permitida";
		}
	}

} 

?>