<?php
require("./app/Plano.php");
require("./app/Cidade.php");

$plano      = new Plano();

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