<?php
//Ordenação de Arrays
$animais = [
    0 => 'Macaco', 
    1 => 'Zebra', 
    2 => 'Arara', 
    3 => 'Coelho',
];

//Ordena decrescentemente sem organizar indices
arsort($animais);
print_r($animais);
//Ordena Crescentemente sem organizar indices
asort($animais);
print_r($animais);
//Ordena Crescentemente e organiza os indices também 
sort($animais);
print_r($animais);