<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*Primeira Forma que Pensei
        $array = [1,2,3,4,5];
        $tamanhoDoArray = count($array);

        for ($i = $tamanhoDoArray - 1; $i >= 0; $i--) {
            echo ($array[$i]."\n");
        }
        */
        
        //Forma mais Simplificada
        $array = [1,2,3,4,5];
        foreach (array_reverse($array) as $valores) {
            echo($valores."\n");
        }
        ?>
    </body>
</html>
