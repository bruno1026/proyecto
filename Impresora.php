<?php
    class Impresora {
        private $marca;
        private $modelo;
        private $tipo;

        public function getMarca(){
            return $this->marca; 
        }

        public function setMarca($marca){
            $this->marca = $marca; 
        }

        public function getModelo(){
            return $this->modelo; 
        }

        public function setModelo($modelo){
            $this->modelo = $modelo; 
        }

        public function getTipo(){
            return $this->tipo; 
        }

        public function setTipo($tipo){
            $this->tipo = $tipo; 
        }
    }
?>