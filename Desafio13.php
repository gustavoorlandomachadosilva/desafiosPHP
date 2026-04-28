<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numeros = [];
        
        for ($i = 0; $i < 5; $i++) {
            $numeros[] = rand(1, 100);         
        }
        
        print_r($numeros);
        print("Maior Valor: ".max($numeros));
        ?>
    </body>
</html>
