<?php
    namespace PHP_Basico;
    class Biblioteca{
        private Array $listaUsuarios;
        private Array $listaItens;

        public function emprestar($usuario, $livro){}

        public function devolver($usuario, $livro){}

        public function reservar($usuario, $livro){}

        public function renovar($usuario, $livro){}

        public function punirAtrasos(){}

        public function limparReservas(){}
    }

    class Item{
        private $id;
        private $nome;
        private $autores;
        private $ano;
        private $penalidadeAtraso;
        private $tempoReserva;
        private $listaEmprestimos;
        private $listaReservas;

        public function estaEmprestado(){}

        public function estaReservado(){}
    }

    class Livro extends Item{
        private $id;
    }

    class Periodico extends Item{
        private $id;
    }

    class Midia extends Item{
        private $id;
    }

    class Monografia extends Item{
        private $id;
    }

    class Emprestimo{
        private Usuario $usuario;
        private Item $item;
        private $qtdRenovado;
        private $dataExpiracao;
        private Bool $status;
    }

    class Reserva{
        private Usuario $usuario;
        private Item $livro;
        private $status;
    }

    class Usuario{
        private $nome;
        private $login;
        private $senha;
        private $maxEmprestimos;
        private Array $listaEmprestimos;
        private Array $listaReservas;

        public function estaPunido(){}
    }

    class UsuarioComum extends Usuario{
        private $id;
    }

    class UsuarioEspecial extends Usuario{
        private $id;
    }