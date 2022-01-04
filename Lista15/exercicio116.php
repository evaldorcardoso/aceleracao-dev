<?php

require_once __DIR__."/vendor/autoload.php";

use Pessoa\Pessoa;

$pessoas = [
    new Pessoa('1', 'Joao', 'joao@gmail.com', 'tecnico', 'medio'),
    new Pessoa('2', 'Maria', 'maria@gmail.com', 'professora', 'superior'),
    new Pessoa('3', 'Jose', 'joana@gmail.com', 'engenheira', 'superior'),
    new Pessoa('4', 'Pedro', 'pedro@gmail.com', 'engenheiro', 'medio'),
    new Pessoa('5', 'Paulo', 'paulo@gmail.com', 'medico', 'medio'),
    new Pessoa('6', 'Ana', 'ana@gmail.com', 'musico', 'superior'),
    new Pessoa('7', 'Clara', 'clara@gmail.com', 'professora', 'superior'),
    new Pessoa('8', 'Sabrina', 'sabrina@gmail.com', 'professora', 'superior'),
    new Pessoa('9', 'Victor', 'victor@gmail.com', 'corretor', 'superior'),
    new Pessoa('10', 'Joana', 'joana@gmail.com', 'faxineira', 'fundamental'),
    new Pessoa('11', 'Elisa', 'elisa@gmail.com', 'faxineira', 'fundamental'),
    new Pessoa('12', 'Tiago', 'tiago@gmail.com', 'vendedor', 'medio'),
    new Pessoa('13', 'Gabriela', 'gabriela@gmail.com', 'cabelereira', 'medio'),
    new Pessoa('14', 'Paula', 'paula@gmail.com', 'cabelereira', 'fundamental'),
    new Pessoa('15', 'Lucas', 'lucas@gmail.com', 'pedreiro', 'fundamental')
];

function gera_token(Pessoa $pessoa){
    $key = 'Ajhdkajsg665612AAA8]0';

    $header = [
        'typ' => 'JWT',
        'alg' => 'HS256'
    ];

    $payload = $pessoa->toArray();    

    $header = json_encode($header);
    $payload = json_encode($payload);

    $header = base64_encode($header);
    $payload = base64_encode($payload);

    $sign = hash_hmac('sha256', $header . '.' . $payload, $key, true);
    $sign = base64_encode($sign);

    $pessoa->setToken($header . '.' . $payload . '.' . $sign);
}

var_export($pessoas);

echo '<br><hr>';

foreach($pessoas as $pessoa){
    gera_token($pessoa);
    var_export($pessoa);
}

//var_export($pessoas);

