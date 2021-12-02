<?php
    class comentario{
        public $idReaccionComentario;
        public $tipo;
        public $idComentario;
        public $idUsuario;

        public function __construct($idReaccionComentario,$tipo,$idComentario,$idUsuario){
            $this->idReaccionComentario = $idReaccionComentario;
            $this->tipo = $tipo;
            $this->idComentario = $idComentario;
            $this->idUsuario = $idUsuario;
        }

        //getter

        public function getIdReaccionComentario(){
            return $this->idReaccionComentario;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function getIdComentario(){
            return $this->idComentario;
        }
        public function getId(){
            return $this->idUsuario;
        }

        //setter

         public function setIdReaccionComentario($idReaccionComentario){
            $this->idReaccionComentario = $idReaccionComentario;
            return $this;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
            return $this;
        }
        public function setIdComentario($idComentario){
            $this->idComentario = $idComentario;
            return $this;
        }
        public function setId($idUsuario){
            $this->idUsuario = $idUsuario;
            return $this;
        }

    }

?>