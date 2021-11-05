<?php
    $content = file_get_contents("https://rickandmortyapi.com/api");
    $json = json_decode($content, true);
    if(empty($json)){
        echo "Você não pode continuar";
    }else{
        if(is_array($json)){
            echo "Você pode continuar <br>";
            var_dump($json);
        }else{
            echo "Você não pode continuar, não é um array";
        }
    }
?>