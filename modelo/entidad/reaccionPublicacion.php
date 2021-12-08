<?php
    class comentario{
        public $idReaccionPublicacion;
        public $tipo;
        public $idComentario;
        public $idUsuario;

        public function __construct($idReaccionPublicacion,$tipo,$idComentario,$idUsuario){
            $this->idReaccionPublicacion = $idReaccionPublicacion;
            $this->tipo = $tipo;
            $this->idPublicacion = $idPublicacion;
            $this->idUsuario = $idUsuario;
        }

        //getter

        public function getIdReaccionPublicacion(){
            return $this->idReaccionPublicacion;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function getIdPublicacion(){
            return $this->idPublicacion;
        }
        public function getId(){
            return $this->idUsuario;
        }

        //setter

         public function setIdReaccionPublicacion($idReaccionPublicacion){
            $this->idReaccionPublicacion = $idReaccionPublicacion;
            return $this;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
            return $this;
        }
        public function setIdPublicacion($idPublicacion){
            $this->idPublicacion = $idPublicacion;
            return $this;
        }
        public function setId($idUsuario){
            $this->idUsuario = $idUsuario;
            return $this;
        }

    }

?>