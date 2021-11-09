<?php
    require_once('./exercicio66.php');

    class Empregado extends Pessoa{
        private $id;
        private $funcao;
        private $horarioEntrada;
        private $horarioSaida;
        private $salario;
        private $horasExtras;

        //crie um construtor completo capaz de acessar o construtor da classe herdada.
        public function __construct($nome, $CPF, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao, $id, $funcao, $horarioEntrada, $horarioSaida, $salario, $horasExtras){
            parent::__construct($nome, $CPF, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao);
            $this->id = $id;
            $this->funcao = $funcao;
            $this->horarioEntrada = $horarioEntrada;
            $this->horarioSaida = $horarioSaida;
            $this->salario = $salario;
            $this->horasExtras = $horasExtras;
        }

        public function getSalario(){
            return $this->salario;
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
                "horarioEntrada" => $this->horarioEntrada,
                "horarioSaida" => $this->horarioSaida,
                "salario" => $this->salario,
                "horasExtras" => $this->horasExtras
            ));
        }
    }

    $empregado1 = new Empregado("João", "123.456.789-00", "Rua A", "Pai", "Mãe", "123.456.789-00", "1234567890123", "1", "Programador", "08:00", "18:00", "2000", "0");
    $empregado2 = new Empregado("Maria", "123.456.789-00", "Rua B", "Pai", "Mãe", "123.456.789-00", "1234567890123", "2", "Programador", "08:30", "18:30", "6000", "30");
    $empregado3 = new Empregado("José", "123.456.789-00", "Rua C", "Pai", "Mãe", "123.456.789-00", "1234567890123", "3", "Programador", "08:00", "18:00", "4000", "0");
    $empregados = array($empregado1, $empregado2, $empregado3);
    for($i = 0; $i < count($empregados); $i++){
        for($j = 0; $j < count($empregados) - 1; $j++){
            if($empregados[$j]->getSalario() > $empregados[$j + 1]->getSalario()){
                $aux = $empregados[$j];
                $empregados[$j] = $empregados[$j + 1];
                $empregados[$j + 1] = $aux;
            }
        }
    }
    
    foreach($empregados as $empregado){
        var_dump($empregado);
    }

?>