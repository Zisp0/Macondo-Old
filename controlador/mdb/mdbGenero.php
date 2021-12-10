<?php
    require_once(__DIR__."/../../modelo/dao/generoDAO.php");
               
    function buscarGeneroPorTipo($tipo){
        $dao=new generoDAO();
        return $dao->buscarGeneroPorTipo($tipo);
    }
?>