<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbPublicacion.php");
    require_once (__DIR__."/../mdb/mdbUsuario.php");

    $inicio = $_GET['inicio'];
    $tipo = $_GET['tipo'];

    if($tipo == "Inicio"){
        $publicaciones = cargarPublicaciones($inicio);
    }else if($tipo == "Perfil"){
        $idUsuario = $_SESSION['ID_USUARIO'];
        $publicaciones = cargarPublicacionesPorUsuario($inicio, $idUsuario);
    }else{
        $publicaciones = cargarPublicacionesPorTipo($inicio, $tipo);
    }
    
    if(count($publicaciones) > 0){
        $resultado = "";
        $usuarios = array();
        $user = buscarUsuarioPorId($_SESSION['ID_USUARIO']);

        foreach($publicaciones as $indice => $valor){
            array_push($usuarios, buscarUsuarioPorId($publicaciones[$indice]->getIdUsuario()));
        }

        foreach($publicaciones as $indice => $valor){
                
            $resultado .= '
            <div class="post">
                <div class="containerPicturesNameUserMore">
                    <div class="containerPicturesName">
                        <div class="publi">
                            <img src="';
                            if($usuarios[$indice]->getFoto() == NULL){
                                $resultado .= 'pictures/defaultPictureUser.png';
                            }else{
                                $resultado .= $usuarios[$indice]->getFoto();
                            }
                            $resultado .= '">
                        </div>
                        <p>'.$usuarios[$indice]->getPrimerNombre().' '.$usuarios[$indice]->getPrimerApellido().'</p>
                    </div>      
                    <div class="containerMore">
                        <button id="buttonMore"><span class="material-icons">more_horiz</span></button>
                    </div> 
                </div>
                <h3 class="tituloPost">'.$publicaciones[$indice]->getTitulo().'</h3>
                <article class="contenidoPost">'.$publicaciones[$indice]->getContenido().'</article>
                <div class="containerReactionComment">
                    <div class="containerLike">
                        <button>
                            <span class="material-icons">thumb_up</span><p>Me gusta</p>
                        </button>
                    </div>
                    <div class="containerDislike">
                        <button>
                            <span class="material-icons">thumb_down</span><p>No me gusta</p>
                        </button>
                    </div>
                    
                </div>              
                <div class="containerInputComment">
                    <img src="';
                    if($user->getFoto() == NULL){
                        $resultado .= 'pictures/defaultPictureUser.png';
                    }else{
                        $resultado .= $user->getFoto();
                    }
                    $resultado .= '" width="45px" height="45px">
                    <input type="text" placeholder="Escriba su comentario" id="'.$publicaciones[$indice]->getIdPublicacion().'"> 
                    <button onclick="comentar('.$publicaciones[$indice]->getIdPublicacion().')"><span class="material-icons">send</span></button>   
                </div>
                <div class="containerButtonMoreComment">
                    <button onclick="mostrarComentarios('.$publicaciones[$indice]->getIdPublicacion().')"><span class="material-icons">visibility</span><p>Ver Comentarios</p></button>
                </div>
            </div>
            ';
        } 
        exit($resultado);
    }else{
        exit("maximo");
    }
    /*<div class="containerComment">
                        <button>
                            <span class="material-icons">comment</span><p>Comentar</p>
                        </button>
                    </div>*/
?>
