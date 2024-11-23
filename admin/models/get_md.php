<?php
    class Get_Model{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }
    
        public function Get_Admin($data1){
            $consult = $this->conexion->query("CALL SP_Get_Admin('$data1')");
            return $consult;
        }
        
        public function Get_Images($data1, $data2){
            $consult = $this->conexion->query("CALL SP_Get_Images('$data1', '$data2')");
            return $consult;
        }

        public function Get_ImagesId($data1){
            $consult = $this->conexion->query("CALL SP_Get_ImagesId('$data1')");
            return $consult;
        }


        public function Get_dolar($data1){
            $consult = $this->conexion->query("CALL SP_Get_dolar('$data1')");
            return $consult;
        }

        public function Get_Producto($data1){
            $consult = $this->conexion->query("CALL SP_Get_Producto('$data1')");
            return $consult;
            
        }

        public function Get_Marca($data1){
            $consult = $this->conexion->query("CALL SP_Get_Marca('$data1')");
            return $consult;
        }

        public function Get_MarcaName($data1){
            $consult = $this->conexion->query("CALL SP_Get_MarcaName('$data1')");
            return $consult;
        }

    }
?>