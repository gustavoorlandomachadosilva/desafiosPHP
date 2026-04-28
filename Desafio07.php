<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function calculaAreaDoQuadrado($valor){
        $area = $valor * $valor;
        return $area;
        }

        $lado = (float)readline("Digite o Lado do quadrado: \n");
        echo("A area do quadrado é: ".calculaAreaDoQuadrado($lado));
        ?>
    </body>
</html>
