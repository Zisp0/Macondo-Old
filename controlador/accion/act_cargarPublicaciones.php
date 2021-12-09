<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbPublicacion.php");
    require_once (__DIR__."/../mdb/mdbUsuario.php");

    $inicio = $_GET['inicio'];
    $tipo = $_GET['tipo'];

    if($tipo == "Inicio"){
        $publicaciones = cargarPublicaciones($inicio);
    }else{
        $publicaciones = cargarPublicacionesPorTipo($inicio, $tipo);
    }
        
    if(count($publicaciones) > 0){
        $resultado = "";
        $usuarios = array();

        foreach($publicaciones as $indice => $valor){
            array_push($usuarios, buscarUsuarioPorId($publicaciones[$indice]->getIdUsuario()));
        }

        foreach($publicaciones as $indice => $valor){
                
            $resultado .= '
            <div class="post">
<<<<<<< HEAD
                <div class="containerPicturesNameUserMore">
                    <div class="containerPicturesName">
                        <img src="pictures/defaultPictureUser.png">
                        <p>Nombre User</p>
                    </div>               
                    <div class="containerMore">
                        <button id="buttonMore"><span class="material-icons">more_horiz</span></button>
                    </div> 
=======
                <div class="ContainerPicturesNameUser">
                    <div><img src="pictures/defaultPictureUser.png"></div>
                    <p>'.$usuarios[$indice]->getPrimerNombre().' '.$usuarios[$indice]->getPrimerApellido().'</p>
>>>>>>> e4f5382153ea2e662ac87eae1f9a683ad4c70009
                </div>
                <h3>'.$publicaciones[$indice]->getTitulo().'</h3>
                <article>'.$publicaciones[$indice]->getContenido().'</article>
                <div class="containerReactionComment">
                    <div class="containerLike">
                        <button id="buttonLike"><img src="pictures/likePictures.png"/><p>Me gusta</p></button>
                    </div>
                    <div class="containerDislike">
                        <button id="buttonDislike"><img src="pictures/dislikePictures.png"/><p>No me gusta</p></button>
                    </div>
                    <div class="containerComment">
                        <button id="buttonComment"><img src="pictures/commentPictures.png"/><p>Comentar</p></button>
                    </div>
                </div>
            </div>
            ';
        } 
        exit($resultado);
    }else{
        exit("maximo");
    }
?>