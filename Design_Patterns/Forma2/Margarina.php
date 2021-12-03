<?php
    class Margarina extends SaborDecorator{
        public function valor(){
            return $this->pao->valor() + 0.25;
        }

        public function getNome(){
            return $this->pao->getNome().' c/ Margarina';
        }
    }
?>