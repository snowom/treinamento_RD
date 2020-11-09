<?php
    $rg = ["nome" => "Thomaz", 
    "data_expedicao" => "01/01/2009", 
    "CPF" => "000.000.000-00",
    "nome_mae" => "NOME DA MAE",
    "nome_pai" => "NOME DO PAI",
    "naturalidade" => "São Paulo"];


    $livros = [
        "titulo" => array('qtd_palavras' => '4', 'qtd_letras' => '50'),
        "descricao" => array('qtd_palavras' => '5', 'qtd_letras' => '200'),
        "sumarioPags" => array('resumo' => '2', 'introducao' => '4', 'capitulo_1' => '7'),
        "autor" => array('nome_autor' => 'AUTOR', 'idade_autor' => '37', 'nacionalidade' => 'Americano')
    ];


    foreach($livros as $indice => $livro){
        echo "Detalhes do $indice: <br><br>";
        foreach($livro as $chave => $valor){
            echo "$chave: $valor <br>";
        }

        echo "<hr>";
    }

    print_r($livro);
    print_r($rg);

?>