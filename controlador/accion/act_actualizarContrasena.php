<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbUsuario.php");

    $idUsuario = $_SESSION['ID_USUARIO'];
    $contrasenaActual = $_POST['contrasenaActual'];
    $nuevaContrasena = $_POST['contrasenaNueva'];

    $usuario = buscarUsuarioPorId($idUsuario);

    if($usuario->getContrasena() == $contrasenaActual){

        $respuesta = actualizarContrasena($idUsuario, $nuevaContrasena);
        
        if($respuesta != null){
            exit("si");
        }else{
            exit("no");
        }
    }else{
        exit("error");
    }
?>