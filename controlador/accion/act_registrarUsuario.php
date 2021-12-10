<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/usuario.php");

        $primerNombre = $_POST['primerNombre'];
        $segundoNombre = $_POST['segundoNombre'];
        $primerApellido = $_POST['primerApellido'];
        $segundoApellido = $_POST['segundoApellido'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['pass'];
 
        
        $usuario = new usuario(NULL, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, NULL, 'usuario', NULL, 1, $correo, $contrasena);
        $registro = registrarUsuario($usuario);
        if($registro){
            $_SESSION['ID_USUARIO'] = $registro;
            header("Location: ../../vista/preferenciaGeneros.php?msg=Se realizo el registro satisfactoriamente");
        } else{
            header("Location: ../../vista/login.php?msg=No se pudo realizar el registro");
        }
?>