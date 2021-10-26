<?php
    /** 
     *Escreva um script php que leia 6 números
     *nas variáveis Val1, Val2 ,Val3, Val4, Val5 e Val6 calcule sua média na variável média e
     *exiba para o usuário o resultado; */    
    //Ex.: 
    //http://localhost/aceleracao_php/exercicio6.php?val1=1&val2=5&val3=18&val4=54&val5=2&val6=90
    
    $val1 = $_GET["val1"];
    $val2 = $_GET["val2"];
    $val3 = $_GET["val3"];
    $val4 = $_GET["val4"];
    $val5 = $_GET["val5"];
    $val6 = $_GET["val6"];
    
    $media = ($val1 + $val2 + $val3 + $val4 + $val5 + $val6) / 6;
    
    echo "A média é: $media";
?>