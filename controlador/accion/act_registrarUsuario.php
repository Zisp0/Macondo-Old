<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/usuario.php");
    require_once (__DIR__."/act_correoBienvenida.php");

    $primerNombre = $_POST['primerNombre'];
    $segundoNombre = $_POST['segundoNombre'];
    $primerApellido = $_POST['primerApellido'];
    $segundoApellido = $_POST['segundoApellido'];
    $seudonimo = $_POST['seudonimo'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['pass'];
 
    $userSeudo = buscarUsuarioPorSeudonimo($seudonimo);
    
    if($userSeudo == null){
        $userCorreo = buscarUsuarioPorCorreo($correo);

        if($userCorreo == null){
            $usuario = new usuario(NULL, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $seudonimo, 'user', NULL, 1, $correo, $contrasena, NULL);
            $registro = registrarUsuario($usuario);
            if($registro){
                $_SESSION['ID_USUARIO'] = $registro;
                $usuario = buscarUsuarioPorId($registro);
                $_SESSION['PRIMER_NOMBRE_USUARIO'] = $usuario->getPrimerNombre();
                $_SESSION['PRIMER_APELLIDO_USUARIO'] = $usuario->getPrimerApellido();
                $_SESSION['SEUDONIMO_USUARIO'] = $usuario->getSeudonimo();
                var_dump("111");
                correo($correo,$primerNombre.' '.$primerApellido);
                exit("si");
            } else{
                exit("no");
            }
        }else{
            exit("correo");
        }
    }else{
        exit("seudo");
    }
    /*$usuario = new usuario(NULL, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $seudonimo, 'user', NULL, 1, $correo, $contrasena);
    $registro = registrarUsuario($usuario);
    if($registro){
        $_SESSION['ID_USUARIO'] = $registro;
        $usuario = buscarUsuarioPorId($registro);
        $_SESSION['PRIMER_NOMBRE_USUARIO'] = $usuario->getPrimerNombre();
        $_SESSION['PRIMER_APELLIDO_USUARIO'] = $usuario->getPrimerApellido();
        $_SESSION['SEUDONIMO_USUARIO'] = $usuario->getSeudonimo();
        correo($correo,$primerNombre.' '.$primerApellido);
        exit("si");
    } else{
        header("Location: ../../vista/login.php?msg=No se pudo realizar el registro");
    }*/
?>