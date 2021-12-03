<?php
    class PaoFrances implements IPao{
        private $nome;

        public function __construct(){
            $this->nome = "Pão Frances.";
        }

        public function valor(){
            return 1.00;
        }

        public function getNome(){
            return $this->nome;
        }
    }
?>