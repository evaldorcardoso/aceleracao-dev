<?php
    interface IAnimal {
        public function getNomeEspecie():String;
        public function getNomeAnimal():String;
    }

    interface IFerramentas {
        public function filtraEspecie(Array $completo, String $especieFiltrar): Array;
        public function classificaEspecies(Array $completo);
    }

    class Animal implements IAnimal {
        private $nomeEspecie;
        private $nomeAnimal;

        public function __construct(String $nomeEspecie, String $nomeAnimal) {
            $this->nomeEspecie = $nomeEspecie;
            $this->nomeAnimal = $nomeAnimal;
        }

        public function getNomeEspecie():String {
            return $this->nomeEspecie;
        }

        public function getNomeAnimal():String {
            return $this->nomeAnimal;
        }
    }

    class Ferramentas implements IFerramentas{
        public function filtraEspecie(Array $completo, String $especieFiltrar): Array {
            $resultado = array();
            foreach ($completo as $animal) {
                if ($animal->getNomeEspecie() == $especieFiltrar) {
                    array_push($resultado, $animal);
                }
            }
            return $resultado;
        }

        public function classificaEspecies(Array $completo) {
            $resultado = array();
            foreach ($completo as $animal) {
                if (!in_array($animal->getNomeEspecie(), $resultado)) {
                    $resultado[] = $animal->getNomeEspecie();
                }
            }
            return $resultado;
        }
    }

    class Resultado {
        private String $nomeEspecie;
        private int $quantidade;

        public function __construct(String $nomeEspecie, int $quantidade) {
            $this->nomeEspecie = $nomeEspecie;
            $this->quantidade = $quantidade;
        }

        public function getNomeEspecie(): String {
            return $this->nomeEspecie;
        }

        public function getQuantidade(): int {
            return $this->quantidade;
        }        
    }

    //O método deve contabilizar o número de animais disponíveis em cada uma das espécies e retornar os resultados como um vetor de objetos da classe Resultado
    function meuMetodo(Array $objetos, Ferramentas $ferramenta):Array{
        $resultado = array();
        $especies = $ferramenta->classificaEspecies($objetos);
        foreach ($especies as $especie) {
            $quantidade = count($ferramenta->filtraEspecie($objetos, $especie));
            $resultado[] = new Resultado($especie, $quantidade);
        }
        return $resultado;
    }

    $animal1 = new Animal("Cachorro", "Bobby");
    $animal2 = new Animal("Gato", "Napoleão");
    $animal3 = new Animal("Pato", "Jubileu");
    $animal4 = new Animal("Cachorro", "Maya");
    $animal5 = new Animal("Gato", "Joana");
    $animal6 = new Animal("Cavalo", "Marceu");
    $animal7 = new Animal("Cachorro", "Azulão");
    $animal8 = new Animal("Gato", "Bianca");

    $animais = array($animal1, $animal2, $animal3, $animal4, $animal5, $animal6, $animal7, $animal8);

    $ferramentas = new Ferramentas();
    $resultado = meuMetodo($animais, $ferramentas);
    foreach($resultado as $animal) {
        echo $animal->getNomeEspecie() . ": " . $animal->getQuantidade() . "<br>";
    }