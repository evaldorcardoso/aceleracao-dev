<?php
    class Tecnico extends Pessoa{
        private String $funcao;
        private int $numTecnico;

        public function __construct($id, $nome, $cpf, $rg, $endereco, $funcao, $numTecnico){
            parent::__construct($id, $nome, $cpf, $rg, $endereco);
            $this->funcao = $funcao;
            $this->numTecnico = $numTecnico;
        }
    }