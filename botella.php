<?php
    class Botella {
        private $material;
        private $capacidad;
        private $liquido;

        public function getMaterial(){
            return $this->material; 
        }

        public function setMaterial($material){
            $this->capacidad = $material; 
        }

        public function getCapacidad(){
            return $this->capacidad; 
        }

        public function setCapacidad($capacidad){
            $this->capacidad = $capacidad; 
        }

        public function getLiquido(){
            return $this->liquido; 
        }

        public function setLiquido($liquido){
            $this->liquido = $liquido; 
        }
    }
?>