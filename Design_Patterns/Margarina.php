<?php
    class Margarina extends SaborDecorator{
        private $pao;

        public function __construct(Pao $pao){
            $this->pao = $pao;
            $this->nomeSabor = ' Margarina';
        }

        public function valor(){
            return $this->pao->valor() + 0.40;
        }

        public function getNome(){
            return $this->pao->getNome().', '.$this->nomeSabor;
        }
    }
?>