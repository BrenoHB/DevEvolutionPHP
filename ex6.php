<?php

abstract class animal{
private $nome;
private $idade;

public function __construct($nome, $idade){
    $this->nome = $nome;
    $this->idade = $idade;
}
abstract public function emitirsom();
}
class cachorro extends animal{
    public function emitirsom(){
        echo "auau\n";
    }
}
class gato extends animal{
    public function emitirsom(){
        echo "miar\n";
    }
}

$dog = new cachorro('reginaldo',31);
$dog->emitirsom();
$cat = new gato('rogerio', 35);
$cat->emitirsom();




?>