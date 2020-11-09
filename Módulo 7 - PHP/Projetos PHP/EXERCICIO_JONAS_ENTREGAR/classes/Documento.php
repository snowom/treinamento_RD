<?php
    abstract class Documento
    {
        protected $dataExpedicao;
        protected $sequencial;
        protected $orgaoExpeditor;
        protected $dataValidade;

        public function __construct($dataExpedicao, $sequencial, $orgaoExpeditor, $dataValidade)
        {
            $this->dataExpedicao = $dataExpedicao;
            $this->sequencial = $sequencial;
            $this->orgaoExpeditor = $orgaoExpeditor;
            $this->dataValidade = $dataValidade;
        }


        abstract public function identificaPessoa();
    }
?>