<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function retornaValor($numero){
            if ($numero > 0) {
                echo("O numero é positivo");
            }
            if($numero < 0){
                echo("O numero é negativo");
            }
            if($numero == 0){
                echo("numero igual a zero");
            }
        }

        $numero = (int) readline("Digite o numero: \n");
        retornaValor($numero);

        ?>
    </body>
</html>
