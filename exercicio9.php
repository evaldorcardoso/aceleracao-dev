<?php
    /**
     * Crie um script php capaz de ler uma
     *variavel de entrada com um número, e exiba a tabuada de 0 a 10 de acordo com o
     *número da variavel, ex: Entrada = 4 | Saída = 4 X 0 = 0...4 X 10 = 40.
     *Ex.: http://localhost/aceleracao_php/exercicio9.php?numero=4
     */
    $numero = $_GET["numero"];
    echo "Tabuada de 0 a 10 de acordo com o número da variavel: $numero";
    echo "<br>";
    for($i = 0; $i <= 10; $i++){
        echo "$numero X $i = ".($numero * $i)."<br>";
    }

?>