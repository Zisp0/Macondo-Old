<?php
    session_start();
    if (!isset($_SESSION['ID_USUARIO'])) {
        header("Location: ../index.html");
    }
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

        <div class="containerTitulosInputs">
            <div class="containerTitulos">
                <h1>Géneros de Preferencia</h1>
                <p>Seleccione lo generos literarios de su preferencia o gusto.</p>
            </div>
            <form action="" method="post">
                <div>
                    <p><input type="checkbox" value="Terror" id="">Terror</p>
                    <p><input type="checkbox" value="Romance" id="">Romance</p>
                    <p><input type="checkbox" value="Ciencia Ficción" id="">Ciencia Ficción</p>
                    <p><input type="checkbox" value="Comedia" id="">Comedia</p>
                </div>    
                
                <div>
                    <p><input type="checkbox" value="Documental" id="">Documental</p>
                    <p><input type="checkbox" value="Científicos" id="">Científicos</p>
                    <p><input type="checkbox" value="Tecnología" id="">Tecnología</p>
                    <p><input type="checkbox" value="Drama" id="">Drama</p>
                </div>    

                <div>
                    <p><input type="checkbox" value="Bélico" id="">Bélico</p>
                    <p><input type="checkbox" value="Aventura" id="">Aventura</p>
                    <p><input type="checkbox" value="Mágico" id="">Mágico</p>
                    <p><input type="checkbox" value="Crímenes" id="">Crímenes</p>
                </div>
            </form>
            <div>
                <button id="buttonOmitir">Omitir</button>
                <button id="buttonEnviarPreferncias">continuar</button>
            </div>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/preferenciaGeneros.js"></script>
</body>
</html>