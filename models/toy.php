<?php
    class Toy extends Product{
        public $size;
        public $features;



        public function __constructor(string $_name , string $_image, float $_price, string $_category, string $_size, string $_features){
            parent::__construct($_name, $_image, $_price, $_category);
            $this->size = $size;
            $this->features = $features;
        }
    }
?>