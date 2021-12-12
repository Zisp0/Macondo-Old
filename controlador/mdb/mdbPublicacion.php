<?php
    require_once(__DIR__."/../../modelo/dao/publicacionDAO.php");
               
    function cargarPublicaciones($inicio){
        $dao=new publicacionDAO();
        return $dao->verPublicaciones($inicio);
    }

    function cargarPublicacionesPorTipo($inicio, $tipo){
        $dao=new publicacionDAO();
        return $dao->verPublicacionesPorTipo($inicio, $tipo);
    }

    function cargarPublicacionesPorUsuario($inicio, $idUsuario){
        $dao=new publicacionDAO();
        return $dao->verPublicacionesPorUsuario($inicio, $idUsuario);
    }

    function crearPublicacion($publicacion){
        $dao=new publicacionDAO();
        return $dao->crearPublicacion($publicacion);
    }

?>