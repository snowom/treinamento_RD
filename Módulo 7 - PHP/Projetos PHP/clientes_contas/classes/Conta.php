<?php

class Conta
{
    private $numero;
    private $saldo;
    private $titular;

    
    public function __construct($numero, $saldo, Cliente $titular)
    {
        $this->numero = $numero;
        $this->saldo = $saldo;
        $this->titular = $titular;
    }


    public function depositar($valorDeposito)
    {
        $this->saldo += $valorDeposito;
        echo 'Depósito realizado com sucesso!<br>';
        echo 'Saldo atual: ' . $this->getSaldo() . ' R$<br><br>';
    }


    public function sacar($valorSaque)
    {
        if($this->saldo>=$valorSaque){
            $this->setSaldo($this->saldo-$valorSaque);
            echo 'Saque realizado com sucesso!<br>';
            echo 'Saldo atual: ' . $this->getSaldo() . ' R$<br><br>';
            return;
        }

        echo 'Falha ao realizar saque. Saldo insuficiente!<br><br>';
    }


    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }


    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }


    public function getTitular()
    {
        return $this->titular;
    }

    public function setTitular(Cliente $titular)
    {
        $this->titular = $titular;
    }
}

?>