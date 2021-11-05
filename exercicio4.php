<?php
    //faça um script que leia 2 arrays 
    //(você pode definir valores e índices de sua escolha) 
    //e escreva seus valores e índices usando o foreach, e em seguida use a função merge para unificar os dois arrays
    //Mostre o resultado do merge com var_export;
    //Ex.: http://localhost/aceleracao_php/exercicio4.php?nome1=João&idade1=20&cidade1=São Paulo&nome2=Maria&idade2=25&cidade2=Rio de Janeiro
    $array1 = array(
        'nome' => $_GET['nome1'],
        'idade' => $_GET['idade1'],
        'cidade' => $_GET['cidade1']
    );
    $array2 = array(
        'nome' => $_GET['nome2'],
        'idade' => $_GET['idade2'],
        'cidade' => $_GET['cidade2']
    );
    foreach ($array1 as $key => $value){
        echo $key . ': ' . $value . '<br>';
    }
    echo '<br>';
    foreach ($array2 as $key => $value){
        echo $key . ': ' . $value . '<br>';
    }
    echo '<br>';
    $array3 = array_merge($array1, $array2);
    var_dump($array3);
?>