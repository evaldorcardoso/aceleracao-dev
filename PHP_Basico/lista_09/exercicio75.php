<?php
    class Turma{
        protected int $ano;
        protected String $nome_turma;
        protected Aluno $alunos;
        protected int $capacidade;

        public function __construct($ano, $nome_turma, $capacidade){
            $this->ano = $ano;
            $this->nome_turma = $nome_turma;
            $this->capacidade = $capacidade;
        }

        public function listarAlunos(){
            echo "Ano: " . $this->ano . "<br>";
            echo "Nome da turma: " . $this->nome_turma . "<br>";
            echo "Capacidade: " . $this->capacidade . "<br>";
            echo "Alunos: " . $this->alunos . "<br>";
        }

        public function exibeVagas(){
            echo "Vagas: x <br>";
        }

        public function adicionaAluno(Aluno $aluno){
            echo 'Aluno x adicionado com sucesso!<br>';
        }
    }

    class Aluno{
        private String $matricula;
        private String $nome;
        private String $sobrenome;
        private String $cpf;
        private String $rg;
        private int $idade;
        private int $nivelescolar;

        public function __construct(String $matricula, String $nome, String $sobrenome, String $cpf, String $rg, int $idade, int $nivelescolar){
            $this->matricula = $matricula;
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->cpf = $cpf;
            $this->rg = $rg;
            $this->idade = $idade;
            $this->nivelescolar = $nivelescolar;
        }

        public function realizaMatricula(){
            echo "Matricula realizada com sucesso!";
        }

        public function realizaRequerimento(){
            echo "Requerimento realizado com sucesso!";
        }

        public function solicitaCertificado(){
            echo "Certificado solicitado com sucesso!";
        }
    }

