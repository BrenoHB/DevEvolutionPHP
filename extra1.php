<?php
class impressora{

    private $num;
    private $desc;
    private $quant;
    private $preço;



    public function __construct($num, $desc, $quant, $preço){

        $this->num = $num; 
        $this->desc = $desc;
        $this->quant = $quant;
        $this->preço = $preço;
    }
    public function GetTotal(){
        return $this->quant * $this->preço;
    }
    public function GetPreço(){
        return $this->preço;
    }
    public function GetQuant(){
        return $this->quant;
    }
    public function GetDesc(){
        return $this->desc;
    }
    public function GetNum(){
        return $this->num;
    }
    public function SetPreço($preço){
        $this->preço=$preço;
    }
    public function SetQuant($quant){
        $this->quant=$quant;
    }
    public function SetDesc($desc){
        $this->desc = $desc;;
    }
    public function SetNum($num){
        $this->num = $num;
    }
}


$HP = new impressora(3,'impressão minha', 8, 2400);


$HP->SetDesc('ulala');
$HP->SetNum(12);
$HP->SetPreço(2233);
$HP->SetQuant(30);

echo "\n".$HP->GetTotal();
echo "\n".$HP->GetPreço();
echo "\n".$HP->GetQuant();
echo "\n".$HP->GetDesc();
echo "\n".$HP->GetNum();



?>