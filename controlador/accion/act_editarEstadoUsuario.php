<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbUsuario.php");

    $idUsuario = $_POST['id'];
    $estado = $_POST['estado'];

    $respuesta = actualizarEstadoUsuario($idUsuario, $estado);

    if($respuesta != null){
        exit("si");
    }else{
        exit("no");
    }
?>