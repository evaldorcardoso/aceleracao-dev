<?php
    class Ovo extends SaborDecorator{
        private $pao;

        public function __construct(Pao $pao){
            $this->pao = $pao;
            $this->nomeSabor = ' Ovo';
        }

        public function valor(){
            return $this->pao->valor() + 0.70;
        }

        public function getNome(){
            return $this->pao->getNome().', '.$this->nomeSabor;
        }
    }
?>