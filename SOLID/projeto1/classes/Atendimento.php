<?php    
    class Atendimento{
        private String $protocolo;
        private Grupo $grupo;
        private Atendente $atendente;
        private Tecnico $tecnico;
        private Aluno $aluno;
        private TipoServico $tipo;
        private int $idCategoria;
        private int $idItem;

        public function __construct(String $protocolo, Grupo $grupo, Atendente $atendente, Tecnico $tecnico, 
                                Aluno $aluno, TipoServico $tipo, int $idCategoria, int $idItem){
            $this->protocolo = $protocolo;
            $this->grupo = $grupo;
            $this->atendente = $atendente;
            $this->tecnico = $tecnico;
            $this->aluno = $aluno;
            $this->tipo = $tipo;
            $this->idCategoria = $idCategoria;
            $this->idItem = $idItem;
        }

        
    }