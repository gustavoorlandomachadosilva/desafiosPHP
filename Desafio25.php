<?php

function FahParaCelsius($F){
    //C = (F - 32) / 1.8;
    $C = ($F - 32) / 1.8;
    echo("Valor Convertido: ".$C);
}
function CelsiusParaFah($C){
    //F = C x 1.8 + 32;
    $F = $C * 1.8 + 32;
    echo("Valor Convertido: ".$F);
}

$opcao = readline("Digite 1 para converter de Celsius para Fahrenheit \n
                   Digite 2 para converter de Fahrenheit para Celsius \n :");

switch ($opcao) {
    case 1:
        $C = (float)readline("Digite valor em Celsius: \n");
        CelsiusParaFah($C);
        break;
    
    case 2:
        $F = (float)readline("Digite valor em Fahrenheit: \n");
        FahParaCelsius($F);
        break;
}
