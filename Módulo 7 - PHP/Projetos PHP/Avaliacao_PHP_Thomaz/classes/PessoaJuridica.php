<?php

class PessoaJuridica extends Pessoa
{
    private $CNJP;
    private $nomeFantasia;
    private $porteEmpresa;
    private $endereco;
    
    
    public function __construct($nome, $CNJP, $nomeFantasia, $porteEmpresa, $endereco)
    {
        parent::__construct($nome);
        $this->CNJP = $CNJP;
        $this->nomeFantasia = $nomeFantasia;
        $this->porteEmpresa = $porteEmpresa;
        $this->endereco = $endereco;
    }

    
    public function getCNJP()
    {
        return $this->CNJP;
    }

    public function setCNJP($CNJP)
    {
        $this->CNJP = $CNJP;
    }


    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;
    }

 
    public function getPorteEmpresa()
    {
        return $this->porteEmpresa;
    }
 
    public function setPorteEmpresa($porteEmpresa)
    {
        $this->porteEmpresa = $porteEmpresa;
    }


    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
}

?>