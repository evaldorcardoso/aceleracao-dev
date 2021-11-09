<?php
    //crie uma função que leia dois números inteiros recebidos por parâmetro
    //Se o segundo for diferente de zero, calcular e imprimir o quociente do primeiro pelo
    //segundo. Caso contrário, imprimir a mensagem “DIVISÃO POR ZERO"
    function divisao($num1, $num2){
        if(!is_integer($num1)) {
            echo "O primeiro número não é um inteiro";
            return;
        }
        if(!is_integer($num2)) {
            echo "O segundo número não é um inteiro";
            return;
        }
        if($num2 != 0){
            echo $num1 / $num2;
        }else{
            echo "DIVISÃO POR ZERO";
        }
    }