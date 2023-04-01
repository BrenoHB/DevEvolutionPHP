<?php

class Pilha {
  private $pilha = array();

 
  public function push($item) {
    array_push($this->pilha, $item);
  }

  public function pop() {
    return array_pop($this->pilha);
  }

  
  public function peek() {
    return end($this->pilha);
  }

  
  public function isEmpty() {
    return empty($this->pilha);
  }
}
$pilha = new pilha();

$pilha->push('jhon wick');
$pilha->push('jhon wick 2');
$pilha->push('jhon wick3');
$pilha->push('jhon wick4');
$pilha->push('jhon wick5');
$pilha->push('Velozes e furiosos');
$pilha->push('jurassic word');
$pilha->push('gato de botas');
$pilha->push('e beber nao case');
echo $pilha->isEmpty();
echo "\n\n\n\ ";
echo $pilha->peek();
echo "\n\n ";
echo $pilha->pop();




?>