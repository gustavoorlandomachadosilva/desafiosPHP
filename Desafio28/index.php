<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Envio de Arquivo</title>
    </head>
    <body>
        <form action="tratamento.php" method="POST" enctype="multipart/form-data">
            <label>Insira o arquivo:</label>
            <input type="file" id="arquivo" name="arquivo" accept=".txt" required>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
