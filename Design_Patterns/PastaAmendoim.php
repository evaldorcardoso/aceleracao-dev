<?php
    class PastaAmendoim extends SaborDecorator{
        private $pao;

        public function __construct(Pao $pao){
            $this->pao = $pao;
            $this->nomeSabor = ' Pasta de Amendoim';
        }

        public function valor(){
            return $this->pao->valor() + 0.90;
        }

        public function getNome(){
            return $this->pao->getNome().', '.$this->nomeSabor;
        }
    }
?>