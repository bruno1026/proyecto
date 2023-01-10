<?php
    class Computadora {
        private $marca;
        private $modelo;
        private $almacenamiento;
        private $ram;

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

        public function getAlmacenamiento(){
            return $this->almacenamiento; 
        }

        public function setAlmacenamiento($almacenamiento){
            $this->almacenamiento = $almacenamiento; 
        }

        public function getRam(){
            return $this->ram; 
        }

        public function setRam($ram){
            $this->ram = $ram; 
        }
    }