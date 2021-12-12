<?php
    //Con session_start() se puede iniciar una nueva sesión 
    //o reanudar la sesión existente
    session_start();

    //Con require_once se incluye el archivo mdbUsuario.php
    require_once (__DIR__."/../mdb/mdbUsuario.php");
        
        //Se obtiene el correo y password del formulario del login,
        //los datos son recibidos por el método POST
        $correo = $_POST['user'];
        $password = $_POST['pass'];

        //Se llama a la funcion autenticarUsuario() que esta en mdbUsuario.php
        $user = autenticarUsuario($correo, $password);
        
        if($user != null){
            //Si el usuario fue encontrado, se guarda su ID en una sesión con $_SESSION
            $_SESSION['ID_USUARIO'] = $user->getId();
            $_SESSION['PRIMER_NOMBRE_USUARIO'] = $user->getPrimerNombre();
            $_SESSION['PRIMER_APELLIDO_USUARIO'] = $user->getPrimerApellido();
            $_SESSION['SEUDONIMO_USUARIO'] = $user->getSeudonimo();
            
            header("Location: ../../vista/home.php");    
        }else{
            //Si el usuario no existe se vuelve a mostrar el login
            header("Location: ../../vista/login.php");
        }
?>