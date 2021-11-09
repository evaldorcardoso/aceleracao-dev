<?php
    require_once('./exercicio66.php');

    class Secretaria extends Pessoa{
        private $id;
        private $funcao;
        private $horatrabalhada;
        private $horasextras;

        //crie um construtor completo capaz de acessar o construtor da classe herdada.
        public function __construct($nome, $CPF, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao, $id, $funcao, $horatrabalhada, $horasextras){
            parent::__construct($nome, $CPF, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao);
            $this->id = $id;
            $this->funcao = $funcao;
            $this->horatrabalhada = $horatrabalhada;
            $this->horasextras = $horasextras;
        }

        //crie um metodo tostring que retorna um json do objeto completo
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
                "horatrabalhada" => $this->horatrabalhada,
                "horasextras" => $this->horasextras
            ));
        }
    }

    $secretaria1 = new Secretaria("Joana", "123.456.789-00", "Rua 1", "Pedro", "Ana", "123456789", "123456789", "123", "Secretaria", "6", "2");
    $secretaria2 = new Secretaria("Maria", "987.654.321-00", "Rua 2", "Marcelo", "Carol", "987654321", "987654321", "456", "Secretaria", "8", "2");
    var_dump($secretaria1);
    var_dump($secretaria2);
?>