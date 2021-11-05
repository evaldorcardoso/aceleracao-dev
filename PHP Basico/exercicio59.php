<?php
    //Crie uma função que receba dois números inteiros, e mostre o resultado da divisão
    //entre eles, caso haja uma divisão por 0, você deve lançar uma exceção dizendo “não é
    //possivel fazer divisão por 0”, juntamente com o código de erro 523.
    
    function divisao($num1, $num2){
        if($num2 == 0){
            throw new Exception("Não é possivel fazer divisão por 0", 523);
        }
        return $num1 / $num2;
    }
    try{
        echo divisao(10, 0);
    }catch(Exception $e){
        echo "Código do erro: ".$e->getCode()."<br>";
        echo "Mensagem: ".$e->getMessage();
    }
?>