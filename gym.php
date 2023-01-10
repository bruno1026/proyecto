<?php
    class Gimnasio {
        private $horario;
        private $suscripcion;
        private $costo;

        public function getHorario(){
            return $this->horario; 
        }

        public function setHorario($horario){
            $this->horario = $horario; 
        }

        public function getSuscripcion(){
            return $this->suscripcion; 
        }

        public function setSuscripcion($suscripcion){
            $this->suscripcion = $suscripcion; 
        }

        public function getCosto(){
            return $this->costo; 
        }

        public function setCosto($costo){
            $this->costo = $costo; 
        }
    }
?>