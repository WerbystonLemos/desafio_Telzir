<?php

require("./app/Plano.php");
require("./app/Cidade.php");

/**
 * retorna os cod das cidades em promocao
 */
function getCidades()
{
    $cidades    = new Cidade();
    $codCidades = [];

    foreach ($cidades->cidades as $idx => $cidade)
    {
        $codCidades[] = $cidade;
    }

    return json_encode($codCidades);
}

/**
 * retorna os planos existentes 
 * ate o momento
 */
function  getPlanos()
{
    $plano = new Plano();
    return json_encode( $plano->getPlanos() );
}

/**
 * retorna o valor do plano
 */
function getVlrPlano($plano = 18, $origem = 11, $destino = 200, $tempo = 120)
{
    $planoFaleMais = new Plano();
    $res = $planoFaleMais->getVlrPlano($plano, $origem, $destino, $tempo);
    return $res ;
}