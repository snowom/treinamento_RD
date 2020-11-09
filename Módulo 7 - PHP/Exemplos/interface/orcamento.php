<?php
require_once ('classes/Orcamento.php');
require_once ('classes/Orcavel.php');
require_once ('classes/Produto.php');
require_once ('classes/Servico.php');

$p1 = new Produto('Máquina de café', 10, 299);
$p2 = new Produto('Barbeador', 10, 170);
$p3 = new Produto('chocolate', 10, 5);

$s1 = new Servico('Corte de grama', 40);
$s2 = new Servico('Corte de cabelo', 20);
$s3 = new Servico('Limpeza do apto', 170);

$o1 = new Orcamento;

$o1->adiciona($p1, 1);
$o1->adiciona($p2, 1);
$o1->adiciona($p3, 3);
$o1->adiciona($s1, 1);
$o1->adiciona($s2, 1);
$o1->adiciona($s3, 1);

echo $o1->calculaTotal();