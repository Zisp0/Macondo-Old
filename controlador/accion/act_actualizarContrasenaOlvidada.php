<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbUsuario.php");

    $correo = $_SESSION['CORREO'];
    $nuevaContrasena = $_POST['contrasenaNueva'];

    $idUsuario = buscarUsuarioPorCorreo($correo)->getId();
    
    $respuesta = actualizarContrasena($idUsuario, $nuevaContrasena);
        
    if($respuesta != null){
        exit("si");
    }else{
        exit("no");
    }
?>