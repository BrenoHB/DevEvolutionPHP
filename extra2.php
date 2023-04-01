<?php
class funcionario{
    private $pnome;
    private $unome;
    private $salario;


    public function __construct($pnome, $unome, $salario){
        $this->pnome = $pnome;
        $this->unome = $unome;
        $this->salario= $salario;

    }
    public function SetPnome($pnome){
        $this->pnome=$pnome;
    }
    public function SetUnome($unome){
        $this->unome=$unome;
    }
    public function SetSalario($salario){
        $this->salario = $salario;
    }
    public function GetPnome(){
        return $this->pnome;
    }
    public function GetUnome($unome){
        return $this->unome;
    }
    $public function GetSalario(){
        return $this->salario;
    }


}
$pessoa = new funcionario('alex', 'nogueira', 2300);

$pessoa->




?>