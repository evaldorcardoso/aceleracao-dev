<?php
    class Edicoes {
        private int $ano;
        private int $qntArtigos;
        private int $numEdition;

        public function __construct(int $ano, int $qntArtigos, int $numEdition) {
            $this->ano = $ano;
            $this->qntArtigos = $qntArtigos;
            $this->numEdition = $numEdition;
        }

        public function getEdicao():Edicoes{
            return $this;
        }

        public function setEdicao(Edicoes $edicao):void{
            $this->ano = $edicao->ano;
            $this->qntArtigos = $edicao->qntArtigos;
            $this->numEdition = $edicao->numEdition;
        }
    }

    class Revistas {
        private $codigo;
        private $titulo;
        private $tipo;
        private Edicoes $edicoes;

        public function __construct(int $codigo, string $titulo, string $tipo) {
            $this->codigo = $codigo;
            $this->titulo = $titulo;
            $this->tipo = $tipo;
        }

        public function getEdicao():Edicoes{
            return $this->edicoes;
        }

        public function setEdicao($ano, $qntArtigos, $numEdition):void{
            $this->edicoes = new Edicoes($ano, $qntArtigos, $numEdition);
        }
    }