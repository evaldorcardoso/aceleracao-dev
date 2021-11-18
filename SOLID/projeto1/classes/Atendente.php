<?php
    class Atendente extends Pessoa{
        private int $numAtendente;

        public function __construct($id, $nome, $cpf, $rg, $endereco, $numAtendente){
            parent::__construct($id, $nome, $cpf, $rg, $endereco);
            $this->numAtendente = $numAtendente;
        }
        
    }