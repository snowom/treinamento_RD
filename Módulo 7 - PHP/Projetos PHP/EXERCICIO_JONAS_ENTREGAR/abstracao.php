<?php

    require_once('classes/Documento.php');
    require_once('classes/Pessoa.php');
    require_once('classes/RG.php');
    require_once('classes/TituloEleitor.php');

    /* OBJETO COM HERANÇA DE DOUMENTO */
    $rg1 = new RG('01/02/2003', '1234567-8', 'SSP', 'INDETERMINADO');

    /* OBJETO SEM HERANÇA */
    $pessoa1 = new Pessoa('Thomaz Ferreira', '246.370.289-30', 'Heleonora Silva', 'José Augusto', 'Brasileiro');

    /* OBJETO COM HERANÇA DE DOUMENTO */
    $te1 = new TituloEleitor('14/03/2005', '19281-4', 'SSP', 'INDETERMINADO', '224', '045');



    echo '<b>Nome do portador: </b>' . $pessoa1->getNome() . '<br>';
    echo '<b>Numero do documento: </b>' . $rg1->getSequencial() . '<br>';
    echo '<b>Data de Expedição: </b>' . $rg1->getDataExpedicao() . '<br>';
    echo '<b>CPF do portador: </b>' . $pessoa1->getCPF() . '<br>';
    echo '<b>Nome da mãe: </b>' . $pessoa1->getNomeMae() . '<br>';
    echo '<b>Nome do pai: </b>' . $pessoa1->getNomePai() . '<br>';
    echo '<b>Naturalidade: </b>' . $pessoa1->getNaturalidade() . '<br>';
    echo '<b>Órgão Expeditor: </b>' . $rg1->getOrgaoExpeditor() . '<br>';
    echo '<b>Validade do documento: </b>' . $rg1->getDataValidade() . '<br>';
    echo '<br><br><br>';

    //IMPLEMENTAÇÃO DO METODO ABSTRATO
    echo $rg1->identificaPessoa() . '<br>';
    echo $te1->identificaPessoa();

?>