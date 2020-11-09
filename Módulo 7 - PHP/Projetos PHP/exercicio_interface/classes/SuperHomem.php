<?php

class SuperHomem implements Voador
{
    private $experiencia;


    public function voar()
    {
        $this->experiencia += 3;
        echo 'Estou voando como um campeão'.'<br>';
    }

    public function getExperiencia()
    {
        return $this->experiencia;
    }
}

?>