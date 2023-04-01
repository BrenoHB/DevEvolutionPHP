<?php

class carro{
    private $marca;
    private $modelo;
    private $VA;
    private $ano;

    public function __construct($marca,$modelo, $VA, $ano){
        $this->marca = $marca;
        $this->modelo=$modelo;
        $this->VA=$VA;
        $this->ano = $ano;

    }
    public function acelerar($valor){ 
        if($this->VA + $valor> 300){
            $this->VA = 300;
            echo "\n\nLimite alcançado 300km/h";
        }else{
            $this->VA +=$valor;
            echo "\n\nnova velocidade: ".$this->VA;
        }

    }


    public function freiar($valor){
        if($this->VA - $valor<0){
            $this->VA = 0;
            echo "\n\nLimite alcançado, velocidade atual 0km/h";
        }else{
            $this->VA -=$valor;
            echo "\n\nnova velocidade: ".$this->VA;
        }

    
    }
    public function propriedades(){
        echo "\n".$this->modelo;
        echo "\n".$this->ano;
        echo "\n".$this->marca;
    }
}


$civic = new carro('honda', 'civic', 0, '2018');
$civic->acelerar(200);
$civic->acelerar(200);
$civic->freiar(200);
$civic->freiar(300);

$civic->propriedades();






?>