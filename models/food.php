<?php
    class Food extends Product{
        public $weight;
        public $ingredients;

        public function __constructor(string $_name , string $_image, float $_price, string $_category, float $_weight, string $_ingredients){
            
            parent::__constructor($_name, $_image, $_price, $_category);

            $this->weight = $weight;
            $this->ingredients = $ingredients;
        }
    }
?>
