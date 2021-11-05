<?php
    $logsEncontrados = array();
    $pastas = scandir("pastas");
    foreach($pastas as $pasta){
        if($pasta != "." && $pasta != ".."){
            $arquivos = scandir("pastas/".$pasta);
            if(count($arquivos) == 2){
                //excluir a pasta
                rmdir("pastas/".$pasta);
                echo "Pasta $pasta excluida<br>";
            }
            foreach($arquivos as $arquivo){
                if($arquivo != "." && $arquivo != ".."){
                    array_push($logsEncontrados, "pastas/$pasta/$arquivo");
                }
            }
        }
    }
    echo "<br>";
    print_r($logsEncontrados);
    echo "<br/>";
?>