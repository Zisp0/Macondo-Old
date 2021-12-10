<?php
    require_once (__DIR__."/dataSource.php");
    require_once (__DIR__."/../entidad/genero.php");

    class generoDAO {
        
        public function buscarGeneroPorTipo($tipo){
            $data_source = new dataSource();
            
            $data_table = $data_source->ejecutarConsulta("SELECT * FROM genero WHERE tipo = '$tipo'", NULL);

            $genero=null;

            foreach($data_table as $indice => $valor){
                $genero = new genero(
                    $data_table[$indice]["idGenero"],
                    $data_table[$indice]["tipo"]
                );
            }
            
            return $genero;
        }
    }

?>