<?php
class Usuarios {
    private $nombre;            //
    private $apellido;          // PROPIEDADES
    private $fecha_nacimiento;  //

public function __construct($nombre, $apellido, $fecha_nacimiento) {  //
    $this-> nombre = $nombre;                                         // 
    $this-> apellido = $apellido;                                     // CONSTRUCTOR
    $this-> fecha_nacimiento = $fecha_nacimiento;                     //
}

private function calcular_edad(){                                     //
    $hoy = new DateTime();                                            //
    $fecha_nacimiento = new DateTime($this->fecha_nacimiento);        // METODO
    $edad = $hoy->diff($fecha_nacimiento);                            //
    return $edad->y;                                                  //  
}
public function imprime_caracteristicas(){                                                         //
    $edad = $this->calcular_edad();                                                                //
    echo "<span class='nombre'> Nombre: " .$this->nombre . "<br>"."</span>";                          // METODO
    echo "<span class='apellido'> Apellido: " .$this->apellido . "<br>"."</span>";                    //
    echo "<span class='edad'> Edad:</span> " . "<span class='edad6'>$edad</span" . "<br>";         // 
}


}


?>