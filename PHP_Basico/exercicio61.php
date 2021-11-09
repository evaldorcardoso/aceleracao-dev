<?php
    
    class Nota {
        private $id;
        private $nome;
        private $descricao;
        private $quantidade;
        private $preco;
        private $desconto;

        public function __construct($id, $nome, $descricao, $quantidade = 0, $preco, $desconto) {
            $this->id = $id;
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->quantidade = $quantidade;
            $this->preco = $preco;
            $this->desconto = $desconto;
        }

        public function setPreco($preco) {
            $this->preco = $preco;
        }
        
        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }
        
        public function getId() {
            return $this->id;
        }
        public function getNome() {
            return $this->nome;
        }
        public function getDescricao() {
            return $this->descricao;
        }
        public function getQuantidade() {
            return $this->quantidade;
        }
        public function getPreco() {
            return $this->preco;
        }
        public function getDesconto() {
            return $this->desconto;
        }
        
        public function calculaFatura(){
            return $this->quantidade * ($this->preco * (1 - $this->desconto));
        }
    }

    $fatura = new Nota(1, "Notebook", "Notebook Dell", 2, 1500, 0.1);
    echo $fatura->calculaFatura();
?>