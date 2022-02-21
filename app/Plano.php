<?php
class Plano
{ 
    
    private $origem;
    private $destino;
    private $tempo;
    private $tipoPlano;

    /*
    public construct($origem, $destino, $tempo, $tipoPlano)
    {
        this.origem     = $origem;
        this.destino    = $destino;
        this.tempo      = $tempo;
        this.tipoPlano  = $tipoPlano;
    }*/

    // public function validaAtributos(){};
    public function getVlrSemPlano()
    {
        echo "teste";
    }

    // public function getVlrComPlano(){};

    public function getPlanos()
    {
        return [30,60,120];
    }

}