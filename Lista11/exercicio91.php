<?php
    interface ICupomCarro{
        public function calcularDesconto():float;
    }

    abstract class Carro implements ICupomCarro{
        protected $is4x4;
        protected $ret;
        protected $esportivo;

        public function __construct($is4x4, $ret, $esportivo){
            $this->is4x4 = $is4x4;
            $this->ret = $ret;
            $this->esportivo = $esportivo;
        }
    }

    class BMW extends Carro{
        private $discount = 0;

        public function calcularDesconto():float{
            if(!$this->is4x4) 
            {
                $this->discount += 5;
            }
            if($this->ret) 
            {
                $this->discount += 7;
            }
            if($this->esportivo) 
            {
                $this->discount += 9;
            }
            return $this->discount;
        }
    }

    class Mercedes extends Carro{
        private $discount = 0;

        public function calcularDesconto():float{
            if(!$this->is4x4) 
            {
                $this->discount += 10;
            }
            if($this->ret) 
            {
                $this->discount += 18;
            }
            if($this->esportivo) 
            {
                $this->discount += 19;
            }
            return $this->discount;
        }
    }

    class Uno extends Carro{
        private $discount = 0;

        public function __construct($is4x4, $esportivo){
            $this->is4x4 = $is4x4;
            $this->esportivo = $esportivo;
        }

        public function calcularDesconto():float{
            if($this->is4x4) 
            {
                $this->discount += 10;
            }
            if($this->esportivo) 
            {
                $this->discount += 15;
            }
            return $this->discount;
        }
    }

    function geradorDeCupom(ICupomCarro $car)
    {
        return $cupom = "Cupom {$car->calcularDesconto()}% off para passar no pedágio";
    }
    echo '<p>Carro BMW: '.geradorDeCupom(new BMW(false, false, true));
    echo '<p>Carro Mercedes: '.geradorDeCupom(new Mercedes(true, true, false));
    echo '<p>Carro Uno: '.geradorDeCupom(new Uno(false, true));