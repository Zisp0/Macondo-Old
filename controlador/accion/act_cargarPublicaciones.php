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
                        <button id="buttonLike">
                            <span class="material-icons">thumb_up</span><p>Me gusta</p>
                        </button>
                    </div>
                    <div class="containerDislike">
                        <button id="buttonDislike">
                            <span class="material-icons">thumb_down</span><p>No me gusta</p>
                        </button>
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