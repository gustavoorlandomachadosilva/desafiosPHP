<?php

for ($multiplicando = 1; $multiplicando <= 10; $multiplicando++) {
    echo("tabuada do {$multiplicando} \n");
   for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {
        $tabuada = $multiplicando * $multiplicador;
        echo("{$multiplicando} * {$multiplicador} = {$tabuada} \n");
   }
}
