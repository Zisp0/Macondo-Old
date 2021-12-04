<?php
    require_once(__DIR__."/../../modelo/dao/publicacionDAO.php");
               
    function cargarPublicaciones($inicio){
        $dao=new publicacionDAO();
        return $dao->verPublicaciones($inicio);;
    }

?>