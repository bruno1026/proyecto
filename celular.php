<?php
    class Celular{

        private $marca;
        private $modelo;
        private $colorc;
        
        public function getMarca(){//--------MARCA
            return $this->marca;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }//----------------------------------MARCA

        public function getModelo(){//--------MODELO
            return $this->modelo;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }//-----------------------------------MODELO

        public function getColorc(){//--------COLOR
            return $this->colorc;
        }

        public function setColorc($colorc){
            $this->color = $colorc;
        }//-----------------------------------COLOR
    }
?>