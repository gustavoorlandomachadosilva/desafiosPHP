<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function verificaPalindromo($palavra){
        $palavraRevertida = strrev($palavra);
            if ($palavra == $palavraRevertida) {
                echo("É palindromo");
            }
            else{
                echo("Não é palindromo");
            }
        }

        $palavra = strtolower(readline("Digite a palavra: \n"));
        verificaPalindromo($palavra);
        ?>
    </body>
</html>

