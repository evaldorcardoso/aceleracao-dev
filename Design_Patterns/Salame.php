<?php
    class Salame extends SaborDecorator{
        private $pao;

        public function __construct(Pao $pao){
            $this->pao = $pao;
            $this->nomeSabor = ' Salame';
        }

        public function valor(){
            return $this->pao->valor() + 0.50;
        }

        public function getNome(){
            return $this->pao->getNome().', '.$this->nomeSabor;
        }
    }
?>