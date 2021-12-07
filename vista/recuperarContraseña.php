<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña</title>
    <link rel="shortcut icon" href="pictures/butterflyIcon.png">
    <link rel="stylesheet" href="styles/recuperarContraseña.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
</head>
<body>
    <div class="containerPrincipal">
        <div class="containerRecuperarContraseña">
            <div class="containerLogo">
                <img src="pictures/butterflyLogo.png">
                <p>Macondo</p>
            </div>
            <div class="containerInputs">
                <form action="">
                    <h1>Recupera tu cuenta</h1>
                    <p>Introduce tu correo electrónico para recuperar tu contraseña</p>
                    <input type="text" placeholder="Introduce tu correo electrónico">
                    <div class="containerBotones">
                        <button id="buttonCancelar" type="reset" onclick="location.href='login.php'">Cancelar</button>
                        <button type="submit" id="buttonRecuperarContraseña">Recuperar</button>
                    </div> 
                </form>         
            </div>
        </div>       
    </div>
</body>
</html>