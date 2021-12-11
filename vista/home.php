<?php
    session_start();
    if (!isset($_SESSION['ID_USUARIO'])) {
        header("Location: ../index.html");
    }
    
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macondo</title>
    <link rel="stylesheet" href="styles/home.css">
    <link rel="shortcut icon" href="pictures/butterflyIcon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
                <button id="btnInicio"><li><img id="inicio" src="pictures/iconCategoryNav/iconHome.png">Inicio</li></button>
                <button id="btnHistorias"><li><img id="historias" src="pictures/iconCategoryNav/iconHistory.png">Historias</li></button>
                <button id="btnCuentos"><li><img id="cuentos" src="pictures/iconCategoryNav/iconStories.png">Cuentos</li></button>
                <button id="btnLiteratura"><li><img id="literatura" src="pictures/iconCategoryNav/iconLiterature.png">Literatura</li></button>
                <button id="btnPoesia"><li><img id="poesia" src="pictures/iconCategoryNav/iconPoetry.png">Poesía</li></button>
                <button id="btnArticulos"><li><img id="articulos" src="pictures/iconCategoryNav/iconArticles.png">Artículos</li></button>
            </ul>
        </nav> 
        <div class="containerOptionsUser">
            <button id="buttonPerfil">
                <img src="pictures/defaultPictureUser.png">
                <p id="nombreUsuario"></p>
            </button>
            <button id="buttonUserOptions"><span class="material-icons">expand_more</span></button>
        </div>
    </div>
    
    <div class="containerPrincipal">
        <div class="containerContent">
            <div class="containerInputPost">
                <div class="containerInputAndImageProfile">                   
                    <div><img src="pictures/defaultPictureUser.png"></div>
                    <button id="buttonInputPost"><p>¿Qué quieres escribir?</p></button>
                </div>                
            </div>
            
            <div id="publicaciones">
                
            </div>
        </div>

        <div class="containerProfile">
            <div class="containerInformationUser">
                <div class="containerPicturesNamePseudonimo">
                    <div class="containerPictures">
                        <img src="pictures/profileDefaultPicture.png" alt="" width="168px" height="168px">
                    </div>
                    <div class="containerNamePseudonimo">
                        <p id="nameUserProfile"></p>
                        <p id="pseudonimoUserProfile">@Pseudonimo</p>
                        <button id="buttonEditarPerfil">Editar perfil</button>
                    </div>
                </div>
            </div>
            <div class="containerPostProfile">
                <div class="containerTituloPublicaciones">
                    <p id="tituloPublicaciones">Mis Publicaciones</p>
                </div>  
                <div class="postProfile">

                </div>
            </div>
        </div>

        <div class="pop-up-perfil">
            <div class="pop-up-wrap-perfil">
                <div class="containerTituloyBotonCerrar">
                    <p>Editar Perfil</p>
                    <button id="buttonCerrarModalPerfil"><img src="pictures/iconCerrar.png" alt=""></button>
                </div>

                <div id="datosPerfil">

                    <div>
                        <input type="text" id="inputPrimerNombrePerfil" placeholder="Primer Nombre" name="primerNombre">
                        <input type="text" id="inputSegundoNombrePerfil" placeholder="Segundo Nombre" name="segundoNombre">
                    </div>    
                    <div>
                        <input type="text" id="inputPrimerApellidoPerfil" placeholder="Primer Apellido" name="primerApellido">
                        <input type="text" id="inputSegundoApellidoPerfil" placeholder="Segundo Apellido" name="segundoApellido">
                    </div>
                    <div>
                        <input type="text" id="inputPseudonimoPerfil" placeholder="Pseudonimo" name="PseudonimoPerfil">
                    </div>
                    <div>
                        <input type="file">
                    </div>
                    <button id="buttonSubirCambios">Guardar</button>
                </div>
            </div>
        </div>

        <div class="pop-up">
            <div class="pop-up-wrap">
                <div class="containerTituloyBotonCerrar">
                    <p>Crear publicación</p>
                    <button id="buttonCerrarModal"><img src="pictures/iconCerrar.png" alt=""></button>
                </div>

                <div id="datosPost">
                    <div>
                        <input type="text" placeholder="Escriba el título" id="inputTituloPost">
                        <select name="" id="selectCategoriaPost">
                            <option disabled selected>Selecciona la categoría</option>
                            <option value="Historias">Historias</option>
                            <option value="Cuentos">Cuentos</option>
                            <option value="Literatura">Literatura</option>
                            <option value="Poesía">Poesía</option>
                            <option value="Artículos">Artículos</option>
                        </select>
                    </div>
                        
                    <textarea name="" id="inputContenidoPost" placeholder="Escriba el contenido"></textarea>
                    <button id="buttonPublicarPost">Publicar</button>
                </div>
            </div>
        </div>
        

        <div class=containerTrendings>
            <aside>
                <h2>Tendencias</h2>
                <div class="trending">

                </div>
            </aside>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/publicaciones.js"></script>
    <script src="js/perfil.js"></script>
    <script src="js/temas.js"></script>
    <script src="js/popUp.js"></script>
</body>
</html>