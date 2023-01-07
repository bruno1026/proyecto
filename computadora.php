<?php
    class Computadora{
        private $marca1;
        private $procesador;
        private $almacenamiento;

        public function getMarca1(){//--------MARCA COMPUTADORA
            return $this->marca1;
        }

        public function setMarca1($marca1){
            $this->marca1 = $marca1;
        }//----------------------------------MARCA COMPUTADORA


        public function getProcesador(){//--------PROCESADOR
            return $this->procesador;
        }

        public function setProcesador($procesador){
            $this->procesador = $procesador;
        }//--------------------------------------------------PROCESADOR

        public function getAlmacenamiento(){//--------ALMACENAMIENTO
            return $this->almacenamiento;
        }

        public function setAlmacenamiento($almacenamiento){
            $this->almacenamiento = $almacenamiento;
        }//--------------------------------------------------ALMACENAMIENTO

    }
?>