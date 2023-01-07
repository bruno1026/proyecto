<?php
    class Mochila{
        private $tamaño;
        private $marcam;
        private $colorm;

        public function getTamaño(){
            return $this->tamaño;
        }

        public function setTamaño($tamaño){
            $this->tamaño = $tamaño;
        }

        public function getMarcam(){
            return $this->marcam;
        }

        public function setMarcam($marcam){
            $this->marcam = $marcam;
        }

        public function getColorm(){
            return $this->colorm;
        }

        public function setColorm($colorm){
            $this->colorm = $colorm;
        }
    }
?>