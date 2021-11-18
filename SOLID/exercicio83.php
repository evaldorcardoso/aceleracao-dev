<?php
    // interface ICreateSoftware{
    //     public function createSoftware(Designer $designer, 
                                        // Programmer $programmer, 
                                        // Tester $tester);
    // }

    interface ITiProfessional{
        public function makeSoftware();
    }

    class Company{
        // public function createSoftware(Array $professionals){
        //     foreach($professionals as $professional){
        //         if($professional instanceof ITiProfessional){
        //             $professional->makeSoftware();
        //         }
        //     }
        // }
        
        public function createSoftware( ITiProfessional $designer, 
                                        ITiProfessional $programmer, 
                                        ITiProfessional $tester){
            echo "Criando software da empresa";            
            $designer->makeSoftware();
            $programmer->makeSoftware();
            $tester->makeSoftware();
        }
    }
    
    class Designer implements ITiProfessional{
        
        public function makeSoftware(){
            //faz a arquitetura do software
        }        
    }

    class Programmer implements ITiProfessional{
        
        public function makeSoftware(){
            //escreve o codigo do software
        }        
    }

    class Tester implements ITiProfessional{
        
        public function makeSoftware(){
            //testa o codigo do software
        }        
    }


