<?php

    class Lingkaran{
       protected $r;
       protected $keliling;
       protected $luas;

        public function __construct($jariJari){
            $this->r=$jariJari;            
        }

        public function getKeliling(){
            $this->keliling=2*3.14* $this->r;
            return $this->keliling;
        }
        public function getLuas(){
            $this->luas=3.14*($this->r*$this->r);
            return $this->luas;
        }
    }
?>