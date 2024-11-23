<?php
    class Update_Model{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }

        public function Update_marca($data1, $data2, $data3){
            $consult = $this->conexion->query("CALL SP_Update_marca('$data1', '$data2', '$data3')");
            return var_dump($consult);
        }
        
        public function Update_marcaStatu($data1, $data2){
            $consult = $this->conexion->query("CALL SP_Update_marcaStatu('$data1', '$data2')");
            return $consult;
        }

        public function Update_productos($data1, $data2, $data3){
            $consult = $this->conexion->query("CALL SP_Update_productos('$data1', '$data2', '$data3')");
            return $consult;
        }

        public function Update_dolar($data1, $data2, $data3){
            $consult = $this->conexion->query("CALL SP_Update_dolar('$data1', '$data2', '$data3')");
            return var_dump($consult);
        }

        public function Update_lista($data1, $data2, $data3){
            $consult = $this->conexion->query("CALL SP_Update_lista('$data1', '$data2', '$data3')");
            return var_dump($consult);
        }

        public function Update_listaState($data1, $data2){
            $consult = $this->conexion->query("CALL SP_Update_listaState('$data1', '$data2')");
            return $consult;
        }
    }
?>
