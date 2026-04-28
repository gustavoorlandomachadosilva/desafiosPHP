<?php
/* POST:
    echo "Nome: {$_POST['nome']}";
    echo("<br>");
    echo "Senha: {$_POST['senha']}";
    echo("<br>");
    echo "Email: {$_POST['email']}";
    echo("<br>");
    echo "Concordou: ". isset($_POST['concordo']) && $_POST['concordo'] != '' ? 'Sim' : 'Nao';
    echo("<br>");
    echo "Estado: {$_POST['estado']}";
    echo("<br>");
    echo "Descrição: {$_POST['descricao']}";
*/
if ($_REQUEST['nome'] == '' || strlen($_REQUEST['nome']) <= 3) {
    echo("Campo nome inválido");
    die("<br>Error");
}

echo "Nome: {$_REQUEST['nome']}";
    echo("<br>");
    echo "Senha: {$_REQUEST['senha']}";
    echo("<br>");
    echo "Email: {$_REQUEST['email']}";
    echo("<br>");
    echo "Concordou: ". isset($_REQUEST['concordo']) && $_REQUEST['concordo'] != '' ? 'Sim' : 'Nao';
    echo("<br>");
    echo "Estado: {$_REQUEST['estado']}";
    echo("<br>");
    echo "Descrição: {$_REQUEST['descricao']}";


?>