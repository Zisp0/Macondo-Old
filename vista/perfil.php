<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="styles/home.css">
    <link rel="shortcut icon" href="pictures/butterflyIcon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
</head>

<body id="fondo">
    <header>
        <div class="containerLogo">
            <img src="pictures/butterflyLogo.png">
            <p>Macondo</p>
        </div>
        <div class="containerBarSearch">
            <input type="text" id="barSearch" placeholder="Buscar en Macondo">
            <button id="buttonSearch"><img src="pictures/iconSearch.png"></button>
        </div>
        <div class="containerOptionsUser">
            <img src="pictures/defaultPictureUser.png">
            <button id="buttonUserOptions"><img src="pictures/barUserOptions.png"></button>
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

    <div class="containerNavigation">
        <nav>
            <ul> 
                <a href="#"><li><img id="inicio" src="pictures/iconCategoryNav/iconHome.png">Inicio</li></a>
                <a href="#"><li><img id="historias" src="pictures/iconCategoryNav/iconHistory.png">Historias</li></a>
                <a href="#"><li><img id="cuentos" src="pictures/iconCategoryNav/iconStories.png">Cuentos</li></a>
                <a href="#"><li><img id="literatura" src="pictures/iconCategoryNav/iconLiterature.png">Literatura</li></a>
                <a href="#"><li><img id="poesia" src="pictures/iconCategoryNav/iconPoetry.png">Poesía</li></a>
                <a href="#"><li><img id="articulos" src="pictures/iconCategoryNav/iconArticles.png">Artículos</li></a>
            </ul>
        </nav> 
    </div>
    
    <div class="containerPrincipal">
        <div class="containerContent">
            <div class="containerInputPost">
                <div class="containerInputAndImageProfile">                   
                    <div><img src="pictures/defaultPictureUser.png"></div>
                    <textarea id="inputPost"placeholder="¿Qué quieres escribir?"></textarea>
                </div>

                <div>
                    <button id="buttonPublishPost">Publicar</button>
                </div>               
            </div>

            <div>
                
            </div>

        </div>

        <div class=containerTrendings>
            <aside>
                <h2>Tendencias</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque magni, consectetur omnis, blanditiis aliquid accusamus nam enim provident corrupti suscipit aut necessitatibus quas praesentium voluptatibus repellendus quae atque fuga temporibus.</p>
            </aside>
        </div>
    </div>

    <script src="js/temas.js"></script>
</body>
</html>