<?php
require("./app/Plano.php");
require("./app/Cidade.php");

function getVlrComPlano(){}
function getVlrSomPlano(){}

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