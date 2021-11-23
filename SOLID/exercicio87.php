<?php
    interface IDatabase{

        public function insert();
        public function update();
        public function delete();
    }

    class MySqlDatabase implements IDatabase{

        public function insert(){}
        public function update(){}
        public function delete(){}
    }
    
    class BudgetReport{
        private IDatabase $database;

        public function __construct(IDatabase $database){
            $this->database = $database;
        }

        public function open($date){
            //implementacao do metodo
        }
        public function save(IDatabase $database){
            //implementacao do metodo
        }
    }

    