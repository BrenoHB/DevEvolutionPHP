<?php
class Pessoa{
    public $nome;
    public function __construct($nome){
        $this->nome = $nome;
    }
    }
class funcionario extends Pessoa{

    public function printsalario($valor){
        echo "\n\n salario =  ".$valor;
    }

}
$breno = new funcionario('breno');

echo $breno->nome;
echo $breno->printsalario(1200);




?>