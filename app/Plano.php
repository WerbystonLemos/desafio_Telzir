<?php
class Plano
{ 
    
    private $origem;
    private $destino;
    private $tempo;
    private $tipoPlano;

    public function getVlrPlano($origem, $destino, $tempo, $planoFaleMais)
    {
        return json_encode($this->planoFaleMais($origem, $destino, $tempo, $planoFaleMais));
    }

    public function planoFaleMais($origem, $destino, $tempo, $plano)
    {
        $comPlano;
        $semPlano;

        $tarifa = $this->getTarifa($origem, $destino);

        if ( $tempo <= $plano )
        {
            $comPlano = 0;
            $semPlano = $tempo * $tarifa;
        }
        else
        {
            $comPlano = ($tempo - $plano) * $tarifa + ( 0.1 * (($tempo - $plano) * $tarifa));
            $semPlano = $tempo * $tarifa;
        }

        $res = [ 
                "comPlano"  => $comPlano,
                "semPlano"  => $semPlano,
                "origem"    => $origem,
                "destino"   => $destino,
                "tempo"     => $tempo,
                "plano"     => $plano
            ];

        return $res;
    }

    public function getTarifa($origem, $destino)
    {
        $tdsTarifas = [
            [11, 16, 1.90 ],
            [16, 11, 2.90 ],
            [11, 17, 1.70 ],
            [17, 11, 2.70 ],
            [11, 18, 0.90 ],
            [18, 11, 1.90 ]
        ];

        foreach ($tdsTarifas as $key => $tarifas)
        {
            if ($tarifas[0] == $origem && $tarifas[1] == $destino)
            {
                return $tarifas[2];
            }
        }
    }

    public function getPlanos()
    {
        return [30,60,120];
    }

}