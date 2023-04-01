<?php
class circulo{
    private $raio;
public function __construct($raio){
    $this->raio = $raio;
}

    public function calcC(){
        return $raio*$raio*3.14;
    }

}



class retangulo{
    private $l1;
    private $l2;

        public function __construct($l1,$l2){
            $this->l1 = $l1;
            $this->l2=$l2;
            
        }
    public function calcR(){
        return $this->l1* $this->l2;
    }
}


$areaC = new circulo(20);
$circulo = $areaC->calcC;
$areaR = new retangulo(20,30);
$retangulo = $areaR->calcR();

echo "Circulo = ".$circulo." retangulo = ".$retangulo;

?>