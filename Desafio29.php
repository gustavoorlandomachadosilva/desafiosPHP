<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CURL VIA GET</title>
    </head>
    <body>
        <?php
        //Endpoint/URL
        $endpoint = 'https://api.github.com/users/gustavoorlandomachadosilva';
        
        //iniciar
        $cURL = curl_init();
        
        //processar        
        //Qual url queremos acessar?
        curl_setopt($cURL, CURLOPT_URL, $endpoint);
        
        //Capturando a Resposta da sessão 
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        
        //Definir um cabeçalho
        curl_setopt($cURL, CURLOPT_USERAGENT, 'cURL do Github');
        
        //Executamos a requisição
        $response = curl_exec($cURL);
        
        //Tratamento
        if(curl_error($cURL)){
            echo curl_error($cURL);
        } else {
            $data = json_decode($response, true);
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        }     
        //finalizar
        curl_close($cURL);
        ?>
    </body>
</html>
