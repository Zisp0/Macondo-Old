<?php
    session_start();

    $nombreUsuario = $_SESSION['PRIMER_NOMBRE_USUARIO'] . ' ' . $_SESSION['PRIMER_APELLIDO_USUARIO'] . ' ' . $_SESSION['SEUDONIMO_USUARIO'];
    exit($nombreUsuario)
?>