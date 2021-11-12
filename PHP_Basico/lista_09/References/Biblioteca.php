<?php
    namespace References;
    class Biblioteca{
        private $livros = array();
        private $autores = array();
        private $editoras = array();
        private $generos = array();
        private $livros_autores = array();

        public function __construct(){
            $this->livros = array(
                array(
                    'id' => 1,
                    'titulo' => 'Aprendendo PHP',
                    'ano' => '2017',
                    'genero' => 'Programação',
                    'editora' => 'Editora 1',
                    'autor' => 'Autor 1'
                ),
                array(
                    'id' => 2,
                    'titulo' => 'Aprendendo PHP 2',
                    'ano' => '2017',
                    'genero' => 'Programação',
                    'editora' => 'Editora 2',
                    'autor' => 'Autor 2'
                ));
        }
    }