<?php

class Contrato extends Documento implements Emissivel
{
    private static $contador;
    protected $numeroRegistro;
    protected $nomePartesEnvolvidas = [];
    protected $nomeTestemunhas = [];
    protected $nomeTabeliao;
    protected $nomeCartorio;
    protected $objDeContrato;


    public function __construct($nomeTestemunhas, $dataEmissao, Tabeliao $nomeTabeliao,  Cartorio $nomeCartorio, $objDeContrato)
    {

        self::$contador++;
        $this->numeroRegistro = self::$contador;

        $this->nomeTestemunhas [] = $nomeTestemunhas;
        $this->dataEmissao = $dataEmissao;
        $this->nomeTabeliao = $nomeTabeliao;
        $this->nomeCartorio = $nomeCartorio;
        $this->objDeContrato = $objDeContrato;
    }


    public function setPartesEnvolvidas($pessoa)
    {
        $this->nomePartesEnvolvidas [] = $pessoa;
    }

    public function getPartesEnvolvidas()
    {
        echo '<b>Partes Envolvidas no Contrato</b><br><br>';
        
        if($this->nomePartesEnvolvidas == null){
            echo 'Não existem partes envolvidas cadastradas nesse contrato!';
            return;
        }

        foreach($this->nomePartesEnvolvidas as $parteEnvolvida){
            echo $parteEnvolvida->getNome() . '<br>';
        }
    }


    public function setTestemunha(PessoaFisica $p1)
    {
        $this->nomeTestemunhas[] = $p1;
    }

    public function getTestemunha()
    {
        if($this->nomeTestemunhas == null){
            echo 'Não existem testemunhas cadastradas nesse contrato!';
            return;
        }

        foreach($this->nomeTestemunhas as $testemunha){
        
            echo $testemunha->getNome();
        }
    }


    public function getNumeroRegistro()
    {
        return $this->numeroRegistro;
    }


    //IMPLEMENTANDO CLASSE DA INTERFACE EMITIVEL
    public function emitir()
    {
        echo 'Emitindo contrato';
    }
}

?>