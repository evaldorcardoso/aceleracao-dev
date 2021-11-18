<?php
    interface Arma{

        public function usarArma():void;
    }

    class Machado implements Arma{

        public function usarArma():void{
            echo "Machado";
        }
    }

    class ArcoeFlexa implements Arma{

        public function usarArma():void{
            echo "Arco e Flecha";
        }
    }

    class Espada implements Arma{

        public function usarArma():void{
            echo "Espada";
        }
    }

    class Flecha implements Arma{
            
        public function usarArma():void{
            echo "Flecha";
        }
    }

    abstract class Personagem{
        private Arma $arma;

        public function atribuiArma(Arma $arma){
            $this->arma = $arma;
        }
        abstract public function lutar():void;
    }

    class Guerreiro extends Personagem{
        public function lutar():void{
            $this->arma->usarArma();
        }
    }

    class Rei extends Personagem{
        public function lutar():void{
            $this->arma->usarArma();
        }
    }

    class Rainha extends Personagem{
        public function lutar():void{
            $this->arma->usarArma();
        }
    }

    class Duende extends Personagem{
        public function lutar():void{
            $this->arma->usarArma();
        }
    }

    $guerreiro = new Guerreiro();
    $guerreiro->atribuiArma(new Machado());
    $guerreiro->lutar();