<?php
    class Carro {
        private $matricula;
        private $color;
        private $combustible;

        public function getMatricula(){
            return $this->matricula; 
        }

        public function setMatricula($matricula){
            $this->matricula = $matricula; 
        }

        public function getColor(){
            return $this->color; 
        }

        public function setColor($color){
            $this->color = $color; 
        }

        public function getCombustible(){
            return $this->combustible; 
        }

        public function setCombustible($combustible){
            $this->combustible = $combustible; 
        }
    }
?>