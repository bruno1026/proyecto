<?php
    class Celular {
        private $marca;
        private $memoria;
        private $gama;

        public function getMarca(){
            return $this->marca; 
        }

        public function setMarca($marca){
            $this->marca = $marca; 
        }

        public function getMemoria(){
            return $this->memoria; 
        }

        public function setMemoria($memoria){
            $this->memoria = $memoria; 
        }

        public function getGama(){
            return $this->gama; 
        }

        public function setGama($gama){
            $this->gama = $gama; 
        }
    }
?>