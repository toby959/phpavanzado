<?php
class Asientos extends Auto {
    public $min_butacas;
    private $max_butacas;

function __construct($mar, $mod, $col_cha, $dom, $prec, $min, $max){
    parent::__construct($mar, $mod, $col_cha, $dom, $prec);
    
    $this->min_butacas = $min;
    $this->max_butacas = $max; 

    }
    
    public function imprimirAsientos() {
        parent:: imprimirProducto();
        if ($this->min_butacas == $this->max_butacas) {
            echo "<p>Cantidad de Butacas: ".$this->min_butacas."</p>";
        } else {
            echo "<p>Cantidad de Butacas desde: ".$this->min_butacas." hasta: ".$this->max_butacas."</p>";

        }
        
    }
}


?>