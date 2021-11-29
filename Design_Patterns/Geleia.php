<?php
    class Geleia extends SaborDecorator{
        private $pao;

        public function __construct(Pao $pao){
            $this->pao = $pao;
            $this->nomeSabor = ' Geleia';
        }

        public function valor(){
            return $this->pao->valor() + 0.85;
        }

        public function getNome(){
            return $this->pao->getNome().', '.$this->nomeSabor;
        }
    }
?>