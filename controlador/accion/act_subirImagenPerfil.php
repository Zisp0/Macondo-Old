<?php 
   session_start();
   require_once (__DIR__."/../mdb/mdbUsuario.php");

   if($_FILES["inputF"]["size"] > 0){
      if (isset($_FILES['inputF']["type"])) {
         //obtener id del usuario para asignarselo de nombre
         $idUsuario = $_SESSION['ID_USUARIO'];
         //asignando extensión png,jpg,jpeg
         if($_FILES["inputF"]["type"] == "image/jpg"){
            $extension = '.jpg';
            $nombreImg = $idUsuario.'.jpg';
         }else if($_FILES["inputF"]["type"] == "image/jpeg"){
            $extension = '.jpeg';
            $nombreImg = $idUsuario.'.jpeg';
         }else{
            $extension = '.png';
            $nombreImg = $idUsuario.'.png';
         }
         if(file_exists('../../vista/pictures/fotosPerfil/'.$nombreImg)){
            unlink('../../vista/pictures/fotosPerfil/'.$nombreImg);
            move_uploaded_file($_FILES['inputF']['tmp_name'], '../../vista/pictures/fotosPerfil/'.$nombreImg);
         }else{
            move_uploaded_file($_FILES['inputF']['tmp_name'], '../../vista/pictures/fotosPerfil/'.$nombreImg);
         }

         actualizarUrlFotoPorId($idUsuario, $extension);
         exit("si");
      }
   }else{
      exit("no");
   }
   
?>

