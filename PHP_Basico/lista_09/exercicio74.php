<?php
    class CorrentistaDespesa extends Correntista{
        private DespesasIndividuo $despesasPrevistas;

        public function __construct(String $cpfCliente, float $saldo, DespesasIndividuo $despesas){
            parent::__construct($cpfCliente, $saldo);
            $this->despesasPrevistas = $despesas;
        }

        public function getDespesasPrevistas():DespesasIndividuo{
            return $this->despesasPrevistas;
        }
    }

    function obtemDespesasPossiveis(Array $despesasCorrentista):Array{
        $despesasPossiveis = [];
        foreach($despesasCorrentista as $despesa){
            if($despesa->getValorMes('03') <= parent::getSaldoMes('03')){
                $despesasPossiveis[] = $despesa;
            }
        }
        return $despesasPossiveis;
    }

