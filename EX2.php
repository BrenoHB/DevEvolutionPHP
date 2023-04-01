<?php

class banco{
    private $saldo;

    public function __construct($valor){
        $this->saldo = $valor;
    }

    public function GetSaldo(){
        return $this->saldo;
    }
    public function Sacar($valor){
        if($this->saldo>=$valor){
        $this->saldo -= $valor;
        return $this->saldo;
        }else{
            return -1;
        }
    }
    public function Depositar($valor){
        $this->saldo += $valor;
        return $this->saldo;
    }
}

$conta = new banco(1200);

$saldo= $conta->GetSaldo();
echo $saldo."\n";

$saque = $conta->sacar(1300);
if($saque>=-1){
    echo "impossivel sacar, saldo insuficiente\n";
}else{
echo "saque de 1300 negado\n";
}

$deposito = $conta->Depositar(20000);
echo $deposito."\n";

$saque = $conta->sacar(1300);
if($saque>=-1){
    echo "impossivel sacar, saldo insuficiente\n";
}else{
echo "saque de 1300 negado\n";
}




?>