<?php
       
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="styles/administrador.css">
    <link rel="shortcut icon" href="pictures/butterflyIcon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
</head>

<body>
<header>
    <div class="containerLogo">
        <img src="pictures/butterflyLogo.png">
        <p>Macondo</p>
    </div>
</header>
<body>
    <header>
        <div class="containerLogo">
            <img src="pictures/butterflyLogo.png">
            <p>Macondo</p>
        </div>
    </header>
    <div class="menuTema">
        <input type="checkbox" class="checkbox" id="check">
        <label class="tema" for="check">|||</label>
        <div class="panel">
            <ul>
                <button onclick="dia();"><img id="dia" src="pictures/sun.png"></button>
                <label><br><br></label>
                <button onclick="noche();"><img id="noche" src="pictures/moon.png"></button>
            </ul>
        </div>
    </div>
    <script src="js/temas.js"></script>
</body>
</html>
