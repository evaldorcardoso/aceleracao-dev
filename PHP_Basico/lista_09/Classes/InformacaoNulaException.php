<?php
    class InformacaoNulaException extends Exception{
        private $nomeParametro;
        public function __construct($message, $nomeParametro){
            parent::__construct($message);
            $this->nomeParametro = $nomeParametro;
        }

        public function __destruct(){
            // echo "O parametro {$this->nomeParametro} não pode ser nulo";
        }

        public function getError(){
            return "O parametro ".$this->nomeParametro." não pode ser nulo.<br>".parent::getMessage();
        }
        
    }
?>