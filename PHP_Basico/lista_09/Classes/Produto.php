<?php
    abstract class Produto{
        private $codigo;
        private $preco;
    
        public function __construct($codigo, $preco){
            if(!isset($codigo)){
                throw new InformacaoNulaException("O codigo não pode ser nulo.", "codigo");
            }
            if(!isset($preco)){
                throw new InformacaoNulaException("O preco não pode ser nulo.", "preco");
            }
            $this->codigo = $codigo;
            $this->preco = $preco;
        }

        public function __destruct(){
            // echo "Produto {$this->codigo} foi destruido";
        }

        public function getPreco(){
            return $this->preco;
        }
    }
?>