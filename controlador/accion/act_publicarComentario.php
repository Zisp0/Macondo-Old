<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbComentario.php");
    require_once (__DIR__."/../../modelo/entidad/comentario.php");

    $idPublicaion = $_GET['idPublicaion'];
    $contenido = $_GET['comentario'];
    $idUsuario = $_SESSION['ID_USUARIO'];
    $fecha = $_GET['fecha'];
    $hora = $_GET['hora'];
        
    $comentario = new comentario(NULL, $contenido, $fecha, $hora, 1, $idPublicaion, $idUsuario);
    $registro = crearComentario($comentario);

    if($registro){
        exit("si");
    } else{
        exit("no");
    }
?>