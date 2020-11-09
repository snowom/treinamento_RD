<?php

abstract class Documento
{
    protected $dataEmissao;
    protected $dataRegistro;


    //METODO FINAL DE DOCUMENTOS PARA REGISTRAR CONTRATO E CERTIDOES DA MESMA FORMA
    final public function registrarDocumento($documento, Tabeliao $nomeTabeliao, Cartorio $cartorio)
    {
        echo 'Documento registrado igualmente para todos';
    }
    
    public function getDataEmissao()
    {
        return $this->dataEmissao;
    } 

    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;
    }

 
    public function getDataRegistro()
    {
        return $this->dataRegistro;
    }
 
    public function setDataRegistro($dataRegistro)
    {
        $this->dataRegistro = $dataRegistro;
    }
}

?>