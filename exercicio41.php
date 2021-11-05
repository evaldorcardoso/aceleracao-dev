<?php
    $json = file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/paises');
    $paises = json_decode($json, true);
    // var_export($paises);

    // return;
    $arquivo = fopen('paises.txt', 'w');
    fwrite($arquivo, json_encode($paises));
    // fwrite($arquivo, $paises);
    // foreach ($paises as $pais) {
    //     $linha = json_decode($pais, true);
    //     fwrite($arquivo, $linha['nome'] . PHP_EOL);
    //     // fwrite($arquivo, $pais . "\n");
    // }
    fclose($arquivo);
?>