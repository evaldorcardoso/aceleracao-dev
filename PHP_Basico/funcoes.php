<?php
    function soma($a, $b){
        return $a + $b;
    }

    function parImpar($num){
        if($num % 2 == 0){
            return "Par";
        }else{
            return "Ímpar";
        }
    }

    function contaCaracteres($str){
        return strlen($str);
    }