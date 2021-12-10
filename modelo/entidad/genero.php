<?php
    class genero{
        public $idGenero;
        public $tipo;

        public function __construct($idGenero,$tipo){
            $this->idGenero = $idGenero;
            $this->tipo = $tipo;
        }
        //getter

        public function getIdGenero(){
            return $this->idGenero;
        }
        public function getTipo(){
            return $this->tipo;
        }


        //setter

         public function setIdGenero($idGenero){
            $this->idGenero = $idGenero;
            return $this;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
            return $this;
        }


    }

?>