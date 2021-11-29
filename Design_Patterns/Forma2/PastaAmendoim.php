<?php
    class PastaAmendoim extends SaborDecorator{
        public function valor(){
            return $this->pao->valor() + 0.85;
        }

        public function getNome(){
            return $this->pao->getNome().' c/ Pasta de Amendoim';
        }
    }
?>