<?php
    require_once(__DIR__."/../../modelo/dao/comentarioDAO.php");

    function buscarComentarios(){
        $dao=new comentarioDAO();
        return $dao->buscarComentarios();
    }

    function crearComentario($comentario){
        $dao=new comentarioDAO();
        return $dao->crearComentario($comentario);
    }

    function actualizarEstadoComentario($idComentario, $estado) {
        $dao=new comentarioDAO();
        return $dao->actualizarEstadoComentario($idComentario, $estado);
    }

    function cargarComentarios($inicio, $idPublicacion) {
        $dao=new comentarioDAO();
        return $dao->cargarComentarios($inicio, $idPublicacion);
    }
   
?>