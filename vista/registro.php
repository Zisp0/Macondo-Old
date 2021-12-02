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
    <link rel="stylesheet" href="styles/registro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
</head>
<body>
    <div class="containerPrincipal">
        <div class="containerLogo">
            <img src="Pictures/butterflyLogo.png">
            <p>Macondo</p>
        </div>
        <form action="">
            <div>
                <input type="text" id="inputPrimerNombre" placeholder="Primer Nombre">
                <input type="text" id="inputSegundoNombre" placeholder="Segundo Nombre">
            </div>    
            <div>
                <input type="text" id="inputPrimerApellido" placeholder="Primer Apellido">
                <input type="text" id="inputSegundoApellido" placeholder="Segundo Apellido">
            </div>
            <div>
                <input type="email" id="inputCorreoElectronico" placeholder="Correo Electrónico">
            </div>
            <div>
                <input type="password" id="inputContraseña" placeholder="Contraseña">
                <input type="password" id="inputConfirmarContraseña" placeholder="Confirmar Contraseña">
            </div>
            <button id="buttonSignUp" type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>