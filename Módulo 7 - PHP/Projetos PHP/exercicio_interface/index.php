<?php

require_once('interface/Voador.php');
require_once('classes/Aviao.php');
require_once('classes/Pato.php');
require_once('classes/SuperHomem.php');
require_once('classes/TorreDeControle.php');


$torre = new TorreDeControle();

$aviao1 = new Aviao();
$pato1 = new Pato(7);
$sp1 = new SuperHomem();

$torre->adicionarVoador($aviao1);
$torre->adicionarVoador($pato1);
$torre->adicionarVoador($sp1);

$torre->voemTodos();

echo '<br>';
echo '<br>';

echo '<b>Horas de voo total após voo: </b>'.$aviao1->getHrsVoo().' horas <br>';
echo '<b>Energia total do pato após voo: </b>'.$pato1->getEnergia().' energia<br>';
echo '<b>Experiência total do Super Homem após o voo: </b>'.$sp1->getExperiencia().' XP<br>';
echo '<br>';
echo '<hr>';

?>