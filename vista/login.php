<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
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
                <img src="Pictures/butterflyLogo.png">
                <p>Macondo</p>
            </div>
            
            <div class="containerInputAndButton">
                <form action="../controlador/accion/act_login.php" method="post">
                    <div>
                        <label for="inputEmail" class="labelForInputEmail">Email</label>
                        <input type="email" id="inputEmail" name="user">
                    </div>
                    <div>
                        <label for="inputPassword" class="labelForInputPassword">Contraseña</label>
                        <input type="password" id="inputPassword" name="pass">  
                    </div>            
                    <button id="buttonLogIn" type="submit">Iniciar Sesión</button>
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </form>
            </div>          
        </div>
    </div>
</body>
</html>