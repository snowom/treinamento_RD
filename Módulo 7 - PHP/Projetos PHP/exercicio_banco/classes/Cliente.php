<?php

class Cliente
{

    static $contador;
    private $numeroCliente; 
    private $sobrenome;
    private $RG;
    private $CPF;
    private $conta;

    public function __construct($sobrenome, $RG, $CPF, $conta)
    {
        self::$contador++;
        $this->numeroCliente = self::$contador;
        $this->sobrenome = $sobrenome;
        $this->RG = $RG;
        $this->CPF = $CPF;
        $this->conta = $conta;
    }


    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }


    public function getNumeroCliente()
    {
        return $this->numeroCliente;
    }


    public function getRG()
    {
        return $this->RG;
    }

    public function setRG(RG $RG)
    {
        $this->RG = $RG;
    }


    public function getCPF()
    {
        return $this->CPF;
    }

    public function setCPF(CPF $CPF)
    {
        $this->CPF = $CPF;
    }


    public function getConta()
    {
        return $this->conta;
    }

    public function setConta(Conta $conta)
    {
        $this->conta = $conta;
    }
}

?>