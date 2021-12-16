<?php
    session_start();
    if (!isset($_SESSION['CORREO'])) {
        header("Location: ../vista/recuperarContraseña.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Token</title>
    <link rel="shortcut icon" href="pictures/butterflyIcon.png">
    <link rel="stylesheet" href="styles/ingresarToken.css">
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
                <h1>Actualice su contraseña</h1>
                <input type="text" placeholder="Introduce su nueva contraseña" id="inputContraNueva">
                <input type="text" placeholder="Confirme su nueva contraseña" id="inputContraConfirmar">
                <div class="containerBotones">
                    <button id="buttonCancelar" type="reset" onclick="location.href='login.php'">Cancelar</button>
                    <button id="buttonActContra">Actualizar</button>
                </div>         
            </div>
        </div>       
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/olvidarContraseña.js"></script>
    
</body>
</html>