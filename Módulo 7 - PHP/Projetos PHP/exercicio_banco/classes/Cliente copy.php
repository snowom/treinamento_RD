<?php

class cliente 
{
    private static $contador;
    private $idCliente;
    private $conta;
    private $sobrenome;
    private $rg;
    private $cpf;
   

    public function __construct($sobrenome, $rg, $cpf)
    {
        self::$contador ++;
        $this->idCliente = self::$contador;
        $this->sobrenome = $sobrenome;
        $this->rg = $rg;
        $this->cpf = $cpf;
    }

    public function getIdCliente()
    {
        return $this->idCliente;
    }


    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
        
    }


    public function getSobrenome()
    {
        return $this->sobrenome;
    }


    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

  
    public function getRg()
    {
        return $this->rg;
    }

 
    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    public function getCpf()
    {
        return $this->cpf;
    }
 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function setConta($conta)
    {
        $this->conta = $conta;
    }
}