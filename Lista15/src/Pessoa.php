<?php
namespace Pessoa;

class Pessoa{
    public $id;
    public $nome;
    public $email;
    public $profissao;
    public $escolaridade;
    private $token;

    public function __construct($id, $nome, $email, $profissao, $escolaridade){
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->profissao = $profissao;
        $this->escolaridade = $escolaridade;
    }

    public function setToken($token){
        $this->token = $token;
    }

    public function toArray(){
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'email' => $this->email,
            'profissao' => $this->profissao,
            'escolaridade' => $this->escolaridade
        ];
    }
}