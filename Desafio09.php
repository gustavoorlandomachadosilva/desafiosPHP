<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $valor1 = (int) readline("Digite o primeiro numero: \n");
        $valor2 = (int) readline("Digite o segundo numero: \n");
        $valor3 = (int) readline("Digite o terceiro numero: \n");

        $media = ($valor1 + $valor2 + $valor3) / 3; 
        $mediaformatada = number_format($media, 2, '.', '');
        echo("A media é: ".$mediaformatada);
        ?>
    </body>
</html>
