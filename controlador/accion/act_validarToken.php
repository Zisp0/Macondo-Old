<?php
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");

    $correo = $_SESSION['CORREO'];
    $token = $_POST['tokenIngresado'];

    $user = buscarUsuarioPorCorreo($correo);

    if($user->getToken() == $token){
        exit("si");
    }else if($user->getToken() != $token) {
        exit("no");
    }else{
        exit("error");
    }
?>