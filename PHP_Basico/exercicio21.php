<?php
    //Crie 5 variáveis e atribua valores aleatórios a elas.
    $nome = "José";
    $idade = 28;
    $peso = NULL;
    $notas = array(1, 75, 80, 90, 95);
    $sexo = "M";

    function verificaValores($variavel){
        if(is_null($variavel)){
            echo "<p>Variável é nula";
            return;
        }
        if(is_array($variavel)){
            echo "<p>Variável é um array: ";
            echo var_export($variavel);
            return;
        }
    }

    verificaValores($nome);
    verificaValores($idade);
    verificaValores($peso);
    verificaValores($notas);
    verificaValores($sexo);
?>