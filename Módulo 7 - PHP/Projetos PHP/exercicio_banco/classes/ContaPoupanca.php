<?php
class ContaPoupanca extends Conta
{
    protected $juros;

    public function __construct($agencia, $conta, $saldo, $juros)
   {
       parent::__construct($agencia, $conta, $saldo);
       $this->juros = $juros;
   }

   public function juros($juros)
    {
        $this->saldo += $this->saldo * ($juros / 100);
        
    }

    Public function retirar($quantia)
    {
        $this->saldo -= $quantia;
    }

}