<?php

require_once 'classes/Cliente.php';
require_once 'classes/Conta.php';

$cliente1 = new Cliente('Thomaz', 'Ferreira');
$cliente2 = new Cliente('Victor', 'Belo');

$conta1 = new Conta('1234', 3000, $cliente1);
$conta2 = new Conta('5678', 3500, $cliente2);

$conta1->sacar(2000);
$conta1->depositar(200);


$conta2->sacar(3501);
$conta2->depositar(800);

?>