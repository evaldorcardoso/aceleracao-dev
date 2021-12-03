<?php
    class Salame extends SaborDecorator{
        public function valor(){
            return $this->pao->valor() + 0.40;
        }

        public function getNome(){
            return $this->pao->getNome().' c/ Salame';
        }
    }
?>