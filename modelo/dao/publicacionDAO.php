<?php
    require_once (__DIR__."/dataSource.php");
    require_once (__DIR__."/../entidad/publicacion.php");

    class publicacionDAO {
        
        public function verPublicaciones($inicio){
            $data_source = new dataSource();
            
            $data_table = $data_source->ejecutarConsulta("SELECT * FROM publicacion ORDER BY idpublicacion DESC LIMIT 5 OFFSET $inicio", NULL);

            $publicacion=null;
            $publicaciones=array();

            foreach($data_table as $indice => $valor){
                $publicacion = new publicacion(
                        $data_table[$indice]["tipo"],
                        $data_table[$indice]["idPublicacion"],
                        $data_table[$indice]["titulo"],
                        $data_table[$indice]["fecha"], 
                        $data_table[$indice]["contenido"],
                        $data_table[$indice]["estado"],
                        $data_table[$indice]["hora"],
                        $data_table[$indice]["idUsuario"]
                        );
                array_push($publicaciones,$publicacion);
            }
            
            return $publicaciones;
        }

        public function crearPublicacion(publicacion $publicacion){
            $data_source = new dataSource();
            
            $stmt1 = "INSERT INTO publicacion (tipo, titulo, fecha, contenido, estado, hora, idusuario) VALUES (:tipo, :titulo, :fecha, :contenido, :estado, :hora, :idUsuario)"; 
            
            $resultado = $data_source->ejecutarActualizacion($stmt1, array(
                ':tipo' => $publicacion->getTipo(),
                ':titulo' => $publicacion->getTitulo(),
                ':fecha' => $publicacion->getFecha(),
                ':contenido'=>$publicacion->getContenido(),
                ':estado'=>$publicacion->getEstado(),
                ':hora'=>$publicacion->getHora(),
                ':idUsuario'=>$publicacion->getIdUsuario()
                )
            ); 

            return $resultado;
        }
    }

?>