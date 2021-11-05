<?php
    mkdir('./alunos');
    mkdir('./professores');

    $arquivo = fopen('./alunos/arquivo.txt', 'w');
    fclose($arquivo);

    function verificaPastaNaoVazia($caminho){
        if(is_dir($caminho)){
            if(count(scandir($caminho)) > 2){
                return true;
            }
        }
        throw new Exception($caminho);
    }

    try{
        verificaPastaNaoVazia('./alunos');
        verificaPastaNaoVazia('./professores');
    }catch(Exception $e){
        $log = fopen('log.txt', 'w');
        fwrite($log, 'Mensagem: A pasta '.$e->getMessage().' não está vazia'.PHP_EOL);
        fwrite($log, "Arquivo: " . $e->getFile().PHP_EOL);
        fwrite($log, "Linha: " . $e->getLine().PHP_EOL);
        fclose($log);
    }
?>
