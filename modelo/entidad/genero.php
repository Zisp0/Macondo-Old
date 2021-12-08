<?php
    class comentario{
        public $genero;
        public $tipo;

        public function __construct($genero,$tipo){
            $this->genero = $genero;
            $this->tipo = $tipo;
        }
        //getter

        public function getGenero(){
            return $this->genero;
        }
        public function getTipo(){
            return $this->tipo;
        }


        //setter

         public function setGenero($genero){
            $this->genero = $genero;
            return $this;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
            return $this;
        }


    }

?>