<?php

class Pato implements Voador
{
    private $energia;


    public function __construct($energia)
    {
        $this->energia = $energia;
    }


    public function voar()
    {
        if($this->energia>=5){
            $this->energia -= 5;
            echo 'Estou voando como um pato'.'<br>';
            return;
        }

        echo 'Energia insuficiente para voar'.'<br>';
    }


    public function getEnergia()
    {
        return $this->energia;
    }
}

?>