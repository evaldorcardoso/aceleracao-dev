<?php
    class PaoCarteiro implements IPao{
        private $nome;

        public function __construct(){
            $this->nome = 'Pão Carteiro.';
        }

        public function valor(){
            return 2.00;
        }

        public function getNome(){
            return $this->nome;
        }
    }
?>