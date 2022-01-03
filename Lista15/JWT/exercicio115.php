<?php

$key = 'Ajhdkajsg665612AAA8]0';

$header = [
    'typ' => 'JWT',
    'alg' => 'HS256'
];

$payload = [
    'uid' => '123456789',
    'email' => 'evaldo@evaldo.com',
    'nivel_usuario' => '1',
    'favorite_list' => [
        'Meu item 1',
        'Meu item 2',
        'Meu item 3'
    ]
];

$header = json_encode($header);
$payload = json_encode($payload);

$header = base64_encode($header);
$payload = base64_encode($payload);

$sign = hash_hmac('sha256', $header . '.' . $payload, $key, true);
$sign = base64_encode($sign);

print_r($header . '.' . $payload . '.' . $sign);