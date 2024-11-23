<?php
    class Put_Model{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////// PUT ///////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////       

        public function Put_marca($data1, $data2){
            $consult = $this->conexion->query("CALL SP_Put_marca('$data1', '$data2')");
			return var_dump($consult);
        }

        public function Put_productos($data1, $data2, $data3, $data4){
            $consult = $this->conexion->query("CALL SP_Put_productos('$data1', '$data2', '$data3', '$data4')");
			return $consult;
        }

        public function Put_dolar($data1, $data2){
            $consult = $this->conexion->query("CALL SP_Put_dolar('$data1', '$data2')");
			return var_dump($consult);
        }

        public function Put_lista($data1, $data2){
            $consult = $this->conexion->query("CALL SP_Put_lista('$data1', '$data2')");
			return var_dump($consult);
        }

        public function Put_images($data1, $data2, $data3, $data4, $data5, $data6, $data7){
            $binaryImage = mysqli_escape_string($this->conexion, $data4);
            $consult = $this->conexion->query("CALL SP_Put_images('$data1', '$data2', '$data3', '$binaryImage', '$data5', '$data6', '$data7')");
            return $consult;
        }


    }
?>