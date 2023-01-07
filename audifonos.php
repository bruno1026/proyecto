<?php
    class Audifonos{

        private $tipo;
        private $color;
        private $marcaa;

        public function getTipo(){//--------MARCA
            return $this->tipo;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }//----------------------------------MARCA

        public function getColor(){//--------COLOR
            return $this->color;
        }

        public function setColor($color){
            $this->color = $color;
        }//-----------------------------------COLOR

        public function getMarcaa(){//--------MARCA
            return $this->marcaa;
        }

        public function setMarcaa($marcaa){
            $this->marcaa = $marcaa;
        }//-----------------------------------MARCA
    }
?>