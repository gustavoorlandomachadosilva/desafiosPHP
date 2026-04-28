<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Manipule datas: obtenha a data atual e imprima-a no formato "dia/mês/ano". 
        date_default_timezone_set('America/Recife');
        $format = 'd/m/y';
        echo("A data de hoje é: ".date($format));
        ?>
    </body>
</html>
