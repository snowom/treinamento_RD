<?php

    function decToBin($num){
        
        $cont=0;
        $arrayBin = [];
        
        //CONTA QTD CASAS NUM BINARIO
        while(pow(2, $cont) < $num){
            $cont++;
        }

        //Verifica se o BIT é 1 ou 0 e popula Array
        for($i=$cont; $i>=0; $i--){

            if(pow(2, $i) <= $num){
                $arrayBin[] = '1';
                $num -= pow(2, $i);
            }
            else{
                $arrayBin[] = '0';
            }
        }

        //CONVERTE ARRAY EM STRING UNICA
        $resultado = implode("",$arrayBin);

        //RETORNA STRING UNICA COM RESULTADO FINAL
        return $resultado;
    }


    /* function binToDec($num){

        $arrayNum = str_split($num);
        $numConvertido = 0;

        for($i=count($arrayNum); $i>0; $i--){
            
            if($arrayNum[$i] == '1'){
                $numConvertido += 2**$i;
            }
        }

        echo $numConvertido;
    } */

    echo decToBin(39431);
?>