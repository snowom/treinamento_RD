<?php

class PessoaFisica extends Pessoa
{
    private $CPF;

    public function __construct($nome, $CPF)
    {
        parent::__construct($nome);

        $this->CPF = $CPF;
    }


    public function getCPF()
    {
        return $this->CPF;
    }
    public function setCPF($CPF)
    {
        $this->CPF = $CPF;
    }
}