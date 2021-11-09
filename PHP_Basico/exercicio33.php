<?php
    //leia um array onde contenha 12 preços aleatórios do tipo float
    $precos = array(1.99, 4.99, 9.99, 187.30, 10, 108, 258.40, 1099.59, 92, 25.90, 2.99, 98.14);
    foreach($precos as $preco){
        $posicao++;
        $avistadinheiro = round($preco - ($preco/100*10), 2);
        $avistacartao = round($preco - ($preco/100*5), 2);
        $parcelado3 = round($preco + ($preco/100*10), 2);
        echo "<p>Produto ${posicao}, preço original: R$ ${preco}";
        echo "<br> A vista em dinheiro ou cheque, recebe 10% de desconto: {$avistadinheiro}";
        echo "<br> A vista no cartao de credito, recebe 5% de desconto: {$avistacartao}";
        echo "<br> Em 2 vezes, preço normal de etiqueta sem juros: {$preco}";
        echo "<br> Em 3 vezes, preço normal de etiqueta mais juros de 10%: {$parcelado3}";
        echo '</p>';
    } 