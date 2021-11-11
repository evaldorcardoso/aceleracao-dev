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

    foreach($paises[0] as $key => $value){
        $cabecalho[] = $key;
    }
    $cabecalhoCsv = implode(",", $cabecalho)."\r\n";
    fwrite($arquivo2, $cabecalhoCsv);

    foreach($paises as $pais){
        $linha = array();

        foreach($pais as $key => $value){
            switch($key){
                case "id":
                    $arrId = $value;
                    $linha[] = $arrId['M49'];    
                    break;
                case "nome":
                    $linha[] = $value;
                    break;
                case "regiao-intermediaria" || "sub-regiao":
                    if(is_array($value)){
                        $arrId = $value['id'];
                        $linha[] = $arrId['M49']. " - ".$value['nome'];
                    }else{
                        $linha[] = $value;
                    }
                    break;                
            }        
        }
        $linhaCsv = implode(",", $linha)."\r\n";
        fwrite($arquivo2, $linhaCsv);
    }
    fclose($arquivo2);
?>