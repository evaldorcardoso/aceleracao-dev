<?php
    abstract class SaborDecorator implements IPao{
        protected $pao;

        public function __construct(IPao $pao){
            $this->pao = $pao;
        }
    }
?>