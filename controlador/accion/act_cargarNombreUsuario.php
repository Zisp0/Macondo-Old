<?php
    session_start();

    $nombreUsuario = $_SESSION['PRIMER_NOMBRE_USUARIO'];
    exit($nombreUsuario);
?>