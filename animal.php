<?php
    class Animal {
        private $nombre;
        private $especie;
        private $tipo;

        public function getNombre(){
            return $this->nombre; 
        }

        public function setNombre($nombre){
            $this->nombre = $nombre; 
        }

        public function getEspecie(){
            return $this->especie;
        }

        public function setEspecie($especie){
            $this->especie = $especie; 
        }

        public function getTipo(){
            return $this->tipo; 
        }

        public function setTipo($tipo){
            $this->tipo = $tipo; 
        }
    }
?>