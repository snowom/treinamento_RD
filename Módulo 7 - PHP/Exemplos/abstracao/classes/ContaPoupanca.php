<?php
final class ContaPoupanca extends Conta
{
    
   public function retirar($quantia) 
   {
       if ($this->saldo >= $quantia) {
           $this->saldo -= $quantia;
           return true; //retirada permitida
       }

        return false; //retirada não permitida
   
   }
   
   public function getSaldo() 
   {
       return $this->saldo;
   }

}