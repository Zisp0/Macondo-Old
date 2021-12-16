<?php
    require_once (__DIR__."/dataSource.php");
    require_once (__DIR__."/../entidad/comentario.php");

    class comentarioDAO {
        public function buscarComentarios() {
            $data_source = new dataSource();
            
            $data_table = $data_source->ejecutarConsulta("SELECT * FROM comentario", NULL);

            $comentario = null;
            $comentarios = array();

            foreach($data_table as $indice => $valor){
                $comentario = new comentario(
                    $data_table[$indice]["idComentario"],
                    $data_table[$indice]["contenido"],
                    $data_table[$indice]["fecha"],
                    $data_table[$indice]["hora"], 
                    $data_table[$indice]["estado"],
                    $data_table[$indice]["idPublicacion"],
                    $data_table[$indice]["idUsuario"]
                );

                array_push($comentarios, $comentario);
            }
            
            return $comentarios;
        }

        public function crearComentario(comentario $comentario){
            $data_source = new dataSource();
            
            $stmt1 = "INSERT INTO comentario (contenido, fecha, hora, estado, idPublicacion, idUsuario) VALUES (:contenido, :fecha, :hora, :estado, :idPublicacion, :idUsuario)"; 
            
            $resultado = $data_source->ejecutarActualizacion($stmt1, array(
                ':contenido' => $comentario->getContenido(),
                ':fecha' => $comentario->getFecha(),
                ':hora' => $comentario->getHora(),
                ':estado'=>$comentario->getEstado(),
                ':idPublicacion'=>$comentario->getIdPublicacion(),
                ':idUsuario'=>$comentario->getIdUsuario()
                )
            ); 

            return $resultado;
        }
    }

?>