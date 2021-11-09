<?php
    class Porta{
        protected bool $aberta;
        protected string $cor;
        protected float $dimensaoX;
        protected float $dimensaoY;
        protected float $dimensaoZ;

        public function __construct(bool $aberta, string $cor, float $dimensaoX, float $dimensaoY, float $dimensaoZ){
            $this->aberta = $aberta;
            $this->cor = $cor;
            $this->dimensaoX = $dimensaoX;
            $this->dimensaoY = $dimensaoY;
            $this->dimensaoZ = $dimensaoZ;
        }

        public function abre(){
            echo '<p>Abrindo porta...';
            $this->aberta = true;
        }

        public function fecha(){
            $this->aberta = false;
        }
        
        public function pinta(string $cor){
            $this->cor = $cor;
        }

        public function getAberta(){
            return $this->aberta;
        }
        
    }

    class Imovel{
        protected $cor;
    
        public function __construct($cor){
            $this->cor = $cor;
        }

        public function pinta(String $s):void{
            $this->cor = $s;
        }

        public function totalDePortas():int{
            return 0;
        }

        public function quantasPortasEstaoAbertas():int{
            return 0;
        }
    }

    class Casa extends Imovel{
        private Porta $porta1;
        private Porta $porta2;
        private Porta $porta3;

        public function __construct(string $cor, Porta $porta1, Porta $porta2, Porta $porta3){
            parent::__construct($cor);
            $this->porta1 = $porta1;
            $this->porta2 = $porta2;
            $this->porta3 = $porta3;
        }

        public function totalDePortas():int{
            return 3;
        }

        public function quantasPortasEstaoAbertas():int{
            $total = 0;
            if($this->porta1->getAberta()){
                $total++;
            }
            if($this->porta2->getAberta()){
                $total++;
            }
            if($this->porta3->getAberta()){
                $total++;
            }
            return $total;
        }
    }

    class Edificio extends Imovel{
        private int $totalDePortas;
        private int $totalDeAndares;
        protected $portas;

        public function __construct(string $cor, int $totalDePortas, int $totalDeAndares, array $portas = array()){
            parent::__construct($cor);
            $this->totalDePortas = $totalDePortas;
            $this->totalDeAndares = $totalDeAndares;
            $this->portas = $portas;
        }

        public function adicionaPorta(Porta $porta){
            $this->portas[] = $porta;
        }

        public function quantasPortasEstaoAbertas():int{
            return count(array_filter($this->portas, function($porta){
                return $porta->getAberta();
            }));
        }

        public function totalDePortas():int{
            return count($this->portas);
        }
    }

    $porta1 = new Porta(false, "preto", 1, 2, 1);
    $porta2 = new Porta(false, "branco", 1, 2, 1);
    $porta3 = new Porta(false, "verde", 1, 2, 1);
    $porta3->pinta("azul");
    $casa = new Casa("azul", $porta1, $porta2, $porta3);
    echo "<p>A casa tem " . $casa->totalDePortas() . " porta(s). ";
    echo "<p>A casa tem " . $casa->quantasPortasEstaoAbertas() . " porta(s) aberta(s). ";


    $porta4 = new Porta(false, "branco", 1, 2, 1);
    $porta5 = new Porta(false, "branco", 1, 2, 1);
    $porta6 = new Porta(false, "branco", 1, 2, 1);
    $edificio = new Edificio("branco", 3, 2, [$porta4, $porta5]);
    $porta6->abre();
    $edificio->adicionaPorta($porta6);
    
    echo "<p>O edificio tem " . $edificio->totalDePortas() . " porta(s). ";
    echo "<p>O edificio tem " . $edificio->quantasPortasEstaoAbertas() . " porta(s) aberta(s). ";
?>