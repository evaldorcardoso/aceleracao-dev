<?php
    $array1 = array(1, 2, 3, 4, 5);
    $array2 = array(6, 7, 8, 9, 10);
    $array3 = array(11, 12, 13, 14, 15);
    $array4 = array(16, 17, 18, 19, 20);
    $array5 = array(21, 22, 23, 24, 25);
    foreach ($array1 as $key => $value) {
        echo "Valor: $value, Índice: $key <br>";
    }
    foreach ($array2 as $key => $value) {
        echo "Valor: $value, Índice: $key <br>";
    }
    foreach ($array3 as $key => $value) {
        echo "Valor: $value, Índice: $key <br>";
    }
    foreach ($array4 as $key => $value) {
        echo "Valor: $value, Índice: $key <br>";
    }
    foreach ($array5 as $key => $value) {
        echo "Valor: $value, Índice: $key <br>";
    }
    var_export($array1).'<br>';
    var_export($array2).'<br>';
    var_export($array3).'<br>';
    var_export($array4).'<br>';
    var_export($array5).'<br>';
?>