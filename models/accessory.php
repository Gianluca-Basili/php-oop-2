<?php
    class accessory extends Product{
       public $materials;
       public $size; 

       public function __constructor(string $_name , string $_image, float $_price, string $_category, string $_size, string $_materials){
        parent::__construct($_name, $_image, $_price, $_category);
        $this->materials = $_materials;
        $this->size = $_size;
        }
    }
?>