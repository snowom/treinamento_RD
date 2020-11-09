<?php

class Certidao extends Documento implements Emissivel
{
    private static $contador;
    protected $numeroRegistro;
    protected $pessoa;
    protected $nomeDeclarante;
    protected $tipoCertidao;
    protected $dataEmissao;
    protected $nomeTabeliao;
    protected $nomeCartorio;


    public function __construct($pessoa, $nomeDeclarante, $tipoCertidao, $dataEmissao, $dataRegistro, Tabeliao $nomeTabeliao, Cartorio $nomeCartorio)
    {
        self::$contador++;
        $this->numeroRegistro = self::$contador;
        $this->pessoa = $pessoa;
        $this->nomeDeclarante = $nomeDeclarante;
        $this->tipoCertidao = $tipoCertidao;
        $this->dataEmissao = $dataEmissao;
        $this->dataRegistro = $dataRegistro;
        $this->nomeTabeliao = $nomeTabeliao;
        $this->nomeCartorio = $nomeCartorio;
    }


    public function setPessoa($pessoa)
    {
        $this->pessoa = $pessoa;
    }

    public function getPessoa()
    {
        return $this->pessoa;
    }


    public function getNumeroRegistro()
    {
        return $this->numeroRegistro;
    }

 
    public function getNomeDeclarante()
    {
        return $this->nomeDeclarante;
    }

    public function setNomeDeclarante($nomeDeclarante)
    {
        $this->nomeDeclarante = $nomeDeclarante;
    }
    

    //IMPLEMENTANDO CLASSE DA INTERFACE EMITIVEL
    public function emitir()
    {
        echo 'Emitindo certidão';
    }
}

?>