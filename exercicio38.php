<?php
    $temp1 = 70.5;
    $temp2 = 82.6;

    function fahrenheitToCelsius($temp) {
        return round(($temp - 32) * 5 / 9, 2);
    }

    echo "A temperatura $temp1 graus Fahrenheit é igual a " . fahrenheitToCelsius($temp1) . " graus Celsius. <br>";
    echo "A temperatura $temp2 graus Fahrenheit é igual a " . fahrenheitToCelsius($temp2) . " graus Celsius. <br>";
?>