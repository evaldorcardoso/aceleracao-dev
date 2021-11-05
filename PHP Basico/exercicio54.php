<?php
    $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);

    function parImpar($numero){
        if($numero % 2 == 0){
            return "Par";
        }else{
            throw new Exception("Número não válido para essa operação", 535);
        }
    }

    try{
        foreach($numeros as $numero){
            echo parImpar($numero) . "<br>";
        }
    }catch(Exception $e){
        echo "Código do erro: " . $e->getCode() . "<br>";
        echo "Mensagem: " . $e->getMessage() . "<br>";
        echo "Arquivo: " . $e->getFile() . "<br>";
        echo "Linha: " . $e->getLine() . "<br>";
    }
?>