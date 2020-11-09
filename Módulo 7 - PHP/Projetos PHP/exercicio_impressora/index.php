<?php

    require_once 'classes/Imprimivel.php';
    require_once 'classes/Contrato.php';
    require_once 'classes/Documento.php';
    require_once 'classes/Foto.php';
    require_once 'classes/Impressora.php';



    $impressora = new Impressora();
    $c1 = new Contrato('CONTRATO 1', 'JPEG');
    $d1 = new Documento('DOCUMENTO 1', 'GIF');
    $f1 = new Foto('3x4', 'PNG');

    $impressora->adicionarImprimivel($c1);
    $impressora->adicionarImprimivel($d1);
    $impressora->adicionarImprimivel($f1);

    $impressora->imprimirTudo();

?>