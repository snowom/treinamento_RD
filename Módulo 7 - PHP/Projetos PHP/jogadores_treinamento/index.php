<?php

require_once 'classes/JogadorDeFutebol.php';
require_once 'classes/SessaoDeTreinamento.php';

$j1 = new JogadorDeFutebol('Ronaldo', '70', '80', 0, 90);
print_r($j1);
echo '<br><br><br>';
$st1 = new SessaoDeTreinamento();
$st1->treinarA($j1);
echo '<br><br><br>';
print_r($j1);

?>