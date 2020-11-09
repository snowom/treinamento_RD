<?php

class Aviao implements Voador
{
    private $hrsVoo;


    public function voar()
    {
        $this->hrsVoo += 13;
        echo 'Estou voando como um avião'.'<br>';
    }


    public function getHrsVoo()
    {
        return $this->hrsVoo;
    }
}

?>