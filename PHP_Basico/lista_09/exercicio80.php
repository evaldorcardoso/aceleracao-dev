<?php
    interface IPerecivel{
        public function estaVencido():Bool;        
    }

    include_once('./autoload.php');

    $estoque = array(
        new DVD('1', '39.99', 'Toy Story', '2009'),
        new DVD('2', '49.99', 'Toy Story 2', '2015'),
        new DVD('3', '59.99', 'Toy Story 3', '2020'),
        new DVD('4', '65.99', 'Toy Story 5', '2021'),
        new Leite('5', '5.99', 'Marca1', '1L', date('2021-11-10')),
        new Leite('6', '4.99', 'Marca2', '1L', date('2022-11-10')),
        new Leite('7', '5.89', 'Marca3', '1L', date('2021-04-29')),
        new Leite('8', '6.29', 'Marca4', '1L', date('2021-12-05')),
        new Leite('9', '4.89', 'Marca5', '1L', date('2023-11-10')),
        new Leite('10', '4.99', 'Marca6', '1L', date('2019-11-10'))
    );

    echo '<p><h3>Quais leites estao vencidos?</h3></p>';
    foreach($estoque as $produto){
        if($produto instanceof IPerecivel){
            if($produto->estaVencido()){
                echo $produto->getMarca() . ' está vencido<br>';
            }
        }
    }
    echo '<p><h3>Quais DVDs foram lancados no ano de 2020?</h3></p>';
    foreach($estoque as $produto){
        if($produto instanceof DVD){
            if($produto->getAno()== '2020'){
                echo $produto->getTitulo() . ' foi lancado no ano de 2020<br>';
            }
        }
    }
    echo '<p><h3>Qual o valor total de todos os produtos no Estoque?</h3></p>';
    $total = 0;
    foreach($estoque as $produto){
        $total += $produto->getPreco();
    }
    echo 'Total: R$ ' . $total;


?>
    

    

    

    

    