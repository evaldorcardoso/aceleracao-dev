<?php
    class Livro{
        private String $titulo;
        private String $autor;
        private $ano;
        private int $edicao;
        private String $editora;
        private String $isbn;        
    }

    class Exemplar{
        private int $codigo;
        private Bool $cativa;
        private Bool $emprestada;
    }

    class Emprestimo{
        private $dataDeEmprestimo;
        private $dataPrevistaDeDevolucao;
        private $dataDeEntregaReal;
        private int $situacao;
    }

    class Usuario{
        private String $nome;
        private int $cpf;
        private String $telefone;
        private String $matricula;
    }