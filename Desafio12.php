<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $frase = "O mundo é o melhor mundo"; 
        if (str_contains($frase, "mundo")) {
            echo "Palavra encontrada!\n";
            $substituicao = str_replace('mundo','fui trocado',$frase);
            echo("Nova Frase: ".$substituicao);
        }
        ?>
    </body>
</html>
