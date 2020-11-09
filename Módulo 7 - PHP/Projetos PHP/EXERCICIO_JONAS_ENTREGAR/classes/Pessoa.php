<?php

class Pessoa
{
    private $nome;
    private $cpf;
    private $nomeMae;
    private $nomePai;
    private $naturalidade;
    private $documento;


    public function __construct($nome, $cpf, $nomeMae, $nomePai, $naturalidade)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->nomeMae = $nomeMae;
        $this->nomePai = $nomePai;
        $this->naturalidade = $naturalidade;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCPF()
    {
        return $this->cpf;
    }

    public function getNomeMae()
    {
        return $this->nomeMae;
    }

    public function getNomePai()
    {
        return $this->nomePai;
    }

    public function getNaturalidade()
    {
        return $this->naturalidade;
    }

    public function setDocumento(RG $rg)
    {
        $this->documento = $rg;
    }

    public function getDocumento()
    {
        return $this->documento;
    }
}

?>