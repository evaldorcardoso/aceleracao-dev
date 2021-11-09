<?php
    $arquivo1 = fopen('arquivo1.txt', 'w');
    $arquivo2 = fopen('arquivo2.txt', 'w');
    $arquivo3 = fopen('arquivo3.txt', 'w');
    fwrite($arquivo1, file_get_contents('https://jsonplaceholder.typicode.com/photos'));
    fwrite($arquivo2, file_get_contents('https://jsonplaceholder.typicode.com/photos'));
    fwrite($arquivo3, file_get_contents('https://jsonplaceholder.typicode.com/photos'));
    fclose($arquivo1);
    fclose($arquivo2);
    fclose($arquivo3);

    unlink('arquivo2.txt');

    function verificaArquivos($filename){            
        $arquivo = fopen($filename, 'r');
        if(!$arquivo){
            throw new Exception('Arquivo não encontrado');
        }
        $conteudo = '';
        while(!feof($arquivo)){
            $conteudo .= fgets($arquivo);
        }            
        var_export($conteudo);
        echo ('<br>');
        fclose($arquivo);        
    }

    try{
        verificaArquivos('arquivo1.txt');        
    }catch(Exception $e){
        echo $e->getMessage();
    }
    try{
        verificaArquivos('arquivo2.txt');        
    }catch(Exception $e){
        echo $e->getMessage();
    }
    try{
        verificaArquivos('arquivo3.txt');        
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>
