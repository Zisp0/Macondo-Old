<?php
    class comentario{
        public $idPublicacion;
        public $idGenero;

        public function __construct($idPublicacion,$idGenero){
            $this->idPublicacion = $idPublicacion;
            $this->idGenero = $idGenero;
        }

        //getter


        public function getIdPublicacion(){
            return $this->idPublicacion;
        public function getIdGenero(){
            return $this->idGenero;
        }

        //setter

        }
        public function setIdPublicacion($idPublicacion){
            $this->idPublicacion = $idPublicacion;
            return $this;
        }
        public function setIdgenero($idGenero){
            $this->idGenero = $idGenero;
            return $this;
        }

    }

?>