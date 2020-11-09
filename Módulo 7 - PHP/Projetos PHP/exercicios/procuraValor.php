<?php
    
    function excluiElemento($array, $elemento){
        static $novoArray = [];

        foreach($array as $chave => $valor){
            if($valor != $elemento){
                array_push($novoArray, $valor);
                /* $novoArray[$chave] = $valor; */
            }
        }
        print_r($novoArray);
    }

    $array = array('t1'=>'Teste1','t2'=>'Teste2','t3'=> 'Teste3', 't4'=>'Teste1');
    excluiElemento($array, 'Teste1');
?>