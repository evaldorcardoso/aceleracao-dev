<?php
    $url = "https://random-data-api.com/api/business_credit_card/random_card";
    $json = file_get_contents($url);
    $array = json_decode($json, true);
    $arquivo = fopen("cartao.txt", "w");
    fwrite($arquivo, $json);
    fclose($arquivo);
    $arquivo = fopen("cartao.txt", "r");
    $conteudo = fread($arquivo, filesize("cartao.txt"));
    fclose($arquivo);
    $array = json_decode($conteudo, true);
    $jsonData = json_encode($array);
    var_export($jsonData);
?>