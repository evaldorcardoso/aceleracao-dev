<?php
    class Plano{
        private $x;
        private $y;
        //Métodos:
        public function __construct($x = 0, $y = 0){
            $this->x = $x;
            $this->y = $y;
        }
        public function __destruct(){
            //echo "Objeto removido";
        }
        public function __toString(){
            return "($this->x, $this->y)";
        }
        public function getX(){
            return $this->x;
        }
        public function getY(){
            return $this->y;
        }
        //Métodos para definir o local do ponto a partir de outro ponto;
        public function setPosicaoPonto(Plano $p){
            $this->x = $p->getX();
            $this->y = $p->getY();
        }
        //Método para setar uma nova posição para o ponto;
        public function setPosicao($x, $y){
            $this->x = $x;
            $this->y = $y;
        }
        //método que faça a comparação de pontos
        public function compara(Plano $p){
            if($this->x == $p->getX() && $this->y == $p->getY()){
                return true;
            }else{
                return false;
            }
        }
    }

    $p1 = new Plano(5, 30);
    $p2 = new Plano(10, 20);
    if($p1->compara($p2)){
        echo "<p>Pontos são iguais";
    }else{
        echo "<p>Pontos são diferentes";
    }
    $p1->setPosicaoPonto($p2);
    if($p1->compara($p2)){
        echo "<p>Pontos são iguais";
    }else{
        echo "<p>Pontos são diferentes";
    }
    $p1->setPosicao(50, 8);
?>