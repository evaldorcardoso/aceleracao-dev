<?php
    class DVD extends Produto{
        private $titulo;
        private $ano;

        public function __construct($codigo, $preco, $titulo, $ano){
            parent::__construct($codigo, $preco);
            
            if(!isset($titulo)){
                throw new InformacaoNulaException("O titulo não pode ser nulo.", "titulo");
            }
            if(!isset($ano)){
                throw new InformacaoNulaException("O ano não pode ser nulo.", "ano");
            }
            $this->titulo = $titulo;
            $this->ano = $ano;
        }

        public function __destruct(){
            // echo "DVD {$this->codigo} foi destruido";
        }

        public function getAno(){
            return $this->ano;
        }

        public function getTitulo(){
            return $this->titulo;
        }
    }
?>