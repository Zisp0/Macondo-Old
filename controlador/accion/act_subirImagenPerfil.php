<?php 
   session_start();
   if($_FILES["inputF"]["size"] > 0){
      if (isset($_FILES['inputF']["type"])) {
         //obtener id del usuario para asignarselo de nombre
         $nombreImg = $_SESSION['ID_USUARIO'];
         //asignando extensión png,jpg,jpeg
         if($_FILES["inputF"]["type"] == "image/jpg"){
            $nombreImg = $nombreImg.'.jpg';
         }else if($_FILES["inputF"]["type"] == "image/jpeg"){
            $nombreImg = $nombreImg.'.jpeg';
         }else{
            $nombreImg = $nombreImg.'.png';
         }
         if(file_exists('../../vista/pictures/fotosPerfil/'.$nombreImg)){
            unlink('../../vista/pictures/fotosPerfil/'.$nombreImg);
            move_uploaded_file($_FILES['inputF']['tmp_name'], '../../vista/pictures/fotosPerfil/'.$nombreImg);
         }else{
            move_uploaded_file($_FILES['inputF']['tmp_name'], '../../vista/pictures/fotosPerfil/'.$nombreImg);
         }
         exit("si");
      }
   }else{
      exit("no");
   }
   
?>

