<?php   
    require_once 'exercicio68.php';
    require_once 'exercicio69.php';

    interface IAnimalOrcamento extends IAnimal{
        public function orcamentoGastosAnimal(): ItemOrcamentoComplexo;
    } 

    class AnimalOrcamento implements IAnimalOrcamento{
        private Animal $animal;
        private ItemOrcamento $orcamento;

        public function __construct(Animal $animal, ItemOrcamento $orcamento){
            $this->animal = $animal;
            $this->orcamento = $orcamento;
        }

        public function getNomeEspecie():String{
            return $this->animal->getNomeEspecie();
        }

        public function getNomeAnimal():String{
            return $this->animal->getNomeAnimal();
        }

        public function getOrcamento(){
            return $this->orcamento;
        }

        public function orcamentoGastosAnimal(): ItemOrcamentoComplexo{            
            return new ItemOrcamentoComplexo($this->orcamento->getHistorico(), $this->orcamento->getValor(), Array( $this->orcamento));
        }
    }

    function gastos(Array $animaisOrcamento):Array{
        $gastos = [];
        foreach($animaisOrcamento as $animalOrcamento){
            $orcamento = $animalOrcamento->getOrcamento();
            if($orcamento->getHistorico() === 'vacina W'){
                $gastos[] = $animalOrcamento->orcamentoGastosAnimal();
            }
        }
        return $gastos;
    }

    $listaAnimaisOrcamento[] = new AnimalOrcamento($animal1, new ItemOrcamento('vacina X', 100));
    $listaAnimaisOrcamento[] = new AnimalOrcamento($animal2, new ItemOrcamento('vacina Y', 90));
    $listaAnimaisOrcamento[] = new AnimalOrcamento($animal3, new ItemOrcamento('vacina Z', 100));
    $listaAnimaisOrcamento[] = new AnimalOrcamento($animal4, new ItemOrcamento('vacina W', 400));
    $listaAnimaisOrcamento[] = new AnimalOrcamento($animal5, new ItemOrcamento('vacina W', 450));
    $listaAnimaisOrcamento[] = new AnimalOrcamento($animal6, new ItemOrcamento('vacina X', 200));
    $listaAnimaisOrcamento[] = new AnimalOrcamento($animal7, new ItemOrcamento('vacina Z', 100));
    $listaAnimaisOrcamento[] = new AnimalOrcamento($animal8, new ItemOrcamento('vacina W', 400));
    
    var_export(gastos($listaAnimaisOrcamento));
    
    
    

