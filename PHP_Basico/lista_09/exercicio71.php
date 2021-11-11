<?php
    interface MovimentoConta{
        public function getCPFCorrentista():String;
        public function getValorMovimento():float;
    }

    interface OperacoesBanco {
        public function encontraCorrentista(Array $todosCorrentistas, String $cpfProcurado):Correntista;
    }

    class Correntista{
        private String $cpfCliente;
        private float $saldo;

        public function __construct(String $cpfCliente, float $saldo){
            $this->cpfCliente = $cpfCliente;
            $this->saldo = $saldo;
        }

        public function getCpfCliente(){
            return $this->cpfCliente;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setSaldo(float $saldo){
            $this->saldo += $saldo;
        }
    }

    class Movimento implements MovimentoConta{
        private String $cpfCorrentista;
        private float $valorMovimento;

        public function __construct(String $cpfCorrentista, float $valor){
            $this->cpfCorrentista = $cpfCorrentista;
            $this->valorMovimento = $valor;
        }

        public function getCPFCorrentista():String{
            return $this->cpfCorrentista;
        }

        public function getValorMovimento():float{
            return $this->valorMovimento;
        }

        public function setValorMovimento(float $valor){
            $this->valorMovimento = $valor;
        }
    }

    class Operacao implements OperacoesBanco{
        
        public function encontraCorrentista(Array $todosCorrentistas, String $cpfProcurado):Correntista{
            foreach($todosCorrentistas as $correntista){
                if($correntista->getCpfCliente() == $cpfProcurado){
                    return $correntista;
                }
            }
            return null;
        }
    }