<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbPublicacion.php");

    $idPublicacion= $_POST['id'];
    $estado = $_POST['estado'];

    $respuesta = actualizarEstadoPublicacion($idPublicacion, $estado);

    if($respuesta != null){
        exit("si");
    }else{
        exit("no");
    }
?>