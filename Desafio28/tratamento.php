<?php

if (isset($_FILES['arquivo'])) {

    $arquivo = $_FILES['arquivo'];
    $nome = $arquivo['name'];
    $temporario = $arquivo['tmp_name'];
    $erro = $arquivo['error'];

    if ($erro === 0) {
        echo("<p><b>Upload OK</b></p>");
        $extensao = strtolower(pathinfo($nome, PATHINFO_EXTENSION));

        if ($extensao === "txt") {

            echo("Nome do Arquivo: ".$nome."<br>");
            echo("Tamanho: ".$arquivo['size'] . " bytes<br><br>");

            $conteudo = file_get_contents($temporario);
            echo nl2br("<p>Exibindo Informações: </p>".$conteudo);

        } else {
            echo "Apenas arquivos .txt são permitidos.";
        }

    } else {
        echo "Erro ao enviar o arquivo.";
    }
}



