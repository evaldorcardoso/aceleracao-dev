<?php
    class Aluno extends Pessoa{
        private String $matricula;
        private Curso $curso; 
        
        public function __construct($id, $nome, $cpf, $rg, $endereco, $matricula, $curso){
            parent::__construct($id, $nome, $cpf, $rg, $endereco);
            $this->matricula = $matricula;
            $this->curso = $curso;
        }
    }