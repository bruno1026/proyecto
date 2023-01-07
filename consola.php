<?php
    class Consola{
        private $compania;
        private $modeloc;
        private $colorc;

        public function getCompania(){
            return $this->compania;
        }

        public function setCompania($compania){
            $this->compania = $compania;
        }

        public function getModeloc(){
            return $this->modeloc;
        }

        public function setModeloc($modeloc){
            $this->modeloc = $modeloc;
        }

        public function getColorc(){
            return $this->colorc;
        }

        public function setColorc($colorc){
            $this->colorc = $colorc;
        }
    }
?>