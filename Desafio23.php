<?php
function calcularFatorial($numero) {
    if ($numero < 0) return;
    $fatorial = 1;
    for ($i = $numero; $i > 1; $i--) {
        $fatorial *= $i;
    }
    return $fatorial;
}

$numero = (int)readline("Digite um numero: \n");
echo calcularFatorial($numero);


