<?php
    /**
     * Crie um script php capaz de ler um array
     *de números (0,1,2,3,4,5,6,7,8,9) e imprima apenas os que forem pares dentro de um
     *foreach, mostrando seu índice e valor;
     *Ex.: http://localhost/aceleracao_php/exercicio10.php?numeros=1,2,3,4,5,6,7,8,9
     */
    $numeros = $_GET['numeros'];
    $numeros = explode(',', $numeros);
    foreach ($numeros as $key => $value) {
        if ($value % 2 == 0) {
            echo "Posicao= $key, valor= $value<br>";
        }
    }

?>