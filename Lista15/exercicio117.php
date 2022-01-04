<?php

require_once __DIR__."/vendor/autoload.php";

use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;
use Pessoa\Pessoa;

$pessoas = [
    new Pessoa('1', 'Joao', 'joao@gmail.com', 'tecnico', 'medio'),
    new Pessoa('2', 'Maria', 'maria@gmail.com', 'professora', 'superior'),
    new Pessoa('3', 'Jose', 'joana@gmail.com', 'engenheira', 'superior'),
    new Pessoa('4', 'Pedro', 'pedro@gmail.com', 'engenheiro', 'medio'),
    new Pessoa('5', 'Paulo', 'paulo@gmail.com', 'medico', 'medio')
];

function gera_token(Pessoa $pessoa)
{
    $configuration = Configuration::forSymmetricSigner(
        new Sha256(),
        InMemory::plainText('Ajhdkajsg665612AAA8]0')
    );
    
    $time = new DateTimeImmutable();

    $token = $configuration->builder()
        ->issuedBy('http:localhost:8000/api/')
        ->permittedFor('http:localhost:8000/api/')
        ->identifiedBy('4f1g23a12aa', true)
        ->issuedAt($time)
        ->canOnlyBeUsedAfter($time->modify('+1 minute'))
        ->expiresAt($time->modify('+1 day'))
        ->withClaim('uid', $pessoa->id)
        ->withClaim('name', $pessoa->nome)
        ->withClaim('email', $pessoa->email)
        ->withClaim('funcao', $pessoa->profissao)
        ->withClaim('escolaridade', $pessoa->escolaridade)
        ->getToken($configuration->signer(), $configuration->signingKey());
    $pessoa->setToken($token->toString());
}

foreach($pessoas as $pessoa)
{
    gera_token($pessoa);
    print_r($pessoa->toString());
}