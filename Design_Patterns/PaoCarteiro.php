<?php
    class PaoCarteiro extends Pao{
        public function __construct(){
            $this->nome = "Pão de Carteiro.";
        }

        public function valor(){
            return 2.00;
        }

        public function getNome(){
            return $this->nome;
        }
    }
?>