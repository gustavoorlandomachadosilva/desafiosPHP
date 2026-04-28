<?php

$nome = 'Gustavo';
$sobrenome = 'Orlando';
$idade = 26;

//poderíamos criar assim
/*$dados = [
    $nome,
    $sobrenome,
    $idade
];*/

//ou simplesmente usar a função compact
$dados = compact('nome','sobrenome','idade');
var_dump($dados);