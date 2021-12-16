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
    <title>Administrador</title>
    
    <link rel="shortcut icon" href="pictures/butterflyIcon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="js/lib/bootstrap/css/bootstrap.min.css">
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="js/lib/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/administrador.css">
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
        <label class="tema" for="check"><p>|||</p></label>
        <div class="panel">
            <ul>
                <button onclick="dia();"><img id="dia" src="pictures/sun.png"></button>
                <p></p>
                <button onclick="noche();"><img id="noche" src="pictures/moon.png"></button>
            </ul>
        </div>
    </div>

    <div class="containerNavigation">
        <nav>
            <ul>
                <button id="buttonUsuarios"><li><span class="material-icons">person</span>Usuarios</li></button>
                <button id="buttonPublicaciones"><li><span class="material-icons">list_alt</span>Publicaciones</li></button>
                <button id="buttonComentarios"><li><span class="material-icons">comment</span>Comentarios</li></button>
            </ul>
        </nav>
        <div class="containerOptionsUser">
            <button id="buttonPerfil">
                <div class="fotoOpcion">
                    <img src="pictures/defaultPictureUser.png" id="fotoUserNav" width="45px" height="45px">
                </div>
                <p id="nombreUsuario">
                    <?php if(isset($_SESSION['ID_USUARIO'])){
                        echo $_SESSION['PRIMER_NOMBRE_USUARIO'];
                    }?></p>
            </button>
            <div class="containerB">
                <input type="checkbox" id="toggle">
                <label for="toggle" id="buttonOptionUser" class="material-icons">expand_more</label>
                <div class="nav">
                    <button id="buttonCambiarContraseña">Cambiar Contraseña</button>
                    <form action="../controlador/accion/act_cerrarSesion.php" method="post">
                        <button id="buttonCerrarSesion">Cerrar Sesión</button>
                    </form>                 
                </div>

            </div>
        </div>
    </div>

    <div class="pop-up-cambiar-contraseña">
        <div class="pop-up-wrap-cambiar-contraseña">
            <div class="containerTituloyBotonCerrar">
                <h2>Cambiar Contraseña</h2>
                <button id="buttonCerrarModalCambiarContraseña"><img src="pictures/iconCerrar.png" alt=""></button>
            </div>
            <div class="datosCambiarContraseña">
                <input id="inputContraActual" type="text" placeholder="Contraseña Actual">
                <input id="inputContraNueva" type="text" placeholder="Nueva Contraseña">
                <input id="inputContraConfirmar" type="text" placeholder="Confirmar Contraseña">
                <button id="buttonSubirCambiosContraseña">Guardar</button>
            </div>
        </div>
    </div>

    <div class="containerContent">
        <div class="containerTitle">
            <h2 id="title">Usuarios</h2>
        </div>
        
         <!--Ejemplo tabla con DataTables-->
        <div class="container">
            <div class="row" id="contenedorTabla">
                <div class="contButton">
                    <button class="buttonEditar" id="1">Editar</button>
                    <button class="buttonEliminar" id="1">Eliminar</button>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>        
                        </table>                  
                    </div>
                </div>
            </div>      
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/administrador.js"></script>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="js/lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="js/lib/popper/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="js/lib/datatables/datatables.min.js"></script> 
    <script src="js/adminTemas.js"></script>
    <script src="js/cambiarContraseña.js"></script>
    <script src="js/adminCategorias.js"></script>
</body>
</html>
