<?php
    session_start();
    require_once (__DIR__."/../mdb/mdbPreferenciaUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/preferenciaUsuario.php");
    require_once (__DIR__."/../mdb/mdbGenero.php");

    $idUsuario = $_SESSION['ID_USUARIO'];
    $nombreGenero = $_GET['valor'];
    $genero = buscarGeneroPorTipo($nombreGenero);
    $preferencia = new preferenciaUsuario($idUsuario, $genero->getIdGenero());
    $preferenciaUser = buscarPreferencia($preferencia);

    if($preferenciaUser != null){
        exit("no1");
    }else{
        $resultado = registrarPreferencia($preferencia);

        if($resultado != null){
            exit("si");
        }else{
            exit("no2");
        }
    }
?>