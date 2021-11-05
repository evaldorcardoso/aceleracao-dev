<?php
    /**
     * Crie um script php capaz de ler um número
     *e verificar se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor
     *Positivo", "Valor Negativo" ou "Igual a Zero".
     *Ex.: http://localhost/aceleracao_php/exercicio8.php?valor=10
     */
    $valor = $_GET['valor'];
    if ($valor > 0) {
        echo "Valor Positivo";
    } elseif ($valor < 0) {
        echo "Valor Negativo";
    } else {
        echo "Igual a Zero";
    }    
?>