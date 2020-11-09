<?php

class CPF extends Documento{

    /* ======== INICIO GETTERS E SETTERS ======== */

    public function setDataExpedicao($dataExpedicao)
    {
        $this->dataExpedicao = $dataExpedicao;
    }

    public function getDataExpedicao()
    {
        return $this->dataExpedicao;
    }


    public function setSequencial($sequencial)
    {
        $this->sequencial = $sequencial;
    }

    public function getSequencial()
    {
        return $this->sequencial;
    }


    public function setOrgaoExpeditor($orgaoExpeditor)
    {
        $this->orgaoExpeditor = $orgaoExpeditor;
    }

    public function getOrgaoExpeditor()
    {
        return $this->orgaoExpeditor;
    }
}

?>