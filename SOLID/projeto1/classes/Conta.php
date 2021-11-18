<?php
    class Conta{
        private int $id;
        private int $agencia;
        private int $digito;
        private String $conta;

        public function __construct($id, $agencia, $digito, $conta){
            $this->id = $id;
            $this->agencia = $agencia;
            $this->digito = $digito;
            $this->conta = $conta;
        }
    }