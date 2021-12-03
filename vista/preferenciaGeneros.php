<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencias</title>
    <link rel="shortcut icon" href="pictures/butterflyIcon.png">
    <link rel="stylesheet" href="styles/preferenciasGeneros.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
</head>
<body>
    <div class="containerPrincipal">
        <div class="containerLogo">
            <img src="pictures/butterflyLogo.png">
            <p>Macondo</p>
        </div>
        <div>
            <h1>Géneros de Preferencia</h1>
            <p>Seleccione lo generos literarios de su preferencia o gusto.</p>
        </div>
        <form action="" method="post">
        <div>
        <p><input type="checkbox" name="" id="">Terror</p>
            <p><input type="checkbox" name="" id="">Romance</p>
            <p><input type="checkbox" name="" id="">Ciencia Ficción</p>
            <p><input type="checkbox" name="" id="">Comedia</p>
        </div>    
        <div>
            <p><input type="checkbox" name="" id="">Bélico</p>
            <p><input type="checkbox" name="" id="">Aventura</p>
            <p><input type="checkbox" name="" id="">Mágico</p>
            <p><input type="checkbox" name="" id="">Crímenes</p>
        </div>
        <div>
        <p><input type="checkbox" name="" id="">Documental</p>
            <p><input type="checkbox" name="" id="">Científicos</p>
            <p><input type="checkbox" name="" id="">Tecnología</p>
            <p><input type="checkbox" name="" id="">Drama</p>
        </div>
            
        </form>
        <button id="buttonEnviarPreferncias">continuar</button>
        <button>Omitir</button>
    </div>
</body>
</html>