<?php
    class comentario{
        public $idUsuario;
        public $idGenero;

        public function __construct($idUsuario,$idGenero){
            $this->idUsuario = $idUsuario;
            $this->idGenero = $idGenero;
        }

        //getter


        public function getIdUsuario(){
            return $this->idUsuario;
        public function getIdGenero(){
            return $this->idGenero;
        }

        //setter

        }
        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
            return $this;
        }
        public function setIdgenero($idGenero){
            $this->idGenero = $idGenero;
            return $this;
        }

    }

?>