<?php

class Cheque
{
    private $bancoEmissor;
    private $valor;
    private $dataPagamento;

    public function __construct($bancoEmissor, $valor, $dataPagamento)
    {
        $this->bancoEmissor = $bancoEmissor;
        $this->valor = $valor;
        $this->dataPagamento = $dataPagamento;
    }

    public function getBancoEmissor()
    {
        return $this->bancoEmissor;
    }

    public function setBancoEmissor($bancoEmissor)
    {
        $this->bancoEmissor = $bancoEmissor;

    }

    
    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }


    public function getDataPagamento()
    {
        return $this->dataPagamento;
    }

    public function setDataPagamento($dataPagamento)
    {
        $this->dataPagamento = $dataPagamento;
    }
}

?>