<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $pessoa = array(
            "nome" => "Gustavo",
            "idade" => "26",
            "cidade" => "Recife",
            "rua" => "Raimundo da Mota"
        );
        foreach ($pessoa as $key => $dados) {
          echo($key." : ".$dados."<br>");
        }
        
        ?>
    </body>
</html>

