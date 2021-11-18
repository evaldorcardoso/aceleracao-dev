<?php
    class Pessoa{
        private $id;
        private $nome;
        private $cpf;
        private $rg;
        private $endereco;

        public function __construct($id, $nome, $cpf, $rg, $endereco){
            $this->id = $id;
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->rg = $rg;
            $this->endereco = $endereco;
        }
    }
?>