<?php
echo "<pre>";
var_dump($_FILES);

$arquivo = $_FILES['fotos'];
$caminho = "img/";

if(move_uploaded_file($_FILES['fotos']['tmp_name'], $caminho . "upload.jpg")){
    echo("Sucesso!");
}
else{
    echo("Erro!");
};