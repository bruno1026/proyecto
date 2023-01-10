<?php
    class Television {
        private $pulgadas;
        private $marca;
        private $costo;

        public function getPulgadas(){
            return $this->pulgadas; 
        }

        public function setPulgadas($pulgadas){
            $this->pulgadas = $pulgadas; 
        }

        public function getMarca(){
            return $this->marca; 
        }

        public function setMarca($marca){
            $this->marca = $marca; 
        }

        public function getCosto(){
            return $this->costo; 
        }

        public function setCosto($costo){
            $this->costo = $costo; 
        }
    }
?>