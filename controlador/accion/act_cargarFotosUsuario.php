<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbUsuario.php");

    $idUsuario = $_SESSION['ID_USUARIO'];
    $usuario = buscarUsuarioPorId($idUsuario);
    $url = $usuario->getFoto();
    if($url != NULL){
        exit($url);
    }else{
        exit("no");
    }
?>