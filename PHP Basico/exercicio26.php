<?php
    //Crie 3 variáveis, cada 1 delas receberá um valor aleatório inteiro menor que 100.
    $numero1 = rand(1,99);
    $numero2 = rand(1,99);
    $numero3 = rand(1,99);

    function retornaPar($valor){
        while($valor % 2 != 0){
            $valor ++;
        }
        return $valor;
    }
    echo '<br>'.retornaPar($numero1);
    echo '<br>'.retornaPar($numero2);
    echo '<br>'.retornaPar($numero3);
?>
