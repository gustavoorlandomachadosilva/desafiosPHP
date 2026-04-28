<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabela com Array Associativo</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <?php
        $produtos = [
            ["Nome" => "Notebook", "Preço" => 300, "Quantidade" => 10],
            ["Nome" => "Mouse", "Preço" => 50, "Quantidade" => 50] 
            ];        
        ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                        foreach ($produtos as $produto) {
                            echo '<tr>';
                            echo "<td>" . $produto['Nome'] . "</td>";
                            echo "<td>" . $produto['Preço'] . "</td>";
                            echo "<td>" . $produto['Quantidade'] . "</td>";
                            echo '</tr>';
                        }                
                ?>
            </tbody>
        </table>     

    </body>
</html>
