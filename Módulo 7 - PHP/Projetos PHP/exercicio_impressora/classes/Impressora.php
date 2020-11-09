<?php

class Impressora
{
    private $imprimiveis;

    public function imprimirTudo()
    {
        foreach($this->imprimiveis as $imprimivel){
            $imprimivel->imprimir();
        }
    }

    public function adicionarImprimivel(Imprimivel $umImprimivel)
    {
        $this->imprimiveis[] = $umImprimivel;
    }

    public function getImprimiveis()
    {
        return $this->imprimiveis;
    }
}

?>