<?php
require_once('classes/Conta.php');
require_once('classes/ContaPoupanca.php');
require_once('classes/ContaCorrente.php');

$cp = new ContaPoupanca(1234, 4321, 5000);
echo $cp->getInfo();
echo '<br>';
$cp->retirar(500);
echo '<br>';
print_r($cp);
echo '<br><br>';

$cc = new ContaCorrente(4567, 7654, 10000, 1000);
print_r($cc);