<?php
    class ItemOrcamento{
        private String $historico;
        private float $valor;
        public function __construct(String $historico = '', float $valor = 0){
            $this->historico = $historico;
            $this->valor = $valor;
        }

        public function getHistorico():String{
            return $this->historico;
        }

        public function getValor():float{
            return $this->valor;
        }
    }

    class ItemOrcamentoComplexo extends ItemOrcamento{
        private Array $subitens;

        public function __construct(String $historico = '', float $valor= 0, Array $subitens= []){
            parent::__construct($historico, $valor);
            $this->subitens = $subitens;
        }

        public function getSubitens():Array{
            return $this->subitens;
        }

        public function getValor():float{
            $valor = 0;
            foreach($this->subitens as $subitem){
                $valor += $subitem->getValor();
            }
            return $valor;
        }

        public function encontraItem(String $historico):ItemOrcamento{
            foreach($this->subitens as $subitem){
                if($subitem->getHistorico() == $historico){
                    return $subitem;
                }
            }
            return null;
        }
    }