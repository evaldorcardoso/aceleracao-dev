<?php
    interface Pagamento{
        public function status();
        public function verificaMeioPagamento():Bool;
        public function mostraQuantidadeParcelas():Bool;
        public function aplicaDesconto():Bool;
        public function aplicaJuros():Bool;
        public function aplicaTaxa():Bool;
        public function removeTaxa():Bool;
        public function atualizaStatus():String;
        public function criaIdentificador(Aluno $aluno, String $hash):Bool;
    }