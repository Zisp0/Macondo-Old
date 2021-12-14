<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbUsuario.php");

    $usuarios = buscarUsuarios();
    echo json_encode($usuarios);
?>
