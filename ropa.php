<?php
    class Ropa {
        private $prenda;
        private $color;
        private $talla;

        public function getPrenda(){
            return $this->prenda; 
        }

        public function setPrenda($prenda){
            $this->prenda = $prenda; 
        }

        public function getColor(){
            return $this->color; 
        }

        public function setColor($color){
            $this->color = $color; 
        }

        public function getTalla(){
            return $this->talla; 
        }

        public function setTalla($talla){
            $this->talla = $talla; 
        }
    }
?>