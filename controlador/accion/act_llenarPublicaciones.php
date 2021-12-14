<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbPublicacion.php");
    require_once (__DIR__."/../mdb/mdbUsuario.php");

    $publicaciones = buscarPublicaciones();
    echo json_encode($publicaciones);
?>