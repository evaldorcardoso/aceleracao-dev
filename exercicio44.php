<?php
    //usando a api https://viacep.com.br faça 15 requisições de ceps diferentes usando o comando curl
    //converta cada json em um array e armazene em um array chamado $ceps
    //depois converta esse array em um json e escreva dentro de um arquivo ceps.txt

    $ceps = array('95555000','90250267','93035060','91250420', '90160080',
                '94455140', '94150100', '97573634', '91260220', '93125350',
                '96201590', '92330200', '93285420', '93054440', '98801767');
    $cepsData = [];
    foreach ($ceps as $cep) {
        $url = "https://viacep.com.br/ws/$cep/json/";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $json = curl_exec($ch);
        curl_close($ch);
        $cepsData[] = json_decode($json, true);
    }
    $json = json_encode($cepsData);
    file_put_contents("ceps.txt", $json);
?>