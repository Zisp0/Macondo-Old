<?php
    require_once(__DIR__."/../../modelo/dao/comentarioDAO.php");

    function buscarComentarios(){
        $dao=new comentarioDAO();
        return $dao->buscarComentarios();
    }
?>