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
?>