<?php
    session_start();
    require_once (__DIR__."/../../modelo/dao/dataSource.php");
    require_once (__DIR__."/../mdb/mdbPublicacion.php");

    $conexion = new dataSource();
    $inicio = $_GET['inicio'];
    $publicaciones = cargarPublicaciones($inicio);
        
    if(count($publicaciones) > 0){
        $resultado = "";
        foreach($publicaciones as $indice => $valor){
                
            $resultado .= '
            <div class="post">
                <article>'.$publicaciones[$indice]->getContenido().'</article>
            </div>
            ';
        } 
        exit($resultado);
    }else{
        exit("maximo");
    }
?>