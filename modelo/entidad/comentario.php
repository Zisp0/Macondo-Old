<?php
    class comentario{
        public $idComentario;
        public $contenido;
        public $fecha;
        public $hora;
        public $estado;
        public $idPublicacion;
        public $idUsuario;

        public function __construct($idComentario,$contenido,$fecha,$hora,$estado,$idPublicacion,$idUsuario){
            $this->idComentario = $idComentario;
            $this->contenido = $contenido;
            $this->fecha = $fecha;
            $this->hora = $hora;
            $this->estado = $estado;
            $this->idPublicacion = $idPublicacion;
            $this->idUsuario = $idUsuario;
        }

        //getter

        public function getIdComentario(){
            return $this->idUsuario;
        }
        public function getContenido(){
            return $this->contenido;
        }
        public function getFecha(){
            return $this->fecha;
        }
        public function getHora(){
            return $this->hora;
        }
        public function getEestado(){
            return $this->estado;
        }
        public function getIdPublicacion(){
            return $this->idPublicacion;
        }
        public function getId(){
            return $this->idUsuario;
        }

        //setter

         public function setIdComentario($idComentario){
            $this->idComentario = $idComentario;
            return $this;
        }
        public function setContenido($contenido){
            $this->contenido = $contenido;
            return $this;
        }
        public function setFecha($fecha){
            $this->fecha = $fecha;
            return $this;
        }
        public function setHora($hora){
            $this->hora = $hora;
            return $this;
        }
        public function setEstado($estado){
            $this->estado = $estado;
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