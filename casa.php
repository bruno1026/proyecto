<?php
    class Casa {
        private $metros;
        private $color;
        private $costo;

        public function getMetros(){
            return $this->metros; 
        }

        public function setMetros($metros){
            $this->metros = $metros; 
        }

        public function getColor(){
            return $this->color; 
        }

        public function setColor($color){
            $this->color = $color; 
        }

        public function getCosto(){
            return $this->costo; 
        }

        public function setCosto($costo){
            $this->costo = $costo; 
        }
    }
?>