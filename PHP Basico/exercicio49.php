<?php   
    for ($i = 1; $i <= 150; $i++) {
        if(mkdir("./pastas/".$i, 0777, true)){
            echo "Pasta {$i} criada com sucesso!<br>";
        }
        if ($i % 2 != 0) {
            $filename = "./pastas/".$i."/log-".date('d-M-Y').".txt";
            $arquivo = fopen($filename, "w+");            
            fwrite($arquivo, "Arquivo criado com sucesso!");
            print_r(pathinfo($filename));
            fclose($arquivo);
            echo '<p>';
        }
    }
?>