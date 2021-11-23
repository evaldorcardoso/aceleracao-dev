<?php
    interface IServicos{
        public function calculaSalario(int $diasTrabalhados, String $cargo):String;
        public function calculaSalarioMaisGratificacao(int $diasTrabalhados, String
        $valorGravacao):String;
    }

    class Funcionarios implements IServicos{        
        private String $nome;
        private float $salarioPadrao = 6.500;
        private float $salarioPadrao2 = 4.970;
        private float $valorDiaTrabalhado;
        private int $diasTrabalhados;

        public function __construct(String $nome){
            $this->nome = $nome;
        }

        public function calculaSalario(int $diasTrabalhados, String $cargo):String{
            $this->diasTrabalhados = $diasTrabalhados;
            $this->valorDiaTrabalhado = $this->salarioPadrao / 30;
            if($diasTrabalhados >= 15){
                return "<p>Olá, {$this->nome}, seu salário está completo, valor recebido por dia: {$this->valorDiaTrabalhado}</p>";
            }else{
                return "<p>Olá, {$this->nome}, seu salário está com desconto, valor recebido por dia: ".$this->valorDiaTrabalhado - (($this->valorDiaTrabalhado * 30) / 100).'</p>';
            }            
        }

        public function calculaSalarioMaisGratificacao(int $diasTrabalhados, String
        $valorGravacao):String{
            $this->diasTrabalhados = $diasTrabalhados;
            $this->valorDiaTrabalhado = $this->salarioPadrao2 / 30;
            $porcentagem = 0;
            $totalReceber = 0;
            if($this->diasTrabalhados <=9){ 
                $porcentagem = 20;
            }
            else if($this->diasTrabalhados >= 10 && $this->diasTrabalhados <= 15){ 
                $porcentagem = 50;
            }
            $totalReceber = $this->valorDiaTrabalhado + ($this->valorDiaTrabalhado * $porcentagem / 100);
            return "<p>Olá, {$this->nome}, seu salário está completo com {$porcentagem}% de gratificação, valor recebido por dia: {$totalReceber}</p>";
        }
    }

    $funcionario = new Funcionarios('João');
    echo $funcionario->calculaSalario(15, 'Desenvolvedor de Sistemas');
    echo $funcionario->calculaSalarioMaisGratificacao(15, 999);
?>
