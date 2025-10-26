<?php
Class Conversion{
    private $tipo;
    private $grados;
    private $temperatura;

    public function __construct($tipo, $grados) {
        $this->tipo = $tipo;
        $this->grados = $grados;
    }

    
    public function calcularConversion(){
        //(F - 32) * (5/9)
        if($this->tipo == "farenheit"){
            $celsius = number_format(($this->grados - 32)* (5/9),1);
            $this->temperatura = $celsius;
            return $celsius."° C";

        //(C * 1.8) + 32
        }else if($this->tipo == "celsius"){
            $farenheit = number_format(($this->grados * 1.8) + 32, 0);
            $this->temperatura = $this->grados;
            return $farenheit. "° F";
        }
        
    }
    public function Estado () {
        $temperatura = $this->temperatura;
        switch (true) {
            case ($temperatura < 35.0):
                return "Hipotermia";
            case ($temperatura >= 35.0 && $temperatura < 36.5):
                return "Normal";
            case ($temperatura >= 36.5 && $temperatura < 38.0):
                return "Fiebre";
            case ($temperatura >= 38.0 && $temperatura < 40.0):
                return "Fiebre Alta";
            case ($temperatura >= 40.0):
                return "Hipertermia";
            default:
                return "Valor no válido";
        }
    }
}
?>