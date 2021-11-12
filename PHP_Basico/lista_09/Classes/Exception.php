<?php
    class Exception{
        private $message;
        
        public function __construct($message){
            $this->message = $message;
        }

        public function __destruct(){
            // echo $this->message;
        }

        public function getMessage(){
            return $this->message;
        }
    }
?>