<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbComentario.php");
    require_once (__DIR__."/../mdb/mdbUsuario.php");

    $inicio = $_GET['inicio'];
    $idPublicacion = $_GET['idPublicacion'];

    $comentarios = cargarComentarios($inicio, $idPublicacion);
    
    if(count($comentarios) > 0){
        $resultado = "";
        $usuarios = array();

        foreach($comentarios as $indice => $valor){
            array_push($usuarios, buscarUsuarioPorId($comentarios[$indice]->getIdUsuario()));
        }

        foreach($comentarios as $indice => $valor){
                
            $resultado .= '
                <div class="comentario">
                    <div class="infoUser">
                        <img src="';
                            if($usuarios[$indice]->getFoto() == NULL){
                                $resultado .= 'pictures/defaultPictureUser.png';
                            }else{
                                $resultado .= $usuarios[$indice]->getFoto();
                            }
                            $resultado .= '" width="45px" height="45px" alt="">
                        <p>'.$usuarios[$indice]->getSeudonimo().'</p>
                    </div>    
                    <div class="contenidoComment">
                        <p>'.$comentarios[$indice]->getContenido().'</p>
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
