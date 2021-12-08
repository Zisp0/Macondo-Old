<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbPublicacion.php");

    $inicio = $_GET['inicio'];
    $tipo = $_GET['tipo'];

    if($tipo == "Inicio"){
        $publicaciones = cargarPublicaciones($inicio);
    }else{
        $publicaciones = cargarPublicacionesPorTipo($inicio, $tipo);
    }
        
    if(count($publicaciones) > 0){
        $resultado = "";
        foreach($publicaciones as $indice => $valor){
                
            $resultado .= '
            <div class="post">
                <h3>'.$publicaciones[$indice]->getTitulo().'</h3>
                <article>'.$publicaciones[$indice]->getContenido().'</article>
            </div>
            ';
        } 
        exit($resultado);
    }else{
        exit("maximo");
    }
?>