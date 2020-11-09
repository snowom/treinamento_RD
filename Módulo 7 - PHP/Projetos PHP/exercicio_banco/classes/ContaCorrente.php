<?php

final class ContaCorrente extends Conta
{
    const LIMITE = 0.25;
    protected $chequeEspecial;
    private $cheques;

    public function __construct($agencia, $conta, $saldo, $chequeEspecial)
    {
        parent::__construct($agencia, $conta, $saldo);
        $this->chequeEspecial = $chequeEspecial;
    }


    public function depositar($quantia)
    {
        if ($quantia > 0) {
            $this->saldo += $quantia;
        }
    }

    public function retirar($quantia) 
    {
       
       if (($this->saldo + ($this->chequeEspecial * self::LIMITE)) >= $quantia) {

            if ($this->saldo - $quantia <= 0){
                $this->chequeEspecial += ($this->saldo - $quantia);
                $this->saldo = 0;
            }
            else{
                $this->saldo -= $quantia;
            }
            return true;
       }

       echo 'saldo insuficiente';
       return false; 
    }


    public function depositarCheques(Cheque $cheque)
    {
        $this->cheques[] = $cheque;
    }

    public function getCheques()
    {
        return $this->cheques[0];
    }


    public function getChequeEspecial()
    {
        return $this->chequeEspecial;
    }


}
