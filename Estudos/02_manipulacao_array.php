<?php
$array = ['Carro', 'Moto', 'Bicicleta']; 

//remove o ultimo elemento 
array_pop($array);
print_r($array);
//remove o primeiro
array_shift($array);
print_r($array);

//adiciona no final 
array_push($array,'Bicicleta');
//adiciona no inicio
array_unshift($array,'Carro');
print_r($array);

//remove por indice
unset($array[1]);
print_r($array);

//remove repetidos 
array_push($array,'Bicicleta');
print_r($array);
$resultado = array_unique($array);
print_r($resultado);