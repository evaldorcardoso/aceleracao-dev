<?php
    class Ovo extends SaborDecorator{
        public function valor(){
            return $this->pao->valor() + 0.35;
        }

        public function getNome(){
            return $this->pao->getNome().' c/ Ovo';
        }
    }
?>