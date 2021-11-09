<?php
    //Crie uma classe chamada Pessoa com os atributos [nome, CPF, endereco, nomepai, nomemae, rg, serialdeidentificacao]

    class Pessoa {
        private $nome;
        private $CPF;
        private $endereco;
        private $nomepai;
        private $nomemae;
        private $rg;
        private $serialdeidentificacao;

        //crie uma funcao construct
        public function __construct($nome, $CPF, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao) {
            $this->nome = $nome;
            $this->CPF = $CPF;
            $this->endereco = $endereco;
            $this->nomepai = $nomepai;
            $this->nomemae = $nomemae;
            $this->rg = $rg;
            $this->serialdeidentificacao = $serialdeidentificacao;
        }

        //crie uma funcao destruct
        public function __destruct() {
            // echo "Objeto destruido";
        }

        //crie uma funcao __tostring que retorna um json com os atributos da classe
        public function __toString() {
            return json_encode(array(
                "nome" => $this->nome,
                "CPF" => $this->CPF,
                "endereco" => $this->endereco,
                "nomepai" => $this->nomepai,
                "nomemae" => $this->nomemae,
                "rg" => $this->rg,
                "serialdeidentificacao" => $this->serialdeidentificacao
            ));
        }    
    }

    $pessoa1 = new Pessoa("João", "123.456.789-10", "Rua 1", "João", "Maria", "123456789", "123456789");
    $pessoa2 = new Pessoa("Maria", "987.654.321-20", "Rua 2", "João", "Maria", "987654321", "987654321");
    //apresente as informações dos objetos pela função toString com var_dump
    var_dump($pessoa1);
    var_dump($pessoa2);
?>

