<?php
    require_once (__DIR__."/dataSource.php");
    require_once (__DIR__."/../entidad/preferenciaUsuario.php");

    class preferenciaUsuarioDAO {
        
        public function registrarPreferencia(preferenciaUsuario $preferencia){
            $data_source = new dataSource();
            
            $stmt1 = "INSERT INTO preferenciaUsuario (idGenero, idUsuario) values (:idGenero, :idUsuario);"; 
            
            $resultado = $data_source->ejecutarActualizacion($stmt1, array(
                ':idGenero' => $preferencia->getIdGenero(),
                ':idUsuario' => $preferencia->getIdUsuario()
                )
            ); 

            return $resultado;
        }

        public function buscarPreferencia(preferenciaUsuario $preferencia){
            $data_source = new DataSource();
            $idGenero = $preferencia->getIdGenero();
            $idUsuario = $preferencia->getIdUsuario();
            $data_table = $data_source->ejecutarConsulta("SELECT * FROM preferenciaUsuario WHERE idGenero = $idGenero AND idUsuario = $idUsuario", NULL);

            $preferenciaUser=null;

            if(count($data_table)==1){
                foreach($data_table as $indice => $valor){
                    $preferenciaUser = new preferenciaUsuario(
                        $data_table[$indice]["idGenero"],
                        $data_table[$indice]["idUsuario"]
                    );
                }   
            }
            return $preferenciaUser;
        }
    }

?>