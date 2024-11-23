<?php
    class Run_Model{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }

        public function Run_marca(){
            $consult = $this->conexion->query("CALL SP_Run_marca()");
            return $consult;
        }

        public function Run_dolar(){
            $consult = $this->conexion->query("CALL SP_Run_dolar()");
            return $consult;
        }

        public function Run_listas(){
            $consult = $this->conexion->query("CALL SP_Run_listas()");
            return $consult;
        }
        
    }
?>
