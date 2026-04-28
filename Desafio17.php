<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
        $array = array(1,2,3,4,5);
        $valor = (int) readline("Digite o valor a ser pesquisado: \n");
        $pesquisa = array_search($valor,$array);


         if(($pesquisa = array_search($valor, $array)) == NULL)
        {
            print("Valor nao encontrado");
            return;
        }

        print_r("Posição no Array: ". $pesquisa);
        ?>
    </body>
</html>
