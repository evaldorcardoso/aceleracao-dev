<?php
    $arquivo = fopen("paises.txt", "r");
    $paises = NULL;
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
        $paises = json_decode($linha, true);
    }
    fclose($arquivo);

    $arquivo2 = fopen("lista.csv", "w");
    $cabecalho = array();
    foreach($paises as $pais){
        $cabecalho[] = $pais['nome'];
    }
    fwrite($arquivo2, implode(",", $cabecalho)."\n");
    fclose($arquivo2);
?>