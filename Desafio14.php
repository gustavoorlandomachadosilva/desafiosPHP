<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function retornaMedia($array){
            $tamanho = count($array);
            $soma = 0;
            foreach ($array as $numeros) {
                $soma = $soma + $numeros;
            }
            $media = $soma / $tamanho;
            return $media;
        }

        $array = array(10,5);
        echo("A media é: ".retornaMedia($array));

        ?>
    </body>
</html>
