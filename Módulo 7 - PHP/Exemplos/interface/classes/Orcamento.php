<?php
class Orcamento
{
    private $itens;

    public function adiciona(Orcavel $item, int $qtde)
    {
        $this->itens[] = array($qtde, $item);
    }

    public function calculaTotal()
    {
        $total = 0;

        foreach ($this->itens as $item) {
            $total += ($item[0] * $item[1]->getPreco());
        }

        return $total;
    }
}