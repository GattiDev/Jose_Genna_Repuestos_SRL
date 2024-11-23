<?php
    class Delete_Model{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }
    
        public function Delete_marca($data1){
            $consult = $this->conexion->query("CALL SP_Delete_marca('$data1')");
            return var_dump($consult);
        }

        public function Delete_Producto($data1){
            $consult = $this->conexion->query("CALL SP_Delete_Producto('$data1')");
            return $consult;
        }

        public function Delete_dolar($data1){
            $consult = $this->conexion->query("CALL SP_Delete_dolar('$data1')");
            return var_dump($consult);
        }

        public function Delete_lista($data1){
            $consult = $this->conexion->query("CALL SP_Delete_lista('$data1')");
            return var_dump($consult);
        }

        public function Delete_Images($data1){
            $consult = $this->conexion->query("CALL SP_Delete_Images('$data1')");
            return $consult;
        }
    }
?>