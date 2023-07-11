<?php
    class Product{
        public $name;
        public $image;
        public $price;
        public $category;

        public function __construct(string $_name, string $_image, float $_price, string $_category){
            $this->name = $_name;
            $this->image = $_image;
            $this->price = $_price;
            $this->category = $_category;
        }

        public function getDiscountedPrice(int $_discount = 0){
            if($_discount === 0){
                $discounted_price = $this->price;

                return $dicounted_price *= (1 - $_discount / 100);
            }
        }
    }
?>