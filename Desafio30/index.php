<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $arquivo = "dados.txt";
            if(file_exists($arquivo)){
                echo("Leitura feita com Sucesso! <br>");
                echo("<pre>");
                echo(file_get_contents($arquivo));
            }
            else{
                echo("Arquivo Inexistente");
                file_put_contents('novo arquivo gerado',$arquivo);
            }
        ?>
    </body>
</html>
