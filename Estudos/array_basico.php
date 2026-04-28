<?php
/*Primeira Forma
$nomes = array('José','Pedro','Augusto');
var_dump($nomes);
//Segunda Forma
$nomes = ['José','Pedro','Augusto'];
var_dump($nomes);*/

/*Array Composto 
$pessoas = [
    //Indice => Valor
    'nome' => 'José',
    'sobrenome' => 'Alvarez',
    'idade' => 30,
];
$pessoas['nome'] = 'Ricardo';

var_dump($pessoas['nome']);*/

//Array Multidimensional
$carros = [
    'fiat' => [
            'rodas' => 4,
            'modelo' => 'Uno',
            'ano' => 2005,
        ],
    'gol' => [
            'rodas' => 4,
            'modelo' => 'g5',
            'ano' => 2010,
        ] 
];

var_dump($carros['fiat']['ano']);



