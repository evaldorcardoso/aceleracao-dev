<?php
    require_once '../interfaces/Pagamento.php';

    class Cartao implements Pagamento{
        private int $id;
        private String $tipo;
        private Conta $conta;

        public function __construct($id, $tipo, Conta $conta){
            $this->id = $id;
            $this->tipo = $tipo;
            $this->conta = $conta;
        }

        public function status():String{
            return "";
        }

        public function verificaMeioPagamento():Bool{
            return true;
        }

        public function mostraQuantidadeParcelas():Bool{
            return true;
        }

        public function aplicaDesconto():Bool{
            return true;
        }

        public function aplicaJuros():Bool{
            return true;
        }

        public function aplicaTaxa():Bool{
            return true;
        }

        public function removeTaxa():Bool{
            return true;
        }

        public function atualizaStatus():String{
            return "";
        }

        public function criaIdentificador(Aluno $aluno, String $hash):Bool{
            return true;
        }
    }