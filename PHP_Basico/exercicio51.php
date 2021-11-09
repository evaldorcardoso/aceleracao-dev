<?php
    //crie 4 cookies gerando hash SHA-256
    $hash1 = hash('sha256', '123456');
    $hash2 = hash('sha256', '654321');
    $hash3 = hash('sha256', 'abcdef');
    $hash4 = hash('sha256', 'fedcba');
    //definir cookie com 1 hora de validade
    setcookie('hash1', $hash1, time() + 3600);
    setcookie('hash2', $hash2, time() + 3600);
    //definir cookie com 2 horas de validade
    setcookie('hash3', $hash3, time() + 7200);
    setcookie('hash4', $hash4, time() + 7200);
    //ler os cookies gerados e gravar em formato json em um arquivo cookies.txt
    $cookies = array();
    $cookies['hash1'] = $_COOKIE['hash1'];
    $cookies['hash2'] = $_COOKIE['hash2'];
    $cookies['hash3'] = $_COOKIE['hash3'];
    $cookies['hash4'] = $_COOKIE['hash4'];
    $json = json_encode($cookies);
    $arquivo = fopen('cookies.txt', 'w');
    fwrite($arquivo, $json);
    fclose($arquivo);
?>