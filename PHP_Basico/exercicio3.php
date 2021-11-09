<?php
    //armazenar 3 notas de um aluno e mostrar a média
    $notas = array(8, 6, 9);
    $media = ($notas[0] + $notas[1] + $notas[2]) / 3;
    echo "A média do aluno é ".round($media,1)." <br>";
    var_dump($media);
?>