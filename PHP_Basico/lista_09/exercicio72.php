<?php
    require_once 'exercicio71.php';
    
    function meuBanco(Array $correntistas, Array $movimentos, Operacao $operacao){
        foreach($movimentos as $movimento){
            $correntista = $operacao->encontraCorrentista($correntistas, $movimento->getCPFCorrentista());
            $correntista->setSaldo($movimento->getValorMovimento());
        }        
    }

    $correntista1 = new Correntista('123456789', 100);    
    $correntista2 = new Correntista('562589412', 500);
    // var_export($correntista1);
    // echo '<p>';
    // var_export($correntista2);
    // echo '<p>';
    $movimento1 = new Movimento('123456789', 100);
    $movimento2 = new Movimento('562589412', 50);
    meuBanco(Array($correntista1, $correntista2), Array($movimento1, $movimento2), new Operacao());
    // var_export($correntista1);
    // echo '<p>';
    // var_export($correntista2);
    // echo '<p>';
?>





