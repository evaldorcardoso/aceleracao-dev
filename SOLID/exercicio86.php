<?php
    interface ICompacta{
        public function compactar(File $file);
    }
    
    class File{
        private int $size;

        public function __construct(int $size){
            $this->size = $size;
        }

        public function zip(ICompacta $tipo){
            $tipo->compactar($this);
        }

    }

    class CompactaRar implements ICompacta{
    
        public function compactar(File $file){
            //faz a compactação em .rar
        }

    }

    /**
     * OBS:
     * CASO SEJA NECESSÁRIO CRIAR OUTRAS FORMAS DE COMPACTAÇÃO, BASTA CRIAR OUTRAS 
     * CLASSES IMPLEMENTANDO A INTERFACE ICompacta
     * **/

    class Image extends File{
        private int $width;
        private int $height;

        public function __construct(int $size, int $width, int $height){
            parent::__construct($size);
            $this->width = $width;
            $this->height = $height;
        }
    }

    class Audio extends File{
        private String $codec;
        private $duration;

        public function __construct(int $size, String $codec, int $duration){
            parent::__construct($size);
            $this->codec = $codec;
            $this->duration = $duration;
        }
    }

    class Text extends File{
        private int $fontSize;

        public function __construct(int $size, int $fontSize){
            parent::__construct($size);
            $this->fontSize = $fontSize;
        }
    }

