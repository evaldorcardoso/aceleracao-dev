<?php
    require_once('./exercicio66.php');

    class Atendente extends Pessoa{
        private $id;
        private $funcao;
        private $horarioentrada;
        private $horariosaida;

        public function __construct($nome, $CPF, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao, $id, $funcao, $horarioentrada, $horariosaida){
            parent::__construct($nome, $CPF, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao);
            $this->id = $id;
            $this->funcao = $funcao;
            $this->horarioentrada = $horarioentrada;
            $this->horariosaida = $horariosaida;
        }

        public function __destruct(){
            // echo "<p>Objeto Atendente destruido</p>";
        }

        public function __toString(){
            return json_encode(array(
                "nome" => $this->nome,
                "CPF" => $this->CPF,
                "endereco" => $this->endereco,
                "nomepai" => $this->nomepai,
                "nomemae" => $this->nomemae,
                "rg" => $this->rg,
                "serialdeidentificacao" => $this->serialdeidentificacao,
                "id" => $this->id,
                "funcao" => $this->funcao,
                "horarioentrada" => $this->horarioentrada,
                "horariosaida" => $this->horariosaida
            ));
        }
    }

    $atendente1 = new Atendente("João", "123.456.789-00", "Rua A", "José", "Maria", "123.456.789-00", "1234567890123", "123", "Atendente", "08:00", "18:00");
    $atendente2 = new Atendente("Maria", "987.654.321-00", "Rua B", "João", "José", "987.654.321-00", "9876543210987", "456", "Atendente", "08:00", "18:00");
    //apresentar as informacoes de cada objeto com var_dump
    var_dump($atendente1);
    var_dump($atendente2);
?>