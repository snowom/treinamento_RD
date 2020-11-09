<?php

require_once 'classes/Conta.php';
require_once 'classes/Cheque.php';
require_once 'classes/ContaCorrente.php';
require_once 'classes/ContaPoupanca.php';
require_once 'classes/Documento.php';
require_once 'classes/Cliente.php';
require_once 'classes/CPF.php';
require_once 'classes/RG.php';


//OBJETO CPF
$cpf1 = new CPF('02/02/2018', '123456789-45', 'SSP', 'INDETERMINDADO');

//OBJETO RG
$rg1 = new RG('01/01/2014', '24356925-5', 'SSP', '01/01/2018');

//OBJETO CONTA CORRENTE
$cc1 = new ContaCorrente('1234', '5678', 5000, 200);

//OBJETO CHEQUE
$ch1 = new Cheque('Santander', 1200, '07/08/2018');

//OBJETO CLIENTE COM ASSOCIACAO AO TIPO DE CONTA NO ULTIMO PARAMETRO DO CONSTRUTOR
$cliente1 = new Cliente('Ferreira', $rg1, $cpf1, $cc1);

//ASSOCIACAO CHEQUE COM CONTA CORRENTE
$cc1->depositarCheques($ch1);

//DEPOSITO
$cliente1->getConta()->depositar(200);

//SAQUE
$cliente1->getConta()->retirar(5100);

//ATUALIZAÇÃO DOS DADOS DA CONTA
$cliente1->setConta($cc1);

echo '<b><h3>Dados Cliente</h3></b>';
echo '<h4>Dados Cadastrais</h4>';
echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;ID cliente: </b>' . $cliente1->getNumeroCliente() . '<br>';
echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;Sobrenome: </b>' . $cliente1->getSobrenome() . '<br>';
echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;RG: </b>' . $cliente1->getRG()->getSequencial() . '<br>';
echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;CPF: </b>' . $cliente1->getCPF()->getSequencial() . '<br>';
echo '<h4>Dados Bancários</h4>';
echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;Numero da agência: </b>' . $cliente1->getConta()->getAgencia() . '<br>';
echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;Numero da conta: </b>' . $cliente1->getConta()->getConta() . '<br>';
echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;Saldo atual da conta: </b>' . $cliente1->getConta()->getSaldo() . ' R$<br>';
echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;Cheque Especial: </b>' . $cliente1->getConta()->getChequeEspecial() . ' R$<br>';
echo '<h4>Cheques</h4>';
echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;Banco Emissor: </b>' . $cliente1->getConta()->getCheques()->getBancoEmissor() . '<br>';
echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;Valor: </b>' . $cliente1->getConta()->getCheques()->getValor() . ' R$<br>';
echo '<b>&nbsp;&nbsp;&nbsp;&nbsp;Data de Pagamento: </b>' . $cliente1->getConta()->getCheques()->getDataPagamento() . '<br>';
//print_r($cc1->getCheques());

echo '<br><hr><br>';
?>