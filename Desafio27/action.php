<?php
require './index.php';
echo("Seja Bem vindo: ".htmlspecialchars($_POST['nome'])."<br>");
echo("Seu Email: ". htmlspecialchars($_POST['email'])." foi cadastrado com sucesso");

