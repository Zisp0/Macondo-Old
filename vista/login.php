<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="shortcut icon" href="pictures/butterflyIcon.png">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
</head>
<body>
    <div class="containerPrincipal">
        <div class="containerLogin">
            <div class="containerLogo">
                <img src="pictures/butterflyLogo.png">
                <p>Macondo</p>
            </div>
            
            <div class="containerInputAndButton">
                <div>
                    <label for="inputEmail" class="labelForInputEmail">Email</label>
                    <input type="email" id="inputEmail" name="user">
                </div>
                <div>
                    <label for="inputPassword" class="labelForInputPassword">Contraseña</label>
                    <input type="password" id="inputPassword" name="pass">  
                </div>
                <a href="recuperarContraseña.php">¿Olvidaste tu contraseña?</a>            
                <button id="buttonLogIn">Iniciar Sesión</button>

                <div>
                    <button id="loginGoogle">Google</button>
                    <p>¿No tienes una cuenta? <a href="registro.php">Regístrate</a></p>
                </div>
            </div>          
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/validarDatos.js"></script>
</body>
</html>