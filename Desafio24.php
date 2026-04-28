<?php

$palavra = readline("Palavra: "); 
$palavraNova = str_replace(' ', '', $palavra);

if (!empty($palavra)) {
    echo("caracteres: ".mb_strlen($palavraNova));
}
else{
    echo("Digite uma Palavra");
    return;
}


