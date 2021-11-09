<?php
    $path = "./images";
    $diretorio = dir($path);
    while($arquivo = $diretorio->read()){
        $info = pathinfo($arquivo);
        if($info['extension']){
            echo $arquivo . "<br>";
        }
    }
    $diretorio->close();
?>