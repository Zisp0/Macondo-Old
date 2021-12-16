<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbComentario.php");

    $comentarios = buscarComentarios();
    echo json_encode($comentarios);
?>
