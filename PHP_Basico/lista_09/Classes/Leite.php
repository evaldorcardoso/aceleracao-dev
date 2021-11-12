<?php
class Leite extends Produto implements IPerecivel{
        private $marca;
        private $volume;
        private $dataValidade;

        public function __construct($codigo, $preco, $marca, $volume, $dataValidade){
            parent::__construct($codigo, $preco);
            if(!isset($marca)){
                throw new InformacaoNulaException("A marca não pode ser nula.", "marca");
            }
            if(!isset($volume)){
                throw new InformacaoNulaException("O volume não pode ser nulo.", "volume");
            }
            if(!isset($dataValidade)){
                throw new InformacaoNulaException("A data de validade não pode ser nula.", "dataValidade");
            }
            $this->marca = $marca;
            $this->volume = $volume;
            $this->dataValidade = $dataValidade;
        }

        public function __destruct(){
            // echo "Leite {$this->codigo} foi destruido";
        }   

        public function estaVencido():Bool{
            $dataAtual = new DateTime();
            $dataValidade = new DateTime($this->dataValidade);
            return $dataAtual > $dataValidade;
        }

        public function getMarca():String{
            return $this->marca;
        }
    }

?>