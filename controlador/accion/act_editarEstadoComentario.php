<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbComentario.php");

    $idComentario= $_POST['id'];
    $estado = $_POST['estado'];

    $respuesta = actualizarEstadoComentario($idComentario, $estado);

    if($respuesta != null){
        exit("si");
    }else{
        exit("no");
    }
?>