<?php
    interface Aves
    {
        public function andar();
        public function nadar();
    }

    interface AvesQueVoam extends Aves
    {
        public function voar();
    }

    class Pato implements Aves
    {
        public function nadar()
        {
        //lógica
        }
        public function andar()
        {
        //lógica
        }
    }

    class Pinguim implements Aves
    {
        public function nadar()
        {
        //lógica
        }
        public function andar()
        {
        //lógica
        }
    }
    class Andorinha implements Aves, AvesQueVoam
    {
        public function voar()
        {
        //lógica
        }
        public function nadar()
        {
        //lógica
        }
        public function andar()
        {
        //lógica
        }
    }