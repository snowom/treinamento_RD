<?php

    final class TituloEleitor extends Documento
    {
        private $zona;
        private $sessao;


        public function __construct($dataExpedicao, $sequencial, $orgaoExpeditor, $dataValidade, $zona, $sessao)
        {
            parent::__construct($dataExpedicao, $sequencial, $orgaoExpeditor, $dataValidade);

            $this->zona = $zona;
            $this->sessao = $sessao;
        }


        public function getZona()
        {
            return $this->$zona;
        }

        public function setZona($zona)
        {
            $this->zona = $zona;
        }


        public function getSessao()
        {
            return $this->sessao;
        }

        public function setSessao($sessao)
        {
            $this->sessao = $sessao;
        }


        public function identificaPessoa()
        {
            echo 'Pessoa identificada com Titulo de Eleitor de numero '. $this->sequencial;
            echo ' de zona eleitoral '. $this->zona . ' e ' . 'sessão ' . $this->sessao;
        }
    } 
?>