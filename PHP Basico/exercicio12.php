<?php
    /**
     * Escreva um script php que leia 16
     *números de um array calcule sua média na variável
     *média e exiba para o usuário o resultado do array com var_export e em seguida mostre
     *o resultado da média com o comando print;
     *Ex.: http://localhost/aceleracao_php/exercicio12.php?n1=71&n2=77&n3=10&n4=18&n5=53&n6=99&n7=35&n8=89&n9=82&n10=5&n11=40&n12=97&n13=96&n14=42&n15=63&n16=83
     */
    echo '<br><br><br><br><br>';
    $media = 0;
    $numeros = array();
    for ($i=1; $i <= 16 ; $i++) { 
        $numeros[] = $_GET['n'.$i];
        $media += $numeros[$i-1];
    }    
    $media = $media / 16;
    
    var_export($numeros);
    echo "<br>";
    echo "A média dos números é: $media";

?>