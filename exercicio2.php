<?php
    $cursos = array('PHP', 'Java', 'Python');
    $pessoas = array('Joao', 'Pedro', 'Clara');
    $lojas = array('Centro', 'Zona Sul', 'Zona Oeste');

    foreach ($cursos as $key => $value){
        echo 'Curso '.$key.': '.$value.'<br>';
    }
    echo '<p>';
    foreach ($pessoas as $key => $value){
        echo 'Pessoa '.$key.': '.$value.'<br>';
    }
    echo '<p>';
    foreach ($lojas as $key => $value){
        echo 'Loja '.$key.': '.$value.'<br>';
    }
?>