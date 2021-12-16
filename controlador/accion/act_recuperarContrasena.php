<?php
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");

    $correo = $_POST['correo'];
    $correoExiste = buscarUsuarioPorCorreo($correo);
    if($correoExiste == NULL){
        exit("no existe");
    }else{
        exit("existe");
    }
?>