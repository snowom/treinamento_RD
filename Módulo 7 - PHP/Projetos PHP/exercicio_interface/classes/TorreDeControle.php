<?php

class TorreDeControle
{

    private $voadores;

    public function voemTodos()
    {
        if($this->voadores != null){
            
            foreach($this->voadores as $voador){
                $voador->voar();
            }
            return;
        }

        echo 'Não existem voadores adicionados ainda!';
    }

    public function adicionarVoador(Voador $umVoador)
    {
        $this->voadores[] = $umVoador;
    }
}

?>