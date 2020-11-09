<?php
require_once('classes/Conta.php');
require_once('classes/ContaPoupanca.php');
require_once('classes/ContaCorrente.php');

//Classe Abstrata nãp pode ser instanciada, porém pode ser herdada
$conta = new Conta(1234, 3455, 900);
$cp = new ContaPoupanca(1234, 3455, 900);
print_r($cp);
