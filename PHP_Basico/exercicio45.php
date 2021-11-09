<?php
    $pessoas = array("João", "Maria", "José", "Pedro", "Paulo", "Ana", "Rafael", 
                    "Lucas", "Mateus", "Larissa", "Lorena", "Luana", "Laís", "Joana", "Murilo");
    foreach ($pessoas as $pessoa) {
        if (!file_exists($pessoa)) {
            mkdir($pessoa);
            $arquivo = fopen($pessoa . "/" . $pessoa . ".txt", "w");
            fwrite($arquivo, $pessoa);
            fclose($arquivo);
        }
    }
?>