<?php
    require_once '../interfaces/Pagamento.php';

    class PIX extends Conta implements Pagamento{
        private int $id;
        private String $chave;
        private String $conta;

        public function __construct($id, $chave, $conta){
            $this->id = $id;
            $this->chave = $chave;
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