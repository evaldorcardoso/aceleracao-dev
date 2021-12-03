<?php
    class Mussarela extends SaborDecorator{
        public function valor(){
            return $this->pao->valor() + 0.60;
        }

        public function getNome(){
            return $this->pao->getNome().' c/ Mussarela';
        }
    }
?>