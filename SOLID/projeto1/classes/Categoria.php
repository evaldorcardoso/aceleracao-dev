<?php
    class Categoria{
        private int $id;
        private String $nome;
        private String $descricao;

        public function __construct($id, $nome, $descricao){
            $this->id = $id;
            $this->nome = $nome;
            $this->descricao = $descricao;
        }

        public function verificaPrioridade():Bool{ 
            return true;
        }

        public function aumentaNivel():Bool{ 
            return true;
        }
    }