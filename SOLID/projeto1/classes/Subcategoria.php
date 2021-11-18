<?php
    class Subcategoria extends Categoria{
        private int $id;
        private Categoria $categoria;
        private String $descricao;

        public function __construct($id, Categoria $categoria, $descricao){
            $this->id = $id;
            $this->categoria = $categoria;
            $this->descricao = $descricao;
        }

        public function verificaPrioridade():Bool{ 
            return true;
        }

        public function aumentaNivel():Bool{ 
            return true;
        }
    }