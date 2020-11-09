<?php

class JogadorDeFutebol
{
    private $nome;
    private $energia;
    private $alegria;
    private $gols;
    private $experiencia;


    public function __construct($nome, $energia, $alegria, $gols, $experiencia)
    {
        $this->nome = $nome;
        $this->energia = $energia;
        $this->alegria = $alegria;
        $this->gols = $gols;
        $this->experiencia = $experiencia;
    }


    public function fazerGol()
    {
        $this->energia -= 5;
        $this->alegria += 10;
        $this->gols++;
        echo 'GOOOOL!' . '<br>';
    }


    public function correr()
    {
        $this->energia -= 10;
        echo 'Cansei' . '<br>';
    }


    public function getExperiencia()
    {
        return $this->experiencia;
    }

    public function setExperiencia($experiencia)
    {
        $this->experiencia = $experiencia;
    }

}

?>