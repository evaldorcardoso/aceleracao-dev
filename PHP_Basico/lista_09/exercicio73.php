<?php
    class DespesaMes{
        private int $mes;
        private float $valor;

        public function __construct(String $mes, float $valor){
            $this->mes = $mes;
            $this->valor = $valor;
        }

        public function getMes(){
            return $this->mes;
        }

        public function getValor(){
            return $this->valor;
        }
    }

    class DespesaDia extends DespesaMes{
        private int $dia;

        public function __construct(int $mes, float $valor, int $dia) {
            parent::__construct($mes, $valor);
            $this->dia = $dia;
        }

        public function getDia() {
            return $this->dia;
        }        
    }

    class DespesasIndividuo {
        private Array $despesasMes;
        private Array $despesasDia;
        private String $cpf;

        public function __construct(String $cpf, Array $despesasMes = [], Array $despesasDia = []) {
            $this->cpf = $cpf;
            $this->despesasMes = $despesasMes;
            $this->despesasDia = $despesasDia;
        }

        public function getCpf() {
            return $this->cpf;
        }

        public function totalizaMes(int $mes):DespesaMes{
            $total = 0;
            foreach($this->despesasMes as $despesa){
                if($despesa->getMes() == $mes){
                    $total += $despesa->getValor();
                }
            }
            return new DespesaMes($mes, $total);
        }
    }