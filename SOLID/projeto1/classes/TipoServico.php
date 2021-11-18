<?php
    class TipoServico{
        private int $id;
        private String $nome;
        private String $descricao;
        private int $nivel;

        public function __construct($id, $nome, $descricao, $nivel){
            $this->id = $id;
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->nivel = $nivel;
        }

        public function verificaPrioridade():Bool{ 
            return true;
        }

        public function aumentaNivel():Bool{ 
            return true;
        }
    }