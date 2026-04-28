<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function retornaQtdCaracteres($palavra){
        $qtdPalavra = strlen($palavra);
        return $qtdPalavra;
        }

        $palavra = readline("Digite a palavra: \n");
        echo("Numero de Caracteres: ".retornaQtdCaracteres($palavra));
        ?>
    </body>
</html>
