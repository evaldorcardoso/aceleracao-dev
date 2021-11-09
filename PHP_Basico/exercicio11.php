<?php
    /**
     * Crie um script capaz de ler um array de
     *nomes com 10 nomes (crie seus próprios nomes). Em seguida imprima esses nomes
     *usando for;
     *Ex.: http://localhost/aceleracao_php/exercicio11.php?nomes=Evaldo,Maria,Bruno,Alice,Rosa,Juliana,Bruna,Joana,Fernanda,Daniel,Paulo
     */
    $nomes = $_GET['nomes'];
    $nomes = explode(",", $nomes);
    foreach ($nomes as $nome) {
        echo $nome . "<br>";
    }

?>