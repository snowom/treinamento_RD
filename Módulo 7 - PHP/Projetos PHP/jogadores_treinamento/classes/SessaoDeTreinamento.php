<?php

class SessaoDeTreinamento
{

    public function treinarA(JogadorDeFutebol $jogador)
    {
        $jogador->correr();
        $jogador->fazerGol();
        $jogador->correr();

        echo 'Experiência antes do Treino: ' . $jogador->getExperiencia() . '<br>';
        $jogador->setExperiencia($jogador->getExperiencia() + 1);
        echo 'Experiência após o Treino: ' . $jogador->getExperiencia() . '<br>';

    }
}

?>