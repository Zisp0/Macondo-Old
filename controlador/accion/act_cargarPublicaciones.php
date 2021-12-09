<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbPublicacion.php");

    $inicio = $_GET['inicio'];
    $publicaciones = cargarPublicaciones($inicio);
        
    if(count($publicaciones) > 0){
        $resultado = "";
        foreach($publicaciones as $indice => $valor){
                
            $resultado .= '
            <div class="post">
                <div class="ContainerPicturesNameUser">
                    <div><img src="pictures/defaultPictureUser.png"></div>               
                    <p>Nombre User</p>
                </div>
                <h3>'.$publicaciones[$indice]->getTitulo().'</h3>
                <article>'.$publicaciones[$indice]->getContenido().'</article>
                <div class="containerReactionComment">
                    <div class="containerLike">
                        <button id="buttonLike"><img src="pictures/reactionPictures.png"/><p>Me gusta</p></button>
                    </div>
                    <div class="containerDislike">
                        <button id="buttonDislike"><img src="pictures/reactionPictures.png"/><p>No me gusta</p></button>
                    </div>
                    <div class="containerComment">
                        <button id="buttonComment"><img src="pictures/reactionPictures.png"/><p>Comentar</p></button>
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