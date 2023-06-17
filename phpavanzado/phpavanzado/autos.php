<?php
/*  SEGUNDO EJERCICIO  */
class Auto {
    public $marca;
    public $modelo;
    protected $color_chasis;
    private $dominio;
    private $precio;

    function __construct($mar, $mod, $col_cha, $dom, $prec) {
        $this->marca = $mar;
        $this->modelo = $mod;
        $this->color_chasis = $col_cha;
        $this->dominio = $dom;
        $this->precio = $prec;       
    }

public function imprimirProducto (){
    echo "<h2>Marca: ".'<span class="unidad6">'.$this->marca.'</span>'."</h2>"; 
    echo "<p><span class='u-6'>Modelo:</span> ".$this->modelo."</p>";
    echo "<p><span class='u-6'>Color Chasis:</span> ".$this->color_chasis."</p>";
    echo "<p><span class='u-6'>Dominio:</span> ".$this->dominio."</p>";
    echo "<p><span class='u-6'>Precio:</span> $ ".$this->precio."</p>"; 
}

public function precioDolar (){
    $dolar = 500;
    //$url = 'https://free.currencyconverterapi.com/api/v6/convert?q=USD_ARS&compact=ultra';
    //$data = file_get_contents($url);
    //$data = json_decode($data, true);  PARA CUANDO ESTE EN LINEA....
    //$dolar_precio = $data['USD_ARS'];
    echo "<p>Precio en Dólares: USD ".(round($this->precio/$dolar))."</p>";

}

}

?>