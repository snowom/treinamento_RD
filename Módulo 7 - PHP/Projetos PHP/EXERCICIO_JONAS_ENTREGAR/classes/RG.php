<?php

    final class RG extends Documento
    {

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

        public function getDataValidade()
        {
            return $this->dataValidade;
        }

        public function setDataValidade($dataValidade)
        {
            $this->dataValidade = $dataValidade;
        }

        /* ======== FINAL GETTERS E SETTERS ======== */


        public function mudarNomePessoa($novoNome, $idadeAtual)
        {
            if($idadeAtual>=18){
                $this->nomePessoa = $novoNome;
            }
        }


        public function mudarNomeMae($novoNomeMae, $idadeAtual)
        {
            if($idadeAtual>=18){
                $this->nomeMae = $novoNomeMae;
            }
        }


        public function excluirFiliacao(int $opc, $idadeAtual)
        {

            if($idadeAtual>=18){
                if($opc==1){
                    $this -> nomePai = ''; 
                }
                else if($opc==2){
                    $this -> nomeMae = '';
                }
            }
        }


        public function identificaPessoa()
        {
            echo 'Pessoa identificada com RG de numero '. $this->sequencial;
        }
    }
    
?>