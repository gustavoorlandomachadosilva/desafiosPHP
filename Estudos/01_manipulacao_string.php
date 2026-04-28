<?php

//explode = transforma uma string em array 
$informacoes = "Recife/PE/Brasil";
$arrayInfo = explode('/',$informacoes);
var_dump($arrayInfo);

//implode = transforma um array em uma string
$texto = implode("\n",$arrayInfo);
echo($texto);


?>