<?php
    class Lavadora {
        private $tipo;
        private $marca;
        private $costo;

        public function getTipo(){
            return $this->tipo; 
        }

        public function setTipo($tipo){
            $this->tipo = $tipo; 
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