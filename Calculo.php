<?php
class Calculo 
{
    public $num1;
    public $num2;
    public $resultado;
    public function somar()
    {
        $this->resultado = $this->num1+$this->num2;
        return $this->resultado;
    }
    public function subtrair()
    {
        $this->resultado = $this->num1-$this->num2;
        return $this->resultado;
    }
}
// parei 1:38 Criando classes e objetos em PHP
?>