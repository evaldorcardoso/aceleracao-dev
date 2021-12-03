<?php
    class Geleia extends SaborDecorator{
        public function valor(){
            return $this->pao->valor() + 0.50;
        }

        public function getNome(){
            return $this->pao->getNome().' c/ Geleia';
        }
    }
?>