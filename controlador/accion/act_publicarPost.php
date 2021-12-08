<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbPublicacion.php");
    require_once (__DIR__."/../../modelo/entidad/publicacion.php");

    $titulo = $_GET['titulo'];
    $contenido = $_GET['contenido'];
    $tipo = $_GET['tipo'];
    $fecha = $_GET['fecha'];
    $hora = $_GET['hora'];
    $idUsuario = $_SESSION['ID_USUARIO'];
        
    $publicacion = new publicacion($tipo, NULL, $titulo, $fecha, $contenido, 1, $hora, $idUsuario);
    $registro = crearPublicacion($publicacion);

    if($registro){
        exit("si");
    } else{
        exit("no");
    }
?>