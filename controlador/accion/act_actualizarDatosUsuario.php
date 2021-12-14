<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/usuario.php");

    $idUsuario = $_SESSION['ID_USUARIO'];
    $primerNombre = $_GET['primerNombre'];
    $segundoNombre = $_GET['segundoNombre'];
    $primerApellido = $_GET['primerApellido'];
    $segundoApellido = $_GET['segundoApellido'];
    $seudonimo = $_GET['seudonimo'];

    $usuario = new usuario($idUsuario, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $seudonimo, null, null, null, null, null);

    $respuesta = actualizarDatosUsuario($usuario);

    if($respuesta != null){
        $_SESSION['PRIMER_NOMBRE_USUARIO'] = $primerNombre;
        $_SESSION['PRIMER_APELLIDO_USUARIO'] = $primerApellido;
        $_SESSION['SEUDONIMO_USUARIO'] = $seudonimo;
        exit("si");
    }else{
        exit("no");
    }
?>