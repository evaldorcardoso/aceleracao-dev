<?php
    interface ITiProfessional{
        public function makeSoftware();
    }

    class Company{
                
        public function createSoftware( ITiProfessional $designer, 
                                        ITiProfessional $programmer, 
                                        ITiProfessional $tester){
            echo "Criando software da empresa: ";            
            $designer->makeSoftware();
            $programmer->makeSoftware();
            $tester->makeSoftware();
        }

        public function buscaFuncionario(ITiProfessional $profissional){
            echo "Buscando funcionario: ";
            $profissional->makeSoftware();
        }
    }
    
    class Designer implements ITiProfessional{
        
        public function makeSoftware(){
            return 'faz a arquitetura do software';
        }        
    }

    class Programmer implements ITiProfessional{
        
        public function makeSoftware(){
            return 'escreve o codigo do software';
        }        
    }

    class Tester implements ITiProfessional{
        
        public function makeSoftware(){
            return 'testa o codigo do software';
        }        
    }


