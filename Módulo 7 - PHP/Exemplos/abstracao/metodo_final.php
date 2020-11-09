<?php
require_once('classes/Conta.php');
require_once('classes/ContaCorrente.php');

class ContaCorrenteEspecial extends ContaCorrente 
{

    //metodos finais não podem ser sobreescritos

    public function retirar($quantia)
    {
        $this->saldo -= $quantia;
    }
}
