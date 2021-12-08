<?php
    class publicacion{
        public $tipo;
        public $idPublicacion;
        public $titulo;
        public $fecha;
        public $contenido;
        public $estado;
        public $hora;
        public $idUsuario;

        public function __construct($tipo, $idPublicacion, $titulo, $fecha, $contenido, $estado, $hora, $idUsuario){
            $this->tipo = $tipo;
            $this->idPublicacion = $idPublicacion;
            $this->titulo = $titulo;
            $this->fecha = $fecha;
            $this->contenido = $contenido;
            $this->estado = $estado;
            $this->hora = $hora;
            $this->idUsuario = $idUsuario;
        }
        //getter

        public function getTipo(){
            return $this->tipo;
        }

        public function getIdPublicacion(){
            return $this->idPublicacion;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function getFecha(){
            return $this->fecha;
        }

        public function getContenido(){
            return $this->contenido;
        }

        public function getEstado(){
            return $this->estado;
        }
        public function getHora(){
            return $this->hora;
        }

        public function getIdUsuario(){
            return $this->idUsuario;
        }

        //setter
        public function setTipo($tipo){
            $this->tipo = $tipo;
            return $this;
        }

        public function setIdPubliacacion($idPublicacion){
            $this->iPubicacion = $idPubicacion;
            return $this;
        } 

        public function setTitulo($titulo){
            $this->titulo = $titulo;
            return $this;
        } 
        
        public function setFecha($fecha){
            $this->fecha = $fecha;
            return $this;
        }

        public function setContenido($contenido){
            $this->contenido = $contenido;
            return $this;
        }
        public function setEstado($estado){
            $this->estado = $estado;
            return $this;
        }
        
        public function setHora($hora){
            $this->hora = $hora;
            return $this;
        }

        public function setId($idUsuario){
            $this->idUsuario = $idUsuario;
            return $this;
        }

    }
?>