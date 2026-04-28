<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $frase = "Hello Word";
        $palavras = explode(" ", $frase);

        foreach ($palavras as $palavra) {
            echo($palavra . PHP_EOL);
        }   
        ?>
    </body>
</html>
