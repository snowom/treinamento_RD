<?php

    require_once('classes/Documento.php'); //Classe Mãe
    require_once('classes/RG.php'); // Classe Filha
    require_once('classes/Pessoa.php'); // Classe de Associacao com a classe filha


    /* OBJETO SEM HERANÇA */
    $pessoa1 = new Pessoa('Thomaz Ferreira', '246.370.289-30', 'Heleonora Silva', 'José Augusto', 'Brasileiro');

    /* OBJETO COM HERANÇA DE DOUMENTO */
    $rg1 = new RG('04/03/2015', '49.784.205-1', 'SSP', 'INDETERMINADO');

    /* ASSOCIAÇAO */
    $pessoa1->setDocumento($rg1);


    echo '<b>Nome do portador: </b>' . $pessoa1->getNome(). '<br>';
    echo '<b>Numero do documento: </b>' . $pessoa1->getDocumento()->getSequencial() . '<br>';
    echo '<b>Data de expedição: </b>' . $rg1->getDataExpedicao() . '<br>';
    echo '<b>CPF do portador: </b>' . $pessoa1->getCPF() . '<br>';
    echo '<b>Nome da mãe: </b>' . $pessoa1->getNomeMae() . '<br>';
    echo '<b>Nome do pai: </b>' . $pessoa1->getNomePai() . '<br>';
    echo '<b>Naturalidade: </b>' . $pessoa1->getNaturalidade() . '<br>';
    echo '<b>Órgão Expeditor: </b>' . $rg1->getOrgaoExpeditor() . '<br>';
    echo '<b>Validade do documento: </b>' . $rg1->getDataValidade() . '<br>';

?>