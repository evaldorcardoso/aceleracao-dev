<?php
    require_once 'autoload.php';

    $pao1 = new PaoFrances();
    $pao1 = new Salame($pao1);
    $pao1 = new Mussarela($pao1);
    echo $pao1->getNome().': R$ '.$pao1->valor().'<br>';
    $pao2 = new PaoFrances();
    $pao2 = new Salame($pao2);
    echo $pao2->getNome().': R$ '.$pao2->valor().'<br>';
    $pao3 = new PaoFrances();
    $pao3 = new Mussarela($pao3);
    echo $pao3->getNome().': R$ '.$pao3->valor().'<br>';
    $pao4 = new PaoFrances();
    $pao4 = new Ovo($pao4);
    $pao4 = new Mussarela($pao4);
    echo $pao4->getNome().': R$ '.$pao4->valor().'<br>';
    $pao5 = new PaoFrances();
    $pao5 = new Ovo($pao5);
    $pao5 = new Margarina($pao5);
    echo $pao5->getNome().': R$ '.$pao5->valor().'<br>';
    $pao6 = new PaoFrances();
    $pao6 = new Margarina($pao6);
    echo $pao6->getNome().': R$ '.$pao6->valor().'<br>';
    $pao7 = new PaoFrances();
    $pao7 = new Ovo($pao7);
    echo $pao7->getNome().': R$ '.$pao7->valor().'<br>';
    $pao8 = new PaoCarteiro();
    $pao8 = new Geleia($pao8);
    echo $pao8->getNome().': R$ '.$pao8->valor().'<br>';
    $pao9 = new PaoCarteiro();
    $pao9 = new Geleia($pao9);
    $pao9 = new Salame($pao9);
    echo $pao9->getNome().': R$ '.$pao9->valor().'<br>';
    $pao10 = new PaoCarteiro();
    $pao10 = new PastaAmendoim($pao10);
    $pao10 = new Geleia($pao10);
    echo $pao10->getNome().': R$ '.$pao10->valor().'<br>';
    $pao11 = new PaoCarteiro();
    $pao11 = new Salame($pao11);
    echo $pao11->getNome().': R$ '.$pao11->valor().'<br>';
    $pao12 = new PaoCarteiro();
    $pao12 = new PastaAmendoim($pao12);
    echo $pao12->getNome().': R$ '.$pao12->valor().'<br>';  

?>