<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function verificaPalindromo($entrada){
            $array = str_split($entrada); 
            $arrayInvertido = array_reverse($array);

            // Conversão
            $arrayString = implode("", $array); 
            $arrayInvertidoString = implode("", $arrayInvertido); 

            if ($arrayString == $arrayInvertidoString) {
                echo("É palindromo");
            } else {
                echo("Não é palindromo");
            }
        }

        $entrada = strtolower(readline("Digite a palavra: \n"));
        verificaPalindromo($entrada);

        ?>
    </body>
</html>
