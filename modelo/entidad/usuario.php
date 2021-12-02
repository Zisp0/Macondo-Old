<?php

    //Esta clase POJO sirve para guardar los datos de un Usuario
    //Por ejemplo, un objeto creado a partir de esta clase
    //tendrá guardado los datos de un usuario de la tabla Usuarios de la
    //base de datos

    class usuario{
        public $idUsuario;
        public $primerNombre;
        public $segundoNombre;
        public $primerApellido;
        public $segundoApellido;
        public $seudonimo;
        public $rol;
        public $foto;
        public $estado;
        public $correo;
        public $contrasena;
        
        
        public function __construct($idUsuario, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $seudonimo, $rol, $foto, $estado, $correo, $contrasena){

            $this->idUsuario = $idUsuario;
            $this->primerNombre = $primerNombre;
            $this->segundoNombre = $segundoNombre;
            $this->primerApellido = $primerApellido;
            $this->segundoApellido = $segundoApellido;
            $this->seudonimo = $seudonimo;
            $this->rol = $rol;
            $this->foto = $foto;
            $this->estado = $estado;
            $this->correo = $correo;
            $this->contrasena = $contrasena;
        }
        
        // Métodos GET
        public function getId(){
            return $this->idUsuario;
        }

        public function getPrimerNombre(){
            return $this->primerNombre;
        }

        public function getSegundoNombre(){
            return $this->segundoNombre;
        }

        public function getPrimerApellido(){
            return $this->primerApellido;
        }

        public function getSegundoApellido(){
            return $this->segundoApellido;
        }

        public function getSeudonimo(){
            return $this->seudonimo;
        }

        public function getRol(){
            return $this->rol;
        }

        public function getFoto(){
            return $this->foto;
        }

        public function getEstado(){
            return $this->estado;
        }

        public function getCorreo(){
            return $this->correo;
        }

        public function getContrasena(){
            return $this->contrasena;
        }

        //Métodos SET
        public function setId($idUsuario){
            $this->idUsuario = $idUsuario;
            return $this;
        }

        public function setPrimerNombre($primerNombre){
            $this->primerNombre = $primerNombre;
            return $this;
        }

        public function setSegundoNombre($segundoNombre){
            $this->segundoNombre = $segundoNombre;
            return $this;
        }

        public function setPrimerApellido($primerApellido){
            $this->primerApellido = $primerApellido;
            return $this;
        }

        public function setSegundoApellido($segundoApellido){
            $this->segundoApellido = $segundoApellido;
            return $this;
        }

        public function setSeudonimo($seudonimo){
            $this->seudonimo = $seudonimo;
            return $this;
        }

        public function setRol($rol){
            $this->rol = $rol;
            return $this;
        }

        public function setFoto($foto){
            $this->foto = $foto;
            return $this;
        }

        public function setEstado($estado){
            $this->estado = $estado;
            return $this;
        }

        public function setCorreo($correo){
            $this->correo = $correo;
            return $this;
        }

        public function setContrasena($contrasena){
            $this->contrasena = $contrasena;
            return $this;
        }
    }
?>