<?php
    require_once(__DIR__."/../../modelo/dao/preferenciaUsuarioDAO.php");
               
    function registrarPreferencia($preferencia){
        $dao=new preferenciaUsuarioDAO();
        return $dao->registrarPreferencia($preferencia);
    }

    function buscarPreferencia($preferencia){
        $dao=new preferenciaUsuarioDAO();
        return $dao->buscarPreferencia($preferencia);
    }
?>