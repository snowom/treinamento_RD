<?php

class Documento implements Imprimivel
{
    private $nome;
    private $tipo;

    public function __construct($nome, $tipo)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
    }

    public function imprimir()
    {
        echo 'Eu, <b>'.$this->nome .'</b>, do tipo <b>'.$this->tipo. '</b>, sou um documento do Word'.'<br>';
    }
}

?>