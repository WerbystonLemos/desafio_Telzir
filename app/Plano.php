<?php
class Plano
{ 
    
    private $origem;
    private $destino;
    private $tempo;
    private $tipoPlano;

    public function getVlrPlano($origem, $destino, $tempo, $planoFaleMais)
    {

        switch ( $planoFaleMais )
        {
            case '30':
                echo json_encode($this->planoFaleMais30($origem, $destino, $tempo));
            break;

            case '60':
                echo json_encode($this->planoFaleMais60($origem, $destino, $tempo));
            break;

            case '120':
                echo json_encode($this->planoFaleMais120($origem, $destino, $tempo));
            break;
            
        }
    }

    public function planoFaleMais30($origem, $destino, $tempo)
    {
        $comPlano;
        $semPlano;

        $tarifa = $this->getTarifa($origem, $destino);

        if ( $tempo <= 30 )
        {
            $comPlano = 0;
            $semPlano = $tempo * $tarifa;
        }
        else
        {
            $comPlano = ($tempo - 30) * $tarifa + ( 0.1 * (($tempo - 30) * $tarifa));
            $semPlano = $tempo * $tarifa;
        }

        $res = [ 
                "comPlano"  => $comPlano,
                "semPlano"  => $semPlano,
                "origem"    => $origem,
                "destino"   => $destino,
                "tempo"     => $tempo,
                "plano"     => 30
            ];

        return $res;
    }

    public function planoFaleMais60($origem, $destino, $tempo)
    {
        $comPlano;
        $semPlano;

        $tarifa = $this->getTarifa($origem, $destino);

        if ( $tempo <= 60 )
        {
            $comPlano = 0;
            $semPlano = $tempo * $tarifa;
        }
        else
        {
            $comPlano = ($tempo - 60) * $tarifa + ( 0.1 * (($tempo - 60) * $tarifa));
            // $comPlano = ($tempo - 60) * $tarifa;
            $semPlano = $tempo * $tarifa;
        }

        $res = [ 
            "comPlano"  => $comPlano,
            "semPlano"  => $semPlano,
            "origem"    => $origem,
            "destino"   => $destino,
            "tempo"     => $tempo,
            "plano"     => 60
        ];

        return $res;
    }

    public function planoFaleMais120($origem, $destino, $tempo)
    {
        $comPlano;
        $semPlano;

        $tarifa = $this->getTarifa($origem, $destino);

        if ( $tempo <= 120 )
        {
            $comPlano = 0;
            $semPlano = $tempo * $tarifa;
        }
        else
        {
            $comPlano = ($tempo - 120) * $tarifa + ( 0.1 * (($tempo - 120) * $tarifa));
            // $comPlano = ($tempo - 120) * $tarifa;
            $semPlano = $tempo * $tarifa;
        }

        $res = [ 
            "comPlano"  => $comPlano,
            "semPlano"  => $semPlano,
            "origem"    => $origem,
            "destino"   => $destino,
            "tempo"     => $tempo,
            "plano"     => 120
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